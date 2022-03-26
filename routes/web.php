<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Models\add_farmer;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/farmer-list', function () {
    return view('farmer-list');
});

Route::get('/farmer-list', function () {
    return view('farmer-list');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/add-farmer', function () {
    return view('add-farmer');
});

Route::post('/add-farmer',[MemberController::class,'addData'])->name('add_farmer.store');
