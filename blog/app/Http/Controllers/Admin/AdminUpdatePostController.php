<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;
use Gate;

class AdminUpdatePostController extends Controller
{
    //

    public function show(Request $request, $id) {
        $article = Article::find($id);

        return view('default.update_post', ['title'=>'Редактирование материала', 'article' => $article]);
    }



    public function create(Request $request) {
        $this->validate($request, [
            'name'=>'required'
        ]);

        $user = Auth::user();

        $data = $request->except('_token');

        $article = Article::find($data['id']);


        if(Gate::/*forUser(3)->*/allows('update-article', $article)) {
            $article->name = $data['name'];
            $article->img = $data['img'];
            $article->text = $data['text'];

            $res = $user->articles()->save($article);

            return redirect()->back()->with('message', 'Материал обновлен');
        }



        return redirect()->back()->with(['message'=> 'У Вас нет прав']);




    }
}
