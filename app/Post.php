<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
        return $this->belongTo('App\Rubric');
        // return $this->belongTo(Rubric::class);
    }
}
