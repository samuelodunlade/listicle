<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //all categories
    public function index(){
        return view("admin.categories.categories");
    }

    //display form for category
    public function create(){
        return view("admin.categories.addcategory");
    }

    //save form content
    public function save(){
        return null;
    }

    //show edit form with former content
    public function edit(){
        return view("admin.categories.editcategory");
    }

    //update form content

    public function update(){
        return null;
    }

}
