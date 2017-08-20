<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?, ?, ?)',
                [
                    'Blog post',
                    '<p>Мой текст</p>',
                    'pic.jpg'
                ]

                    );
        DB::table("articles")->insert(
            [
                [
                    'name'=>'Имя статьи',
                    'text'=>'<p>Текст статьи</p>',
                    'img'=>'pic.jpg'
                ],
                [
                    'name'=>'Имя статьи2',
                    'text'=>'<p>Текст статьи2</p>',
                    'img'=>'pic2.jpg'
                ]
            ]
        );//использование конструктора запросов. Не вручную.

        Article::create([
            'name'=>'Post 3',
            'text'=>'<p>hello</p>',
            'img'=>'pic8.jpg'
        ]);//на моделях
    }
}
