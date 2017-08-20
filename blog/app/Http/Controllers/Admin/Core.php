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


        $user = User::find(2);

        $role_id = Role::find(2)->id;

        //$user->roles()->attach($role_id);
        $user->roles()->detach($role_id);




        return ;
    }



    public function getArticle($id)
    {
        echo $id;
    }



}
