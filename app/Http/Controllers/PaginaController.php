<?php

namespace App\Http\Controllers;

use App\Models\MisVis;
use App\Models\Red;
use App\Models\Service;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
        $servicios = Service::where('status','activo')->get();
        $redes = Red::where('status','activo')->get();
        $Mision = MisVis::where('status', 'activo')->where('id', 1)->first();
        $Vision = MisVis::where('status', 'activo')->where('id', 2)->first();
    
        return view('layouts.index', compact(
        'servicios',
        'redes', 
        'Mision', 
        'Vision'
    ));
    }

}
