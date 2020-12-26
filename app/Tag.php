<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Tag extends Model
{
    /** Добавляем связь многие ко многим с таблицей posts */
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }
}
