<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
class cartController extends Controller
{
    public function index(){

$carts=Cart::all();

        return view('cart',compact('carts'));
    }
}
