<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

Route::get('testimonials', [LandingController::class, 'testimonials'])->name('landing.testimonials');
// get routesnya lalu landingcontroller dilanjut function yang dipakai dan kita kasih nama

Route::get('details', [LandingController::class, 'details'])->name('landing.details');
Route::resource('/', LandingController::class);
