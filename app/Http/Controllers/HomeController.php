<?php

namespace App\Http\Controllers;

use App\Post;
use App\Country;
use App\City;

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
 

        $post = Post::find(2);
        dump($post->title, $post->rubric);

        return view('home', ['var' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }
}