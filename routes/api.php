<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/alldata","API\MenuController@index");
Route::get("/showone/{id}","API\MenuController@show");
Route::post("/delete","API\MenuController@delete");
Route::post("/store","API\MenuController@store");
Route::post("/update","API\MenuController@update");
