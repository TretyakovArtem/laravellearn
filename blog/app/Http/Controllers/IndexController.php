<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //

    public function show() {

        $array = [
            'title' => 'Laravel',
            'data'  => [
                'one' => 'List 1',
                'two' => 'List 2',
                'three' => 'List 3',
                'four' => 'List 4',
                'five' => 'List 5',
            ],
            'dataI'  => ['List 1', 'List 2', 'List 3', 'List 4', 'List 5'],
            'bvar'   => true,
            'script' => "<script>alert('hello')</script>"
        ];


        //$data = array('title' => 'Hello');
        //return view('default.template', $data);


        if(view()->exists('default.index')) {
/*
            view()->name('default.index', 'myview');
            return view()->of('myview')->with(['title'=>'WorlDDD']);
            //return view('default.template')->with('title', 'Wo8rld');

  */
            return view('default.index', $array);
        }


        abort(404);


    }
}
