<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\BusinessListing;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index(){
        $categories = Category::where("is_active", "=", 1)->get();
        $lists = BusinessListing::where("is_active", "=", 1)->latest()->take(3)->get();
        return view("index", ["categories"=> $categories, "lists"=> $lists,]);
    }

    public function listing(){
        $categories = Category::where("is_active", "=", 1)->get();
        $lists = BusinessListing::where("is_active", "=", 1)->orderBy('created_at', 'desc')->get();
        return view("listing", ["categories"=> $categories, "lists"=> $lists,]);
    }

    public function detail($id){
        $listing = BusinessListing::find($id);
        return view("detail", ['listing' => $listing]);
    }

    public function listingByCategory(){
        return view("categorylisting");
    }

}
