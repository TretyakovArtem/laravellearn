<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;

use App\Http\Controllers\Controller;


use Validator;


class ContactController extends Controller
{

    public function store(ContactRequest $request) {

            if($request->isMethod('post')) {

               /* $messages = [];

                $validator = Validator::make($request->all(), [
                    'name'=>'required'
                ], $messages);


                if($validator->fails()) {
                    return redirect()->route('contact')->withErrors($validator)->withInput();
                }*/

            }

            $context = ['title'=>'Contacts'];

            return view('default.contact', $context);

        }


    public function show() {

        $context = ['title'=>'Contacts'];

        return view('default.contact', $context);

    }
}


