<?php

/**
 * Site pages
 */
Route::get('/', array('as' => 'home', 'uses' => 'HomeController@index'));
Route::get('content', array('as' => 'content', 'uses' => 'HomeController@content'));
Route::get('detail', array('as' => 'content', 'uses' => 'HomeController@detail'));
Route::get('loi', array('as' => 'loi', 'uses' => 'HomeController@loi'));

Route::get('api/search',array('uses' => 'AnnotationController@search'));
Route::resource('api/annotations', 'AnnotationController');