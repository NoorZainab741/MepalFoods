<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index()
    {
        $categories = Category::get()->all();
        return view('welcome',compact('categories'));
    }
    public function contactus()
    {
        return view('contactus');
    }
    public function aboutus()
    {
        return view('about');
    }
    public function productsbycategory($id)
    {
        $category = Category::where('id',$id)->get()->first();
        $products = Product::where('category_id',$id)->get()->all();
        return view('productsbycategory',compact('category','products'));
    }
}
