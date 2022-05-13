<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
Route::group(["namespace"=>"App\Http\Controllers"],function(){
Route::get('/load_main_categories', "CategoryController@loadMainCategories");
Route::get('/load_sub_categories', "CategoryController@loadSubCategories");
});