<?php

use App\User;
use App\Projet;
use App\Taches;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',  function(){
     $projets= Projet::all();
     $users= User::all();
     $taches= Taches::all();
    return view('welcome', compact('projets', 'users', 'taches'));
});

    
    
// Route::resource('/users', 'UserController');
Route::resource('/projet', 'ProjetController');
Route::resource('/taches', 'TachesController');



