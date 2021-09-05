<?php
// https://stackoverflow.com/questions/33106904/class-app-http-controllers-db-not-found-in-laravel-5-controller
// https://www.php.net/manual/en/timezones.asia.php
// http://localhost/migrations/public/flights
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\ProductController;

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

// Route::get('/flights', [FlightController::class, 'index']);
// Route::get('/students', [StudentsController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);