<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //
    public function index(){
        $title = "Welcome to my Laravel course.";
        $description = "C'est le LOL ici";
        $data = ["iPhone", "Samsung", "Xiaomi"];
        return view('products.index', compact("title", "description", "data"));
    }

    public function show($name){

        $data = [
            "iphone"=>"iPhone",
            "samsung"=>"Samsung",
            "xiaomi"=>"Xiaomi"
        ];

        return view('products.index', [
            'products'=>$data[$name] ?? "Product " . $name . " does not exist."
        ]);
    }
}
