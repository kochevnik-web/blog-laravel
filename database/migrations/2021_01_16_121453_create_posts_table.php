<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //Метод unsigned() означает безнаковое поле
        //Метод nullable() по умолчанию NULLп
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();//Метод unique() - поле уникальное и индексируемое
            $table->text('description');
            $table->text('content');
            $table->integer('category_id')->unsigned();//Метод unsigned() означает безнаковое поле
            $table->integer('views')->unsigned()->default(0);//Метод unsigned() означает безнаковое поле
            $table->string('thumbnail')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
