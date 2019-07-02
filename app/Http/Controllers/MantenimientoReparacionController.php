<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\MantenimientoReparacion;
use App\Models\HerramientaMaquinaria;
use App\Models\Trabajador;
use Validator;

class MantenimientoReparacionController extends Controller
{
    
    private $prefix = 'mantenimiento_y_reparaciones.'; // Para Rutas
    private $viewPrefix = 'backend.mantenimientoReparacion.'; // Para Vistas
    private $modelSingular = 'mantenimientoReparacion'; // Variable enviada a vistas con un modelo
    private $modelPlural = 'mantenimientosReparaciones'; // Variable enviada a vistas con varios modelos
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        return view($this->viewPrefix.'index', [$this->modelPlural => MantenimientoReparacion::all()]);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view($this->viewPrefix.'create', ['herramientas' => HerramientaMaquinaria::all(), 'trabajadores' => Trabajador::all()]);
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'required|max:255',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = new MantenimientoReparacion;
            $m->fill($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\MantenimientoReparacion  $MantenimientoReparacion
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        return view($this->viewPrefix.'show', [$this->modelSingular => MantenimientoReparacion::find($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\MantenimientoReparacion  $MantenimientoReparacion
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
        return view($this->viewPrefix.'edit', [$this->modelSingular => MantenimientoReparacion::find($id), 'herramientas' => HerramientaMaquinaria::all(), 'trabajadores' => Trabajador::all()]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\MantenimientoReparacion  $MantenimientoReparacion
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'unique:subMantenimientoReparacion|required|max:255',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = MantenimientoReparacion::find($id);
            $m->update($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\MantenimientoReparacion  $MantenimientoReparacion
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $m = MantenimientoReparacion::find($id);
        $m->delete();
        return redirect()->route($this->prefix.'index');
    }
}
