<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class StudentsController extends Controller
{
    public function index(){
        $students = Students::all();
        return view('students', ['students' => $students]);
    }
}
