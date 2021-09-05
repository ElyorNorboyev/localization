<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controller\AboutController;
use App\Http\Controller\ProductController;
use App\Http\Controller\ServicesController;
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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/services', function () {
    return view('services');
});
