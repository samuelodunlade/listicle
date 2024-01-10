<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\admin\CategoryController as AdminCategoryController;

//users
use App\Http\Controllers\user\ListingController;


use App\Http\Controllers\user\DashboardController as UserDashboardController;
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

Route::get('/', [SiteController::class, 'index']);
Route::get('/listings', [SiteController::class, 'listing']);

Route::get('/listings/{id}/detail', [SiteController::class, 'detail']);

Route::get('/listings/category/{id}/detail', [SiteController::class, 'listingByCategory'])->name("listingbycategory");





//******************Admin Routes ********************//
//dashboard
Route::get('/admin/dashboard',[AdminDashboardController::class,'index'])->middleware(['auth', 'verified', 'admin'])->name('admin.dashboard');
// categories: AdminCategoryController

Route::controller(AdminCategoryController::class)->middleware(['auth', 'verified', 'admin'])->group(function(){
    Route::get("/admin/categories", "index")->name("admin.categories");
    Route::get("/admin/categories/create", "create")->name("admin.categories.create");
    Route::post("/admin/categories/create", "save")->name("admin.categories.save");
    Route::get("/admin/categories/{id}/edit", "edit")->name("admin.categories.edit");
    Route::get("/admin/categories/{id}/edit", "update")->name("admin.categories.update");
});




//users Routes UserDashboardController
Route::get('/users/dashboard',[UserDashboardController::class,'index'])->middleware(['auth', 'verified'])->name('users.dashboard');

//business listing crud for users 
Route::prefix("/users")->middleware(['auth', 'verified'])->group(function(){
    Route::get("/listing/update", [ListingController::class, "index"])->name("user.updatebusinessprofile");
    Route::post("/listing/update", [ListingController::class, "save"])->name("user.savebusinessprofile");
    
});





Route::get('/dashboard', function () {
    return view('users.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
 
require __DIR__.'/auth.php';
