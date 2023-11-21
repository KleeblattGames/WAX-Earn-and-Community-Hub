<?php
...
Route::auth();

Route::get('user/activation/{token}', 'Auth\AuthController@activateUser')->name('user.activate');
