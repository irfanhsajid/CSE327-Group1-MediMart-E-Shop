<?php

namespace App\Http\Controllers\medimart_controllers;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class HomepageController extends Controller
{

    /**
     * The function retrieves and orders book data from the database and returns a view with the data.
     * 
     * @return a view called 'medimart_frontends.homePage' and passing the variable  to the
     * view.
     */
    
    public function viewHomepage(){

        $productData = Books::orderBy('book_id', 'DESC')->get();

        return view('medimart_frontends.homePage',compact('productData'));
    }
}
