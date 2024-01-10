<?php

namespace App\Http\Controllers\admin;
use App\Models\Category;
use App\Models\BusinessListing;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $categories = Category::where("is_active", "=", 1)->get();
        $cat_num = count( $categories);
        $lists = BusinessListing::where("is_active", "=", 1)->get();
        $list_num = count($lists);
        return view("admin.dashboard",  ["cat_num"=> $cat_num, "list_num"=> $list_num,]);
    }
}
