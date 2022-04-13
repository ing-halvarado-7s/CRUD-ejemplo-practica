<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return 'welcome';

});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/producto', function(){
 return "Bienvenido. Página principal de Productos";
});

Route::get('/producto/create', function(){
 return "Bienvenido. Página para crear Productos";
});

Route::get('/producto/{nombre}/{categoria?}', function($nombre,$categoria=null){
    if($categoria){
        return "Bienvenido. Página del Producto: $nombre de la categoria $categoria";
    }else{
        return "Bienvenido. Página del Producto: $nombre";

    }
});

