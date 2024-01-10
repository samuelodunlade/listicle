<?php

namespace App\Http\Controllers\admin;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //all categories
    public function index(){
        $categories = Category::all();
        return view("admin.categories.categories", compact('categories'));
    }

    //display form for category
    public function create(){
        return view("admin.categories.addcategory");
    }

    //save form content
    public function save(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $category = new Category([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/categories'), $imageName);
            $category->image = $imageName;
        }
    
        $category->save();
        return redirect('/admin/categories')->with('success', 'Category has been added');
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
