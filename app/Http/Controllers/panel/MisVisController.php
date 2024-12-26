<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\MisVis;
use Illuminate\Http\Request;

class MisVisController extends Controller
{
    public function index(){
        return view('Admin.MisVis.index2');
    }

    public function create(){
        return view('Admin.MisVis.create2');
    }
    public function store(Request $request){

       $MisVis = $request->all();//almancena los datos que se mandan desde el fomulario html
        
        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $MisVis['image'] = "$nombreI";
        }

        //MisVis::create($request->all());
        MisVis::create($MisVis);
        return redirect()->to('/MisVis');

    }

    public function edit(){
        return view('Admin.MisVis.edit');
    }
}
