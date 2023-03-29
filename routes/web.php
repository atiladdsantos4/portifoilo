<?php

use Illuminate\Support\Facades\Route;
use App\Classes\Parametros;

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

Route::get('/', function () {
    //return redirect()->route('home.geral');
    $parametros = [
        "titulo_home" => Parametros::TITULO_INDEX,   
        "titulo_about" => Parametros::TITULO_SOBRE,   
        "titulo_service" => Parametros::TITULO_SERVICOS,   
        "titulo_portfolio" => Parametros::TITULO_PORTOFOLIO,   
        "titulo_team" => Parametros::TITULO_TIME,   
        "titulo_blog" => Parametros::TITULO_CONTATO,   
        "endereco" => Parametros::ENDERECO,   
    ];
    return view('home.index',['parametros' => $parametros]); 
});

Route::get('/home', function () {
    //return redirect()->route('home.geral');
    $parametros = [
        "titulo_home" => Parametros::TITULO_INDEX,   
        "titulo_about" => Parametros::TITULO_SOBRE,   
        "titulo_service" => Parametros::TITULO_SERVICOS,   
        "titulo_portfolio" => Parametros::TITULO_PORTOFOLIO,   
        "titulo_team" => Parametros::TITULO_TIME,   
        "titulo_blog" => Parametros::TITULO_CONTATO,   
        "endereco" => Parametros::ENDERECO,   
    ];
    return view('home.index',['parametros' => $parametros]); 
});

Route::prefix('home')->group(function ($interface) {

    Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home.geral'); 
    //Route::get('/novo', [App\Http\Controllers\TipoAtividadeController::class, 'novo'])->name('tipoatividade.novo');  
    Route::post('/mail', [App\Http\Controllers\HomeController::class, 'envia_email'])->name('home.mail'); 
    
    Route::put('/{tipoatividade}/edit', [App\Http\Controllers\TipoAtividadeController::class, 'edit'])->name('tipoatividade.edit');  
    Route::get('/{tipoatividade}/editar', [App\Http\Controllers\TipoAtividadeController::class, 'editar'])->name('tipoatividade.editar');    
    Route::get('/listar', [App\Http\Controllers\TipoAtividadeController::class, 'index'])->name('tipoatividade.listar');   
    Route::get('{tipoatividade}/show', [App\Http\Controllers\TipoAtividadeController::class, 'show'])->name('tipoatividade.show');     
});

Route::prefix('admin')->group(function ($interface) {

    Route::get('/', [App\Http\Controllers\AdminController::class, 'home'])->name('admin.geral'); 
    Route::get('/sair', [App\Http\Controllers\AdminController::class, 'sair'])->name('admin.sair');
    Route::post('/autentica', [App\Http\Controllers\AdminController::class, 'autentica'])->name('admin.autentica'); 
    Route::post('{params}/modifica_param', [App\Http\Controllers\AdminController::class, 'modifica_param'])->name('admin.modifica_param'); 
});