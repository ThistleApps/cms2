<?php 

Route::group(['namespace' => 'Quarx', 'middleware' => ['web']], function () {

/*
|--------------------------------------------------------------------------
| Relation App Routes
|--------------------------------------------------------------------------
*/

Route::resource('relations', 'RelationsController', ['only' => ['index']]);


});