<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function login(Request $req)
    {
        $validated = $req->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return response('<h3>Customer not found</h3>');
        }
        else
        {
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }
    public function register(Request $req): \Illuminate\Foundation\Application|\Illuminate\Http\Response|\Illuminate\Routing\Redirector|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Routing\ResponseFactory
    {
        $validated = $req->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|unique:users|max:100',
            'phone' => 'required|max:11|unique:users',
            'password' => 'required|string|min:8',
            'CoPassword' => 'required|string|min:8',
        ]);

        if($req->password == $req->CoPassword) {
            $user = new User;
            $user->name = $req->name;
            $user->email = $req->email;
            $user->phone= $req->phone;
            $user->address= '';
            $user->password = Hash::make($req->password);
            $user->save();
            return redirect('login');
        }
        else
        {
            return response('<h3>Confirm Password is not correct<h3>');
        }
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        Session::flush();
        return redirect('/');
    }


    public function edite_profile(Request $req): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|string|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $validated = $req->validate
        ([
            'name' => 'required|string|max:30',
            'phone' => 'required|min:11|max:11|regex:/^(\+?\d{1,3})?[ -]?\d{10}$/',
            'address' => 'required|string|max:255',
            'password' => 'required',
        ]);

        if(Hash::check($req->password,session()->get('user')['password']))
        {
            $id=session()->get('user')['id'];
            $user =User::findorFail($id);
            $user->name = $req->name;
            $user->phone = $req->phone;
            $user->address = $req->address;
            $user->save();
            return redirect('/');
        }
        else
        {
            return '<h3>Worng Password</h3>';
        }

    }

    public function change_password(Request $req): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|string|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $validated = $req->validate
        ([
            'password' => 'required|string|min:8',
            'new_password' => 'required|string|min:8',
            'new_password_confirmation' => 'required|string|min:8',
        ]);
        $id=session()->get('user')['id'];
        $user =User::findorFail($id);
        if(Hash::check($req->password,session()->get('user')['password']) && ($req->new_password == $req->new_password_confirmation) && !(Hash::make($req->new_password) == $user->password))
        {
            $user->password = Hash::make($req->new_password);
            $user->save();
            return redirect('/');
//        return $req;
        }
        else
        {
            return '<h3>Worng Password</h3>';
        }


    }

}
