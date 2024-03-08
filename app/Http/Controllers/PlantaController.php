<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantaController extends Controller
{
    public function index()
    {
        return "Bienvenido a la pagina plantas.";
    } 

    public function create()
    {
        return "Bienvenido a la pagina create.";
    } 

    public function show($planta)
    {
        return "Bienvenido a la pagina: $planta";
    } 
}
