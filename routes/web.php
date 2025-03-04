<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jffrdlxmn',function(){

    $array = [
        ["name" => "layla", "skill" => "75", "id" => "1"],
        ["name" => "miya", "skill" => "45", "id" => "2"],
    ];
    return view('jffrdlxmn.index', ["greeting" => "hello","datas" => $array ]);
});

Route::get('/jffrdlxmn/create', function () {
    return view('jffrdlxmn.create');
});

Route::get('/jffrdlxmn/{id}',function($id){
    return view('jffrdlxmn.show', ["id" => $id]);
});