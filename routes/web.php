<?php

Route::get('/', 'SiteController@index');
Route::get('about', 'SiteController@about');
Route::get('contact', 'MesssagesController@write');
