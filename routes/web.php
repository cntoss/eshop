<?php

Route::get('/',function(){
	return view('layouts.admin.index');
});


Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
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
    Route::post('posts/edit/{id}', [
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
    Route::get('posts/show', [
        'uses'=>'Admin\PostController@show',
        'as'  =>'admin.posts.show'
    ]);   
    Route::get('users',[
        'uses'=>'Admin\UserController@index',
        'as'  =>'admin.users.index'
    ]);
    Route::get('users/create',[
        'uses'=>'Admin\UserController@create',
        'as'  =>'admin.users.create'
    ]);

    Route::post('users/store',[
        'uses'=>'Admin\UserController@store',
        'as'  =>'admin.users.store'
    ]);
    Route::get('users/show',[
        'uses'=>'Admin\UserController@show',
        'as'  =>'admin.users.show'
    ]);
    Route::get('users/edit/{id}',[
        'uses'=>'Admin\UserController@edit',
        'as'  =>'admin.users.edit'
    ]);
    Route::get('users/delete/{id}', [
        'uses'=>'Admin\UserController@destroy',
        'as'  =>'admin.users.delete'
    ]);
    Route::post('users/update/{id}', [
        'uses'=>'Admin\UserController@update',
        'as'  =>'admin.users.update'
    ]);


    Route::get('user',[
        'uses'=>'Admin\AdminController@index',
        'as'  =>'admin.user.index'
    ]);
    Route::get('user/create',[
        'uses'=>'Admin\AdminController@create',
        'as'  =>'admin.user.create'
    ]);
    Route::post('user/store',[
        'uses'=>'Admin\AdminController@store',
        'as'  =>'admin.user.store'
    ]);
    Route::get('user/show',[
        'uses'=>'Admin\AdminController@show',
        'as'  =>'admin.user.show'
    ]);
    Route::get('user/edit/{id}',[
        'uses'=>'Admin\AdminController@edit',
        'as'  =>'admin.user.edit'
    ]);
    Route::get('user/delete/{id}', [
        'uses'=>'Admin\AdminController@destroy',
        'as'  =>'admin.user.delete'
    ]);
    Route::post('user/update/{id}', [
        'uses'=>'Admin\AdminController@update',
        'as'  =>'admin.user.update'
    ]);
});

Route::group(['prefix' => 'users','middleware'=>'auth'], function() {
    Route::get('posts/edit', [
        'uses'=>'Admin\PostController@edit',
        'as'  =>'admin.posts.edit'
    ]);
    Route::post('posts/edit', [
        'uses'=>'Admin\PostController@update',
        'as'  =>'admin.posts.update'
    ]);
    Route::post('posts/store', [
        'uses'=>'Admin\PostController@store',
        'as'  =>'admin.posts.store'
    ]);
    Route::get('posts/show', [
        'uses'=>'Admin\PostController@show',
        'as'  =>'admin.posts.show'
    ]);   
   
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
