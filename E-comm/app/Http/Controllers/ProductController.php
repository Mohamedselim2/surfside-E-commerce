<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $data= Product::all();
        $name=User::all();
        return view('products',['products'=>$data]);
    }

    public function add(Request $req)
    {

        $validated = $req->validate([
            'name' => 'required|string|max:30|unique:users',
            'category' => 'required|max:20',
            'price' => 'required|integer',
            'description' => 'required|string|max:255',
            'photo1' => 'required|string',
            'photo2' => 'required|string',
            'quantity' => 'required|integer',
        ]);

            $product = new Product;
            $product->name = $req->name;
            $product->category = $req->category;
            $product->price= $req->price;
            $product->description= $req->description;
            $product->photo1= $req->photo1;
            $product->photo2= $req->photo2;
            $product->quantity=$req->quantity;
            $product->save();
            return back();
        }


    public function detail($id)
    {
        $data= Product::find($id);
        return view('product_detail',['product'=>$data]);
    }

    public function search(Request $req)
    {
        $data= Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data , 'req'=>$req]);
//        return $req;
    }

        public function get_category($category): string
    {
        $data= Product::where('category',$category)->get();
        $name=User::all();
        return view('products',['products'=>$data]);
//        return 'sui';
    }


}
