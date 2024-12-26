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
        $Mision2 = MisVis::where('status', 'activo')->where('id', 1) ->get();
        $Vision2 = MisVis::where('status', 'activo')->where('id', 2) ->get();

        foreach($Mision2 as $item){
              $Mision = $item['name'];
              $imgMision = $item['image'];
        }
        
        foreach($Vision2 as $item){
            $Vision= $item['name'];
            $imgVision = $item['image'];
        
        }


        return view('layouts.index', compact('servicios',
        'redes', 
        'Mision', 
        'Vision',
        'imgVision',
        'imgMision'
    ));
    }

}
