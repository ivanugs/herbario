<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlantaController;

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

Route::get('/', HomeController::class);

Route::controller(PlantaController::class)->group(function(){
    Route::get('plantas', 'index') -> name('species.index');
    Route::get('plantas/create', 'create') -> name('species.create');
    Route::get('plantas/{id}', 'show') -> name('species.show');
});



