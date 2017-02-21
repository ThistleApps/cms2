<?php

    /*
     * --------------------------------------------------------------------------
     * Quarx Routes
     * --------------------------------------------------------------------------
    */

    Route::group(['namespace' => 'Quarx', 'middleware' => [
        'quarx-language',
        'quarx-analytics',
    ]], function () {
        Route::get('', 'PagesController@home');
        Route::get('pages', 'PagesController@all');
        Route::get('page/{url}', 'PagesController@show');
        Route::get('p/{url}', 'PagesController@show');

        Route::get('gallery', 'GalleryController@all');
        Route::get('gallery/{tag}', 'GalleryController@show');

        Route::get('blog', 'BlogController@all');
        Route::get('blog/{url}', 'BlogController@show');
        Route::get('blog/tags/{tag}', 'BlogController@tag');

        Route::get('faqs', 'FaqController@all');

        Route::get('events', 'EventsController@calendar');
        Route::get('events/all', 'EventsController@all');
        Route::get('events/{month}', 'EventsController@calendar');
        Route::get('events/date/{date}', 'EventsController@date');
        Route::get('events/event/{id}', 'EventsController@show');

        /*
         * --------------------------------------------------------------------------
         * Alt route for pages
         * --------------------------------------------------------------------------
         *
         * You can make direct links to pages and this route will pick them up
        */
        Route::get('{url}', function ($url) {
            return app(App\Http\Controllers\Quarx\PagesController::class)->show($url);
        })->where('url', '([A-z\d-\/_.]+)?');
    });
