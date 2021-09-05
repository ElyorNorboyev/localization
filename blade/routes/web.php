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

Route::get('/', function (){
    return view('welcome', ['user' => 'Elyor']);
});

// Route::get('/' ,function () {
//     return view('welcome', ['name' => 'John', 'code' => "<i>static</i>"]);
// });

// Route::get('/', function (){
//     $records = [1, 2, 3];
//     return view('welcome', ['records' => $records]);
// });

// Route::get('/', function () {
//  $users = ['Ali', 'Vali', 'Lola'];
//  return view('welcome', ['users' => $users]);
// });

// Route::get('/', function () {
// $users = DB::table('students')->get();
// return view('welcome', ['users' => $users]);
//});

// Route::get('/', function () {
//  $user = DB::table('students')->first();
// return view('welcome', ['user' => $user]);
// });

// Route::get('/', function () {
//     $user = DB::table('students')->where('id', 5)->first();
//    return view('welcome', ['user' => $user]);
// });

// Route::get('/', function () {
//     $user = DB::table('students')->where('id', 5)->first();
//    return view('welcome', ['user' => $user]);
// });

// Route::get('/', function () {
//     $names = DB::table('students')->pluck('name');
//    return view('welcome', ['names' => $names]);
// });