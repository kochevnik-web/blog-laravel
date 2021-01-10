<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Rubric;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /** Добавляем логирование для sql запросов */
        
        DB::listen(function ($query) {

            // dump($query->sql, $query->bindings);

            // Log::channel('sqllogs')->info($query->sql);
        });

        view()->composer('layouts.footer', function($view){
            $view->with('rubrics', Rubric::all());
        });
    }
}
