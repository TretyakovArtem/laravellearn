<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;

class AdminController extends Controller
{
    //

    public function __construct()
    {
        //$this->middleware('auth');
    }


    public function show() {

        $user = Auth::user();

        //dump($user);


        if(!Auth::check()) {
            $user = User::find(2);

            //Auth::guard('web')->login($user);
            //Auth::guard('web')->logout($user);
            //return redirect('/login');
            Auth::loginUsingid(2);
        }



        if(Auth::viaRemember()) {
           echo "Ok";
        }

        dump(Auth::id());

        return view('welcome');
    }



}
