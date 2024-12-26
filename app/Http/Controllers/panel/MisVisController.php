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

        dd($request);

        MisVis::create($request->all());
        return redirect()->to('/MisVis');

    }








    public function edit(){
        return view('Admin.MisVis.edit');
    }
}
