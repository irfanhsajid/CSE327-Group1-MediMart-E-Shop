<?php

namespace App\Http\Controllers\medimart_controllers;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class HomepageController extends Controller
{

    // public function viewHomepage(){
    //     return view('medimart_frontends.homePage');
    // }
    
    public function viewHomepage(){

        $productData = Books::orderBy('book_id', 'DESC')->get();

        return view('medimart_frontends.homePage',compact('productData'));
    }
}
