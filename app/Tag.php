<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Tag extends Model
{
    //Метод связи многие ко многим для постов и тегов
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
