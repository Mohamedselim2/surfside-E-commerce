<?php

namespace App\Http\Controllers;

use App\Mail\emailmailer;
use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function msg(Request $req): \Illuminate\Foundation\Application|\Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse|\Illuminate\Contracts\Foundation\Application
    {
        $validated = $req->validate([
            'message' => 'required',

        ]);
        $user_id=session()->get('user')['id'];
        $msg = new contact;
        $msg->user_id = $user_id;
        $msg->message = $req->message;
        $msg->save();
        return redirect('/',);

//        Mail::to(Auth::user()->email)->send(new emailmailer());
//        return $this->sendResponse('email send successfully');
    }

}
