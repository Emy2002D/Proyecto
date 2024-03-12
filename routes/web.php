<?php

use App\Http\Controllers\AdminController;

use App\Http\Controllers\CatalogoController;

use App\Http\Controllers\CatusuController;


use App\Http\Controllers\CompraController;

use App\Http\Controllers\IndexController;

use App\Http\Controllers\LoginController;





use App\Http\Controllers\RegUserController;

use App\Http\Controllers\SesionController;

use App\Http\Controllers\UsuarioController;

use App\Http\Controllers\WelcomeController;
use App\Models\usuario;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;





 




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
    return view('welcome');
});





Route::get('/catalogo', [CatalogoController::class, 'index'])->name('catalogo');




Route::get('/usuario', [UsuarioController::class, 'index'])->name('usuario');


Route::get('/welcome', [WelcomeController::class, 'index'])->name('welcome');


Route::get('/sesion', [SesionController::class, 'index'])->name('sesion');


Route::get('/user', [RegUserController::class, 'index'])->name('user');

Route::get('/index', [IndexController::class, 'index'])->name('index');

Route::get('/catusu', [CatusuController::class, 'index'])->name('catusu');

Route::get('/Compra', [CompraController::class, 'index'])->name('compra');


Route::get('/masc', [MascController::class, 'index'])->name('masc');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/paypal', [paypalController::class, 'index'])->name('paypal');



route::post('/usuarioBlade',[RegUserController::class,'store'])->name('UsuarioBlade');

route::post('/CitasBlade',[RegCitasController::class,'store'])->name('CitasBlade');

route::post('/mascBlade',[RegMascController::class,'store'])->name('mascBlade');

Route::post('/index', [LoginController::class,'Login'])->name('LOG');