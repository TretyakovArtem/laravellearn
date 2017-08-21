<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use User;

class AdminController extends Controller
{
    //



    public function show() {

        $user = Auth::user();

        if(!Auth::check()) {
            //return redirect('/login');

            $user = User::find(2);

            dump($user);
        }


        if(Auth::viaRemember()) {
            echo 'yes';
        }


        return view('welcome');
    }



}
