<?php

namespace App\Http\Controllers;

use App\Post;
use App\Country;
use App\City;
use App\Rubric;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
//Подключаем фасад для работы с куками
use Illuminate\Support\Facades\Cookie;
//Подключаем фасад для работы с кешом
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(Request $request)
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

        // $title = 'Home Page';
        // $h1    = '<h1>Home page header</h1>';

        /** Получение и вывод данных ссесии */

        // dump($request->session()->all());
        // dump(session()->all());
        // dump(session('test');
        // dump($request->session()->get('cart')[0]['title']);

        /** Добавление данных в сеесию  */

        // $request->session()->put('test', 'test data');
        // session(['cart' => [
        //     ['id' => 1, 'title' => 'Product 1'],
        //     ['id' => 2, 'title' => 'Product 2'],
        // ]]);

        /** Добавление данных в сессию */
        // $request->session()->push('cart', ['id' => 3, 'title' => 'Product 3']);

        /** Получение и одновременно удаление данных из сессии. Метод pull() */

        // dump($request->session()->pull('test'));
        // $request->session()->forget('test'); //Просто удаление
        // $request->session()->flush(); //Удаление всез данных из сессий ВНИМАНИЕ!
        
        // dump(session()->all());


        /** Работы с куками (Cookies) */

        /** Создание куки с помощью фасада */
        // Cookie::queue('test', 'Test Cookie', 1);

        /** Получение куки */
        // dump(Cookie::get('test'));
        // dump($request->cookie('test'));

        /** Удалкние куки */
        // Cookie::queue(Cookie::forget('test'));

        /** Работы с кешом Cache */

        /** Сохранение данных в кеш  */
        // Cache::put('key', 'Value', 600);

        /** Получение данных из кеша */
        //dump(Cache::get('key'));

        /** Удаление и отчистка кеша  */
        // $cache = Cache::pull('key'); //Сохранение у даление кеша по ключу
        // Cache::forget('key'); //Отчистка кеша по ключу
        // Cache::flush(); //Отчистка ВСЕГО кеша

        /** Проверка на существование кеша  */
        // if(Cache::has('posts')){
        //     $posts = Cache::get('posts', 6000);
        // } else {
        //     $posts = Post::orderBy('id', 'desc')->get();
        //     Cache::put('posts', $posts); 
        // }
        

        $posts = Post::orderBy('id', 'desc')->paginate(3);
        $title = 'Home Page';

        return view('home', compact('title', 'posts'));
    }

    public function create()
    {

        /** Получаем все рубрики в виде массива (который формируем с помощью метода pluck) */
        $rubrics = Rubric::pluck('title', 'id')->all();

        return view('create', compact('rubrics'));
    }

    public function store(Request $request)
    {

        // dump($request->input('title'));
        // dump($request->input('content'));
        // dd($request->input('rubric_id'));

        // dd($request->all());

        /** При использовании в метода create($request->all()) необходимао в моделе Post указать свойство массового присваивания */
        /** Например: protected $fillable = ['title', 'content', 'rubric_id']; */
        //Post::create($request->all());

        /** Валидация входящих параметров */
        /** Создание своих сообщений об ошибках */
        $messages = [
            'title.required'    => 'Укажите поле заголовка',
            'title.min'         => 'Минимальное кол-во символов для названия 5',
            'title.max'         => 'Максимальное кол-во символов для названия 5',
            'content.required'  => 'Заполните поле Контента',
            'rubric_id.integer' => 'Выбирете рубрику',
        ];

        /** Создание правил валидации */
        $rules = [
            'title'     => 'required|min:5|max:100',
            'content'   => 'required',
            'rubric_id' => 'integer',
        ];

        $validator = Validator::make($request->all(), $rules, $messages)->validate();

        Post::create($request->all());

        /** Создание сессионной переменной flash (удалится после редиректа) */
        $request->session()->flash('success', 'Данные сохранены');


        return redirect()->route('home');
    }
}