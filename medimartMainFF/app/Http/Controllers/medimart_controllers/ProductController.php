<?php

namespace App\Http\Controllers\medimart_controllers;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProductPage(){

        $productData = Books::orderBy('book_id', 'DESC')->get();

        return view('medimart_frontends.productPage',compact('productData'));
    }
}
