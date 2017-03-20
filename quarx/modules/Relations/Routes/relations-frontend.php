<?php 

Route::group(['namespace' => 'Quarx\Modules\Relations\Controllers', 'prefix' => '', 'middleware' => ['web', 'auth', 'quarx']], function () { 

  /*
  |--------------------------------------------------------------------------
  | Relations Routes
  |--------------------------------------------------------------------------
  */

  Route::resource('relations', 'RelationsController', ['only' => ['index']]);


});