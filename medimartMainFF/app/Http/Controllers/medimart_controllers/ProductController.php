<?php

namespace App\Http\Controllers\medimart_controllers;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * The function retrieves product data from the Books table in descending order of book_id and
     * passes it to the productPage view.
     * 
     * @return a view called 'medimart_frontends.productPage' and passing the variable  to
     * the view.
     */
    public function viewProductPage(){

        $productData = Books::orderBy('book_id', 'DESC')->get();

        return view('medimart_frontends.productPage',compact('productData'));
    }
}
