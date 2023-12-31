<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\PostController;
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

Route::get('/', function() {
    return view('welcome');
})->name('home');

Route::get('users', [UserController::class, 'index'])->name('user.index');
Route::get('users/{user}', [UserController::class, 'show'])->name('user.show');

Route::get('businesses', [BusinessController::class, 'index'])->name('businesses.index');
Route::post('businesses', [BusinessController::class, 'store'])->name('businesses.store');
Route::post('businesses/{business}', [BusinessController::class, 'update'])->name('businesses.update');
Route::delete('businesses/{business}', [BusinessController::class, 'delete'])->name('businesses.delete');

Route::get('posts', [PostController::class, 'index'])->name('post.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');

/*
Route::get('user/{user}', function(User $user) {
    return $user;
});

Route::get('user/{user:email}', function(User $user) {
    return $user;
});

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

Route::get('/request', function(Request $request) {
    $params = $request->all();
    //dd($params);

    $header = $request->header();
    //dd($header);

    $path = $request->path();
    //dd($path);

    $method = $request->method();
    //dd($method);

    $ip = $request->ip();
    //dd($ip);

    if ($request->has('keyword')) {
        dd('Alguma coisa...');
    }

    return 'request';
});
*/
