<?php

namespace App\Http\Controllers\medimart_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

    public function viewLogin(){
        return view('medimart_frontends.userLogin');
    }


    public function validateData(Request $request){

        $user = User::where(['email' => $request->email, 'password' => $request->password])->get();
        if($user){

            $request->session()->put('user', $user);
            return redirect('/product_page');

        }
        else{

            return 'Wrong ID pass';
        
        }
    }


    public function view(){
        return view('medimart_frontends.userRegister');
    }


    public function insert(Request $request){
        
        $insert = User::insert([

            'name'=>$request['name'],
            'phone'=>$request['phone'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'confirm_password'=>$request['confirm_password'],
        
        ]);

        if($insert){
            return redirect()->route('user_login');
        }
    }


}
