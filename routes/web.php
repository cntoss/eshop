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

Route::get('posts',[
        'uses'=>'Admin\PostController@index',
        'as'  =>'admin.posts.index'
    ]);
    Route::get('posts/create',[
        'uses'=>'Admin\PostController@create',
        'as'  =>'admin.posts.create'
    ]);
    Route::get('posts/edit/{id}', [
        'uses'=>'Admin\PostController@edit',
        'as'  =>'admin.posts.edit'
    ]);
     Route::get('posts/delete/{id}', [
        'uses'=>'Admin\PostController@delete',
        'as'  =>'admin.posts.delete'
    ]);
    Route::post('posts/update/{id}', [
        'uses'=>'Admin\PostController@update',
        'as'  =>'admin.posts.update'
    ]);
    Route::post('posts/store', [
        'uses'=>'Admin\PostController@store',
        'as'  =>'admin.posts.store'
    ]);
    Route::get('posts/delete/{id}', [
        'uses'=>'Admin\PostController@destroy',
        'as'  =>'admin.posts.delete'
    ]);

});