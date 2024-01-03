<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//site pages
Route::get("/", [SiteController::class, "index"])->name("homepage");
Route::get("/listings", [SiteController::class, "listing"])->name("listingpage");
Route::get("/listings/{id}/detail", [SiteController::class, "detail"])->name("listingdetailpage");
Route::get("/listings/category/{id}/details", [SiteController::class, "listingByCategory"])->name("categorylistingdetailpage");


// admin Routes
Route::prefix("/admin")->group(function(){

    //dashboard
    Route::controller(DashboardController::class)->group(function(){
        Route::get("/", "index")->name("admin.dashboard");
    });

    //category
    Route::controller(CategoryController::class)->group(function(){
        Route::get("/categories", "index")->name("admin.viewcategories");
        Route::get("/categories/create", "create")->name("admin.createcategory");
        Route::get("/categories/{id}/edit", "edit")->name("admin.editcategory");
    });


    //business

});