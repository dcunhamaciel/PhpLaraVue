<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('user/{user}', function(User $user) {
    return $user;
});

/*Route::get('user/{user:email}', function(User $user) {
    return $user;
});*/

Route::get('/users/{paramA}/{paramB}', function ($paramA, $paramB) {
    return $paramA . ' - ' . $paramB;
    //return view('welcome');
})->name('users');

Route::get('/a-empresa/{string?}', function ($string= null) {
    return $string;
    //return view('welcome');
})->name('a-empresa');

Route::prefix('usuarios')->group(function() {
    Route::get('', function() {
        return 'usuários';
    })->name('usuarios');

    Route::get('/{id}', function() {
        return 'detalhes do usuário';
    })->name('usuarios.show');

    Route::get('/{id}/tags', function() {
        return 'tags do usuário';
    })->name('usuarios.tags');
});