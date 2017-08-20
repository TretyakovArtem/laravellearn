<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    //
    public function show() {
        //$data = array('title' => 'Hello');
        //return view('default.template', $data);


        if(view()->exists('default.about')) {

            $articles = DB::select("SELECT * FROM `articles`");
            dump($articles);

            view()->name('default.about', 'myview');
            return view()->of('myview')->with(['title'=>'WorlDDD']);
            //return view('default.template')->with('title', 'Wo8rld');
        }


        abort(404);


    }
}
