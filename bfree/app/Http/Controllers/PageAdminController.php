<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageAdminController extends Controller
{
    // PageAdmin

    public function index()
    {
    	return view('admin.cargo.cargos');
    }
}
