<?php


Route::controller('auth/password', 'Auth\PasswordController', [
    'getEmail' => 'auth.password.email',
    'getReset' => 'auth.password.reset'
]);
Route::controller('auth', 'Auth\AuthController', [
    'getLogin' => 'auth.login',
    'getLogout' => 'auth.logout'
]);
Route::put('backend/components/update',['as' => 'backend.components.update', 'uses' =>'Backend\ComponentsController@update']);
Route::get('backend/components/header',['as' => 'backend.components.header', 'uses' =>'Backend\ComponentsController@header']);
Route::get('backend/components/about',['as' => 'backend.components.about', 'uses' =>'Backend\ComponentsController@about']);
Route::get('backend/users/{user}/confirm',['as'=>'backend.users.confirm','uses'=>'Backend\UsersController@confirm']);
Route::resource('backend/users', 'Backend\UsersController',['except'=>'show']);
Route::get('backend/pages/{pages}/confirm',['as'=>'backend.pages.confirm','uses'=>'Backend\PagesController@confirm']);
Route::resource('backend/pages', 'Backend\PagesController');
Route::get('backend/offers/{filename}/file',['as'=>'backend.offers.file','uses'=>'Backend\OffersController@file']);
Route::get('backend/offers/{offer}/confirm',['as'=>'backend.offers.confirm','uses'=>'Backend\OffersController@confirm']);
Route::resource('backend/offers', 'Backend\OffersController');
Route::get('backend/blog/{blog}/confirm',['as'=>'backend.blog.confirm','uses'=>'Backend\BlogController@confirm']);
Route::resource('backend/blog', 'Backend\BlogController');
Route::get('backend/dashboard', ['as' => 'backend.dashboard', 'uses' => 'Backend\DashboardController@index']);
Route::post('/mail','SubscribeController@mail');
Route::post('/mailchimp','SubscribeController@mailchimp');
Route::get('/mailtest','SubscribeController@test');
Route::get('/', 'HomeController@index');
