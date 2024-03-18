<?php

namespace App\Http\Controllers;

use App\Models\Specie;
use Illuminate\Http\Request;

class PlantaController extends Controller
{
    public function index()
    {
        $species = Specie::paginate();
        
        return view('plantas.index', compact('species'));
    } 

    public function create()
    {
        return view('plantas.create');
    } 

    public function show($id)
    {
        $species = Specie::find($id);
        
        return view('plantas.show', compact('species'));
    } 
}
