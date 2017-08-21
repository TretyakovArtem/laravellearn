<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Controllers\Controller;


class ContactController extends Controller
{

    public function show(Request $request) {

            if($request->isMethod('post')) {
                $rules = [
                    'name'=>'exists:users',
                    'email'=>'required|email'
                ];
                $this->validate($request, $rules);


                dump($request->all());

            }

            $context = ['title'=>'Contacts'];

            return view('default.contact', $context);

        }
}


