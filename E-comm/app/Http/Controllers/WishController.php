<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wish;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishController extends Controller
{
    public function add_to_list($product_id): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        if(session()->has('user')) {
            $user = User::find(session()->get('user')['id']);
            $user->wish()->syncWithoutDetaching($product_id);
            return back();
        }
        else { return redirect('/login'); }
    }
    public function num_of_wish_prod()
    {
        $user_id=session()->get('user')['id'];
        return Wish::from('wishes')->where('user_id',$user_id)->count();
    }

    public function get_data_form_db(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $user = User::find(session()->get('user')['id']);
        $products = $user->wish;
        return view('/wish',['products'=>$products]);
    }


    public function delete_from_wish($product_id): \Illuminate\Http\RedirectResponse
    {
        $user_id=session()->get('user')['id'];
        Wish::from('wishes')->where('user_id',$user_id)->where('product_id',$product_id)->delete();
        return back();
    }

    public function clear_wishes(): \Illuminate\Http\RedirectResponse
    {
        $user_id=session()->get('user')['id'];
        Wish::from('wishes')->where('user_id',$user_id)->delete();
        return back();
    }
}
