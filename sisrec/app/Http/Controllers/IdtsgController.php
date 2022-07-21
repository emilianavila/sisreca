<?php

namespace App\Http\Controllers;

use App\Models\Idtsg;
use Illuminate\Http\Request;

class IdtsgController extends Controller
{
    public function index(){
        return view('idtsgs.index') ;
    }
    public function crear_fp770(){
        return view('idtsgs.crear_fp770') ;
    }
    public function crear_fp750(){
        return view('idtsgs.crear_fp750') ;
    }
    public function crear_fo770(){
        return view('idtsgs.crear_fo770') ;
    }
    public function store(Request $request){
        //$idtsg = new Idtsg();
        //$idtsg->nombre = $request->nombre;
        //$idtsg->domicilio = $request->domicilio;
        //$idtsg->saved();
        //return redirect()->route('idtsgs.index');
        
        return $request->all();
        
        //return $idtsg;
    }
    public function crear_fo750(){
        return view('idtsgs.crear_fo750') ;
    }
    public function show($idtsg){
        return view('idtsgs.show', ['idtsg' => $idtsg]);
    }
}