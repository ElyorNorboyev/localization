<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/flowers', function(){
//     return view('img/welcome');
// });

Route::get('/upload', function(){
    return view('upload.index');
})->name('upload.create');

Route::post('/upload', function(\Illuminate\Http\Request $request){
 $path = $request->file('myfile')->store('myfiles');
 $file = new \App\Models\File;
 $file->name = $path;
 $file->save(); 
 return redirect()->route('upload.create');
})->name('upload.store');

Route::get('/files', function(){
$files = \Illuminate\Support\Facades\Storage::allFiles('myfiles');
return view('download.index', ['files' => $files]);
// bu 2 qator kodlar storage papkasida ko'rinadi

//  $allFiles = \App\Models\File::pluck('name');
//  return $allFiles;
// ( bu 2 qator kod yuborilgan malumotlar bazada ko'rinadi)

});

Route::get('/download/{file}', function ($file){
    return \Illuminate\Support\Facades\Storage::download($file);
})->where('file', '.*')->name('download');