<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use Carbon\Carbon;

class Post extends Model
{
    // protected $table = 'my_posts';
    // protected $primaryKey = 'post_id';
    // public $incrementing = false;
    // protected $keyType = 'string';
    // public $timestamps = false;

    // protected $fillable = ['title', 'content'];

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
}
