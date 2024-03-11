<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantaController extends Controller
{
    public function index()
    {
        return view('plantas.index');
    } 

    public function create()
    {
        return view('plantas.create');
    } 

    public function show($planta)
    {
        
        return view('plantas.show', compact('planta'));
    } 
}
