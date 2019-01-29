<?php

Route::get('/',function(){
	return view('layouts.admin.index');
});


Route::group(['prefix'=>'admin'], function(){
	Route::get('dashboard', [
		'uses'=>'Admin\DashboardController@index',
		'as'=>'admin.dashboard'
	]);
    Route::get('categories',[
    	'uses'=>'Admin\CategoryController@index',
    	'as'  =>'admin.categories.index'
    ]);
    Route::get('categories/create',[
    	'uses'=>'Admin\CategoryController@create',
    	'as'  =>'admin.categories.create'
    ]);
    Route::get('categories/edit/{id}', [
    	'uses'=>'Admin\CategoryController@edit',
    	'as'  =>'admin.categories.edit'
    ]);
     Route::get('categories/delete/{id}', [
    	'uses'=>'Admin\CategoryController@delete',
    	'as'  =>'admin.categories.delete'
    ]);
	Route::post('categories/update/{id}', [
    	'uses'=>'Admin\CategoryController@update',
    	'as'  =>'admin.categories.update'
    ]);
	Route::post('categories/store', [
    	'uses'=>'Admin\CategoryController@store',
    	'as'  =>'admin.categories.store'
	]);
	Route::get('categories/delete/{id}', [
    	'uses'=>'Admin\CategoryController@destroy',
    	'as'  =>'admin.categories.delete'
    ]);

});