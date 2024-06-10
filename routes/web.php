<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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


Route::get('/users',function(){

    // DB::table('users')->insert(

    //     ["firstname"=>'TÉOURI',
    //     "lastname"=>'Sabirou',
    //     'email'=>'sabirou.teouri@ifnti.com',
    //     'password'=>"ifnti123",
    //     'status'=>'Admin',
    //     'contact'=>'90901814'
    //     ]
    // );

      $users=  DB::table('users')->get()->first();
      $users=  DB::table('users')->first();
      dump($users);

    return "Listes of  users :";
});
