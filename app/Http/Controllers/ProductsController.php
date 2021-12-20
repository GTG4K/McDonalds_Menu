<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function home(){
       
        $products = Product::where('featured', 1)->get();
    
        return view('home',['products' => $products]);
    }

    public function index(){

        $search = request()->query('search_result');

        if ($search){

            $products = Product::where('name',"$search")->get();
            return view("index",['products' => $products]);
        }

        $products = Product::all();
        return view("index",['products' => $products]);
    }

    public function burgers(){
        $burgers = Product::where('type','burger')->get();

        return view("burgers",['burgers'=> $burgers]);
    }

    public function drinks(){
        $drinks = Product::where('type','drink')->get();

        return view("drinks",['drinks'=> $drinks]);
    }

    public function show($id){

        $product = Product::find($id);

        return view('show',['product' => $product]);
    }

    public function create(){
        $products = Product::all();

        return view('create',['products' => $products]);
    }

    public function edit($id){

        $product = Product::find($id);

        return view('edit',['product'=>$product]);
    }
    
    public function store(){

        $product = new Product();

        $product->name = request('name');
        $product->price = request('price');
        $product->featured = request('featured');
        $product->type = request('type');

        $product->save();

        return redirect('/');
    }

    public function modify(Request $req){

        $product = Product::find($req->id);

        $product->name = $req -> name;
        $product->price = $req -> price;
        $product->featured = $req -> featured;
        $product->type = $req -> type;

        $product->save(); 

        return redirect('/');
    }

    public function delete($id) {
        $user=Product::find($id);
        $user->delete();
        return redirect('/');
    }
}

