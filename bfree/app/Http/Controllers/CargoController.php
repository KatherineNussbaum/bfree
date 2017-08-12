<?php

namespace App\Http\Controllers;

use App\Cargo;
use Illuminate\Http\Request;
use Illuminate\Http\Requests\CreateCargoRequest;

class CargoController extends Controller
{
	// Rutas

	public function index()
    {
    	return view('admin.cargo.cargos');
    }


    // crear cargo nuevo
    public function store(CreateCargoRequest $request)
    {
    	Cargo::create($request->all());
    	return 'guardado';
    }


}
