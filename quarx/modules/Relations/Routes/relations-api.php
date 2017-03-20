<?php

Route::group(['namespace' => 'Quarx\Modules\Relations\Controllers', 'prefix' => '', 'middleware' => []], function () {

    /*
    |--------------------------------------------------------------------------
    | Relations Routes
    |--------------------------------------------------------------------------
    */

    Route::get(   'relationsdata',                  ['as' => 'api.relations.data',           'uses' => 'RelationsController@anyData']);


});

