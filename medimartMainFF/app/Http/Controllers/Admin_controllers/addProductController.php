<?php

namespace App\Http\Controllers\Admin_controllers;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;
use Image;
class addProductController extends Controller
{
    function viewAdminProductPage(){
        return view('medimart_admin_panel.productAdmin');
    }

    function addBooks(Request $request){

        $insert = Books::insert([

            'book_name'=>$request['book_name'],
            'book_price'=>$request['book_price'],
            'book_details'=>$request['book_details'],
            'book_type'=>$request['book_type'],

        ]);

        // image uploadatin starts. . . . . .

        if($request->hasFile('book_image')){

            $book_image = $request->file('book_image');
            $book_image_name = $insert.'-'.time().'.'.$book_image->getClientOriginalExtension();
            Image::make($book_image) -> save('uploads/product_images/'.$book_image_name);
            Books::where('book_id', $insert)->update(['book_img' => $book_image_name]);
        }

        // image uploadatin ends. . . . . .

        if($insert){
            return 'okkkkkkkkkkkkkkkkkkk';
        }
    }








    function addAccesorries(){
        
    }
}
