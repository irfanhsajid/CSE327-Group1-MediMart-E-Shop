<?php

namespace App\Http\Controllers\medimart_controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{

/**
 * The function returns a view for the user login page in a PHP application.
 * 
 * @return a view called 'medimart_frontends.userLogin'.
 */

    public function viewLogin(){
        return view('medimart_frontends.userLogin');
    }

/**
 * The function validates user data by checking if the email and password match a user in the database,
 * and if so, stores the user in the session and redirects to the product page, otherwise returns an
 * error message.
 * 
 * @param Request request The  parameter is an instance of the Request class, which represents
 * an HTTP request made to the server. It contains information about the request, such as the request
 * method, headers, and input data.
 * 
 * @return either a redirect to the '/product_page' route if the user is found and their data is stored
 * in the session, or it is returning the string 'Wrong ID pass' if the user is not found.
 */

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


/**
 * The function returns a view for the user registration page in a PHP application.
 * 
 * @return The view 'medimart_frontends.userRegister' is being returned.
 */
    public function view(){
        return view('medimart_frontends.userRegister');
    }

/**
 * The function inserts user data into the database and redirects to the user login page if successful.
 * 
 * @param Request request The  parameter is an instance of the Request class, which represents
 * an HTTP request. It contains all the data and information about the request, such as the request
 * method, headers, and input data.
 * 
 * @return a redirect to the "user_login" route if the insert operation is successful.
 */

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
