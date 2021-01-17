<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Tag;
use App\Category;

class Post extends Model
{
    //Метод связи многие ко многим для постов и тегов
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    //Метод связи категорий и постов
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
