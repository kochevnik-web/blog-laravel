<?php

namespace App\Http\Controllers;

use App\Post;
use App\Country;
use App\City;
use App\Rubric;

class HomeController extends Controller
{
    public function index()
    {
        // $data = Country::all();
        // $data = Country::where('Code', '<', 'ALB')->select('Code', 'Name')->offset(1)->limit(2)->get();
        // $data = City::find(5);
        // $data = Country::find('AGO');

        /** Добавление данных в модель з способа */
        /** Основной метод добавления данных в БД через модель */

        // $post = new Post();
        // $post->title = 'Статья 2';
        // $post->content = 'Контент статьи 2';
        // $post->save();

        /** При данном методе добавления данных через модель требуется добавить свойство (protected $fillable) в модель */

        // Post::create(['title' => 'Статья 3', 'content' => 'Контент статьи 3']);

        /** Так же следует защетить добавление данных через свойство (protected $fillable) в модель */

        // $post = new Post();
        // $post->fill(['title' => 'Статья 4', 'content' => 'Контент статьи 4']);
        // $post->save();

        /** Обновление данных через модель */

        // $post = Post::find(4); //Получаем элемент по id, который хотим обновить.
        // $post->content = 'Updated content';
        // $post->save();

        /** Обновление данных через модель у нескольких записей*/

        // Post::where('id', '>', 2)->update(['updated_at' => NOW()]);

        /** Удаление данных из БД через методы модели */

        // $post = Post::find(4); //Получаем элемент по id, который хотим удалить.
        // $post->delete();

        // Post::destroy(8);
        // Post::destroy([8, 9]);
        // Post::destroy(4, 5);
 
        /** Получение связанной с постом рубрики */
        // $post = Post::find(2);
        // dump($post->title, $post->rubric->title);

        /** Получение связанной с рубрикой постом */
        // $rubric = Rubric::find(2);
        // dump($rubric->title, $rubric->post->title);

        // $rubric = Rubric::find(4);
        // $post = Rubric::find(4)->posts()->select('title')->where('id', '>', '2')->get();

        /** Получение постов и связанных с ними рубрик с помощью жадной загрузки */

        // $posts = Post::with('rubric')->where('id', '>', 1)->get(); //добавляется метод width

        // //Вывод данных для примера
        // foreach ($posts as $post) {
        //     dump($post->title, $post->rubric->title);
        // }

        /** Получение постов и связанных с ними тегов */

        // $post = Post::find(1);
        // dump($post->title);

        // foreach ($post->tags as  $tag) {
        //     dump($tag->title);
        // }

        $title = 'Home Page';
        $h1    = '<h1>Home page header</h1>';
        return view('home', compact('title', 'h1'));
    }

    public function test()
    {
        return __METHOD__;
    }
}