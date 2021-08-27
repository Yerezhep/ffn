<?php


use app\Services\Route;


Route::get('/login','AuthController@login');
Route::post('/auth','AuthController@auth');
Route::post('/logout','AuthController@logout');


Route::get('/','HomeController@index');
Route::get('/create','HomeController@create');
Route::post('/task/store','HomeController@store');



/* Страница админа  */

if(isset($_COOKIE['login']))
{
    Route::get('/admin','AdminController@index');
    Route::get('/task/edit','AdminController@edit');
    Route::post('/task/update','AdminController@update');
}
//else if(!isset($_COOKIE['login'])){
//    header("Location:/");
//}






$REQUEST_URI = explode('?',$_SERVER['REQUEST_URI'])[0];
if(!in_array($REQUEST_URI, Route::$routes)){
    include '404.php';
}