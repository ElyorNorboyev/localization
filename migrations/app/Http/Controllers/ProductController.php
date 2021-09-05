<?php
// https://fakerphp.github.io/formatters/internet/#username
// http://localhost/migrations/public/products
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products', ['products' => $products]);
    }
}
