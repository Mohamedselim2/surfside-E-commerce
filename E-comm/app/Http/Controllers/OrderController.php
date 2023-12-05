<?php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function make_order(Request $req): string
    {
        $validated = $req->validate([
            'name' => 'required|string|max:30',
            'address' => 'required|max:100',
            'phone' => 'required|max:11|min:11',
            'payment' => 'required',
        ]);
        $user_id=session()->get('user')['id'];
        $cartItems = Cart::where('user_id', $user_id)->get();

        foreach ($cartItems as $cartItem)
        {
            $order = new Order;
            $cart = new CartController();
            $order->user_id = $user_id;
            $order->product_id = $cartItem->product_id;
            $order->quantity=$cartItem->quantity;
            $order->total = 1;

            $order->user_name= $req->name;
            $order->address= $req->address;
            $order->phone= $req->phone;
            $order->note= $req->note;
            $order->payment= $req->payment;
            $order->date=now();
            $order->save();


            $cart->delete_from_cart($cartItem->product_id);
        }
        return back();
    }

    public function get_orders(): string
    {
        $user = User::find(session()->get('user')['id']);
        $orders = $user->order;

        return view('/dashboard',['orders'=>$orders]);
    }

    public function get_order($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $order=Order::find($id);
        return view('order',['order'=>$order]);
    }
}




