<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', ['as'=>'home', function () {
    return view('welcome');
}]);
*/


Route::get('/', ['uses' => 'IndexController@show', 'as'=>'home']);


/*

Route::get('/article/{id}', ['as'=>'article', function ($id) {
    echo $id;
}]);


Route::get('/page', function() {
   return view('page');
});

Route::group(['prefix'=>'admin'], function() {

    Route::get('page/create', function () {
        return redirect()->route('article', array('id'=>25));
    });

    Route::get('page/edit', function() {
        echo 'post edit';
    });
});

*/



Route::get('about/{id}', 'FirstController@show');

Route::get('/articles', ['uses' => 'Admin\Core@getArticles', 'as'=>'articles']);

Route::get('/about', ['uses' => 'Admin\AboutController@show', 'as'=>'about']);



Route::get('/article/{id}', ['uses' => 'Admin\Core@getArticle', 'as' => 'article', 'middleware' => 'mymiddle']);

Route::controller('/pages', 'PagesController', ['getCreate'=>'pages.create']);

Route::get('/contact', ['uses' => 'ContactController@show', 'as'=>'contact']);

Route::post('/contact', ['uses' => 'ContactController@store']);
/*
Route::match(['get', 'post'], '/contact', function() {
    var_dump($_POST);
});*/