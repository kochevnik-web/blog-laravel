<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Tag;
use Carbon\Carbon;

class Post extends Model
{
    // protected $table = 'my_posts';
    // protected $primaryKey = 'post_id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;

    /** Свойство массового присваивания для добаления разришенных полей в БД из формы */
    /** При использовании в контроллере метода Post::create($request->all()) */
    protected $fillable = ['title', 'content', 'rubric_id'];

    /** Добавляем одностороннюю связь с таблицей Rubrics */

    public function rubric()
    {
        return $this->belongsTo('App\Rubric');
        // return $this->belongsTo(Rubric::class);
    }

    /** Добавляем связь многие ко многим с таблицей tags */

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /** Создаем метод для вывода даты поста с помощью библиотеки карбон */
    public function getPostDate() {
        return Carbon::parse($this->created_at)->diffForHumans();
    }

    /** Делаем сеттер для поля title */

    public function SetTitleAttribute($value)
    {
        $this->attributes['title'] = Str::title($value);
    }

    /** Создаем сеттер для поля title */
    public function getTitleAttribute($value)
    {
        return Str::upper($value);
    }
}
