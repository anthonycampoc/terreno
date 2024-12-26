<?php

namespace App\Http\Controllers;

use App\Models\Red;
use App\Models\Service;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
        $servicios = Service::where('status','activo')->get();
        $redes = Red::where('status','activo')->get();

        return view('layouts.index', compact('servicios','redes'));
    }

}
