<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
});
 */

 Route::view('/','landing.index') -> name('index');
 Route::view('/about','landing.about') -> name('about');
/* 
Es un atajo
El primero de los métodos estáticos que vamos a ver es el método view. 
Este método nos permite devolver una vista sin necesidad de un controlador. 
Cuando se crea una ruta get, la cual es estatica, pude mostrar la vista sin necesidad de un controlador 
Es posible asignar un nombre a la ruta, para poder llamarla desde cualquier parte de la aplicación.
En laravel se accede a una ruta usando . y no / como en otros lenguajes



 /* Route::get('mi/ruta', ControladorDeLaRuta)
 Route::post('mi/ruta', ControladorDeLaRuta)
 Route::put('mi/ruta', ControladorDeLaRuta)
 Route::delete('mi/ruta', ControladorDeLaRuta)
 Route::patch('mi/ruta', ControladorDeLaRuta)
 */