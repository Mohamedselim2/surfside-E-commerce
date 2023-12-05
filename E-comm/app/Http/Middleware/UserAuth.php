<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(($request->path()=='login' || $request->path()=='register' )&& $request->session()->has('user'))
        {
                return redirect("/");
        }


        if(!($request->session()->has('user')) && !($request->path()=='login' || $request->path()=='register' ) )
        {
            return redirect('/login');
        }

//        if($request->path()=='contact' && !$request->session()->has('user'))
//        {
//            return redirect('/login');
//        }
//
//        if($request->path()=='cart' && !$request->session()->has('user'))
//        {
//            return redirect('/login');
//        }
//        if($request->path()=='dashboard' && !$request->session()->has('user'))
//        {
//            return redirect('/login');
//        }
//        if($request->path()=='profile' && !$request->session()->has('user'))
//        {
//            return redirect('/login');
//        }
//        if($request->path()=='admin' && !$request->session()->has('user'))
//        {
//            return redirect('/login');
//        }
//        if($request->path()=='message' && !$request->session()->has('user'))
//        {
//            return redirect('/login');
//        }
//        if($request->path()=='admin' && (session()->get('user')['state'])=='user')
//        {
//            return redirect('/');
//        }


        return $next($request);
    }
}
