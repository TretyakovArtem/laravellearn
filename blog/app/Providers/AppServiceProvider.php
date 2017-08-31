<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use DB;
use App\Article;
use Log;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        /*Blade::directive('myDir', function ($var) {
            return "<h1>New Directive - $var</h1>";
        });*/

       /* DB::listen(function($query){
            dump($query->sql);
        });*/



       Article::created(function (Article $article) {
           Log::info('Article save in Data', [$article->user->name. '-'.$article->name]);
       });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
