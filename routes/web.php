<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

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


