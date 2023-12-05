<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $msgs=Contact::with('user')->get();
        return view('/dashboard',['msgs' => $msgs]);
    }

    public function message($id): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $msgs=Contact::find($id);
        return view('message',['msg' => $msgs]);
    }
}

