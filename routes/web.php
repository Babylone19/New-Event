<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    // return view('welcome');
    return "Hello world ......";
});

Route::get('/', function () {
    // return view('welcome');
    return "Hello world 2......";
});

// Route::get('/etudians', function (Request $request) {
//     // dump($request);
//     $name=$request->input("name","ALI") ;
//     $age=$request->age ?? "aucune âge";
//     return "Etudiants $name âgé de  $age ans";
// });
//     //return view('welcome');


Route::get('/etudians/{id}/{name}', function (int $id,string $name) {

        return "Etudiants  N° $id .......... $name";
    })->where(['id'=>'[0-9]+','name'=>'[a-zA-Z]+']);
