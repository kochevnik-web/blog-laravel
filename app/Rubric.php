<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    /** Добавляем одностороннюю связь с таблицей Post */
    public function posts()
    {
        // return $this->hasOne('App\Post');
        return $this->hasMany(Post::class);
    }
}
