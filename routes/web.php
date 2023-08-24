<?php

use App\Http\Controllers\ListingController;
use App\Models\Sample;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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
//Display using sample model array
// Route::get('/', function () { 
//     return view('listings', [
//         'heading' =>'Latest Listings',
//         'listings' => Sample::all()
        
//     ]);
// });

// Route::get('/listings/{id}', function($id){
//     return view ('listing', [
//         'listing' => Sample::find($id)
//     ]);
// });

Route::get('/', [ListingController::class, 'index']);
Route::get('/listings/{listing}', [ListingController::class,'show']);

Route::get('/listing/create', [ListingController::class, 'create']);
Route::post('/listing', [ListingController::class, 'store']);
Route::get('/listing/{listing}/edit', [ListingController::class, 'edit']);
Route::put('/listing/{listing}', [ListingController::class, 'update']);
Route::delete('/listing/{listing}', [ListingController::class, 'delete']);



