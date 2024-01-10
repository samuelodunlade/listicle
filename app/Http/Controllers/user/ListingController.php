<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\BusinessListing;

class ListingController extends Controller
{

    public function index(){
        $categories = Category::where("is_active", "=", 1)->get();
        return view("users.listing.addlisting", ["categories"=> $categories]);
    }

    public function save(Request $request){
        // dd($request->user()->id);
        $data = $request->validate([
            "name" => "required|min:2|max:100",
            "slogan" => "required|min:3|max:50",
            "phone" => "required|min:11|max:12",
            "address" => "required|min:10|max:255",
            "description" => "required|min:10|max:5000",
            "website" => "min:10|active_url",
            "cover_image"=> "required|mimes:jpeg,png,jpg,gif,svg|max:2048"
        ]);
    
        $user_id = $request->user()->id;

        $link = new BusinessListing([
            "name" => $request->name,
            "slogan" => $request->slogan,
            "phone" => $request->phone,
            "address" => $request->address,
            "category_id" => $request->category_id,
            "description" => $request->description,
            "website" => $request->website,
            "phone" => $request->phone,

        ]);

        if ($request->hasFile('cover_image')) {
            $image = $request->file('cover_image');
            $imageName = "listicle_" .time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/categories'), $imageName);
            $link->cover_image = $imageName;
        }
        $link->user_id = $user_id;
        $link->save();
        return redirect('/users/dashboard')->with('success', 'Business  has been added');
        






    }




}
