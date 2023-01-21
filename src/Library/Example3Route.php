<?php


namespace Example3\Library;


use Illuminate\Support\Facades\Route;

class Example3Route
{

    public static function routes()
    {
        Route::get('/example/example3', [\Example3\Http\Controllers\PageExample3Controller::class, 'index']);
    }

}
