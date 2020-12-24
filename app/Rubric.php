<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    /** Добавляем одностороннюю связь с таблицей Post */
    public function post()
    {
        // return $this->hasOne('App\Post');
        return $this->hasOne(Post::class);
    }
}
