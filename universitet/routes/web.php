<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function (){
//     return view('welcome', ['user' => 'Ali']);
// });

// Route::get('/' ,function () {
//     return view('welcome', ['name' => 'Elyor', 'code' => "<em>Web dasturlash</em>"]);
// });

Route::get('/', function (){
    $records = [1, 2, 3];
    return view('welcome', ['records' => $records]);
});
