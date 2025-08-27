<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsDetailsController extends Controller
{
    //
    public function index(){
        return view('red_store.product_details');
    }
}
