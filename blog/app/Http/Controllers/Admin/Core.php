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
       //$articles = DB::table('articles')->get();
        //$articles = DB::table('articles')->pluck('name');
        //$articles = DB::table('articles')->count();
        //$articles = DB::table('articles')->max('id');
        /*$articles = DB::table('articles')->chunk(2, function($articles){
                foreach ($articles as $article) {
                    Core::addArticles($article);
                }
        });*/
        //$query = DB::table('articles')->select('name');/*
        //$query = DB::table('articles');
         //$articles = $query->addSelect('text')->get();*/

        /*$articles = $query->select('text')
                                ->where('id', '=', 5)->get()
                                ->where('name', 'like', 'test%')->get();*/

       /* $articles = $query->select('text')
                                ->where([
                                    ['id','>',5],
                                    ['name', 'like', 'test%', 'or']
                                ])
            ->get();

       // dump(self::$articles);
       dump($articles);*/

       /*$articles = Article::where('id', '>', 3)->orderby('name')->take(2)->get();

       foreach ($articles as $article) {
           echo $article->name.'</br>';
       }*/


       /*Article::find([1,2,3]);
       Article::findOrFail();*/
       /* $article = new Article;
        $article->name = 'New Article';
        $article->text = 'New Text';

        $article->save();*/

       $articles = Article::all();
        //$articles = Article::withTrashed()->get();
        //$articles = Article::withTrashed()->restore();

        $article = Article::find(2);
        //$article->forceDelete();
        //$article->delete();

        //dump($articles);

        $user = User::find(1);

        $role = $user->roles()->where('roles.id',2)->first();

        $country = Country::find(1);

        //$article = $user->articles->where('id', 2)->first();

       /* foreach ($articles as $article) {
            echo $article->name.'<br>';
        }*/

        //dump($article->user->name);

        //dump($user->roles);

        //$articles = Article::with('user')->get();
        $articles->load('user');

        foreach ($articles as $article) {
           dump($article->user->name).'<br>';
       }




        dump($articles);



    }



    public function getArticle($id)
    {
        echo $id;
    }



}
