<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ContactRequest;

use App\Http\Controllers\Controller;

use Session;

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


    public function show(Request $request) {

        //$result = $request->session()->get('key', 'default');
        //$result = $request->session()->all();
        //$request->session()->put('key.first', 'value');
        $request->session()->put('key.first', 'value');
        //$request->session()->push('key.second', 'value 2');
        Session::push('key.second', 'value 3');
        session(['key 2'=>'test']);
        //Session::pull('key');
        //Session::flash('message','fdsfs');
        //Session::reflash('message','fdsfs');
        $result = $request->session()->all();

        dump($result);



        $context = ['title'=>'Contacts'];

        return view('default.contact', $context);

    }
}


