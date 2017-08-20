<?php

namespace App\Http\Controllers\Admin;

use App\Country;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Article;
use App\User;


class Core extends Controller
{
    protected static $articles;
    //


    public function addArticles($array) {
        return self::$articles[] = $array;
    }



    public function getArticles(Request $request)
    {

        $articles = Article::all();
        $user = User::find(2);

        foreach ($articles as $article) {
            $article->user()->associate($user);
            $article->save();
        }




        return ;
    }



    public function getArticle($id)
    {
        echo $id;
    }



}
