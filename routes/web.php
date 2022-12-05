<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use Symfony\Component\HttpFoundation\Request;

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

/*
    Metodos de rutas comunes

        - index - Mostrar todos los recursos
        - show - Mostrar un recurso de forma individual
        - create - Mostrar el formulario de creacion de nuevos recursos
        - store - Guardar un nuevo recurso
        - edit - Editar un recurso
        - update - Actualizar un recurso
        - destroy - Eliminar un recurso
*/

Route::get('/', [ListingController::class, 'index']);
Route::get('/{listing}', [ListingController::class, 'show']);