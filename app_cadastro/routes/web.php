<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;

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

Route::get('/', function () {
    $usuarios = Usuario::all();
    return view('welcome',[
        'usuario'=>$usuarios
    ]);
});
Route::resource('/usuario',UsuarioController::class);
