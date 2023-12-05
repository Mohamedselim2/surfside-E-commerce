<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\SerializableClosure\UnsignedSerializableClosure;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class CartController extends Controller
{

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function add_to_cart($product_id): \Illuminate\Http\RedirectResponse
    {
        if(session()->has('user')) {
            $user = User::find(session()->get('user')['id']);
            $product=[$product_id=>['quantity'=>1]];
            $user->products()->syncWithoutDetaching($product);
            return back();
        }
        else { return redirect('/login'); }
    }

    public function num_of_cart_prod()
    {
        $user_id=session()->get('user')['id'];
        return Cart::from('carts')->where('user_id',$user_id)->count();
    }

    public function get_cart_form_db(&$products,&$total)
    {
        $user = User::find(session()->get('user')['id']);
        $products = $user->products;
        $total = 0;
        foreach ($products as $prod)
        {
            $prod['price'] *=$prod->pivot->quantity;
            $total+=$prod['price'];
        }
    }

    public function cart_list(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $products=[];
        $total=0;
        $this->get_cart_form_db($products, $total);
        return view('cart',['products'=>$products,'total'=>$total]);
    }

    public function delete_from_cart($product_id): \Illuminate\Http\RedirectResponse
    {
        $user_id=session()->get('user')['id'];
        Cart::from('carts')->where('user_id',$user_id)->where('product_id',$product_id)->delete();
        return back();
    }

    public function clear_cart(): \Illuminate\Http\RedirectResponse
    {
        $user_id=session()->get('user')['id'];
        Cart::from('carts')->where('user_id',$user_id)->delete();
        return back();
    }
    public function crement_quantity(Request $req,$product_id)
    {
        $user_id=session()->get('user')['id'];
        if ($req->quantity >0) {
            Cart::from('carts')->where('user_id', $user_id)->where('product_id', $product_id)->
            update([
                'quantity' => $req->quantity
            ]);
        }
        return back();
    }



}
