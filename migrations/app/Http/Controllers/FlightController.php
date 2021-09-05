<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class FlightController extends Controller{
    
public function index(){
    $flights = Flight::all();
    return view('flight', ['flights' => $flights]);
}

// public function index(){
//     return "All Flights from Controller";
// }

// public function index(){
//     return view('flight');
// }

// public function index(){
//     $flights = DB::table('flights')->get();
//     return view('flight', ['flights'=>$flights]); 
// }

}
