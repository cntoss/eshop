<?php

Route::get('/',function(){
	return view('layouts.admin.index');
});


Route::group(['prefix'=>'admin'], function(){
	Route::get('categories', [
		'uses' => 'Admin\CategoriesController@index',
		'as'	=>	'admin.categories'
	]);
});