<?php

/**
 * Site pages
 */
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('content', array('as' => 'content', 'uses' => 'HomeController@content'));