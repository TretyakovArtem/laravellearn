<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Article;
use App\User;
use App\Role;

class Core extends Controller
{
    protected static $articles;
    //


    public function addArticles($array) {
        return self::$articles[] = $array;
    }



    public function getArticles(Request $request)
    {

    $article = Article::find(3);

    $article->name = 'new new';

    echo $article->name;



        return ;
    }



    public function getArticle($id)
    {
        echo $id;
    }



}
