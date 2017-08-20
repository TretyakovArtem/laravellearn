<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    //
    public function show(Request $request) {

        if($request->isMethod('post')) {
            $request->flash();
        }


        //print_r($request->method());
        $input = $request->all();
        print_r($input);
        $context = ['title'=>'Contacts'];
        return view('default.contact', $context);
    }
}


