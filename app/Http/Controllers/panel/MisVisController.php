<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use App\Models\MisVis;
use Illuminate\Http\Request;
use Whoops\Util\Misc;

class MisVisController extends Controller
{
    public function index(){
        $MisVis = MisVis::where('status','activo')->get();
        return view('Admin.MisVis.index', compact('MisVis'));
    }

    public function create(){
        return view('Admin.MisVis.create');
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

    public function edit($id){
        $MisVis = MisVis::find($id);
        return view('Admin.MisVis.edit', compact('MisVis'));
    }

    public function update(Request $request, MisVis $MisVis, $img){
        
        //dd($imagen);
        $datos = $request->all();//almancena los datos que se mandan desde el fomulario html

        $MisVis = MisVis::find($datos['id']);

        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $datos['image'] = "$nombreI";
        }else{
            $datos['image'] = "$img";
        }

        $MisVis->update($datos);
        return redirect()->to('/MisVis');

    }

    public function status($id){
        $estado= MisVis::find($id);

        if($estado->status == "activo"){
            MisVis::where('id', $id)->update(['status' => "desactivo"]);
        }else{
            MisVis::where('id', $id)->update(['status' => "activo"]);
        }

        return redirect()->to('/MisVis');
    }

    public function indexD(){
        $MisVis = MisVis::where('status','desactivo')->get();
        return view('Admin.MisVis.indexD', compact('MisVis'));
    }
}
