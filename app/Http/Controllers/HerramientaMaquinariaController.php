<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\HerramientaMaquinaria;
use App\Models\CatalogoHerramientaMaquinaria;
use App\Models\Area;
use App\Models\Trabajador;
use Validator;

class HerramientaMaquinariaController extends Controller
{
    
    private $prefix = 'herr_maq.'; // Para Rutas
    private $viewPrefix = 'backend.herramientasMaquinaria.'; // Para Vistas
    private $modelSingular = 'herramientaMaquinaria'; // Variable enviada a vistas con un modelo
    private $modelPlural = 'herramientaMaquinarias'; // Variable enviada a vistas con varios modelos
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        return view($this->viewPrefix.'index', [$this->modelPlural => HerramientaMaquinaria::all()]);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view($this->viewPrefix.'create', ['herramientas' => HerramientaMaquinaria::all(), 'areas' => Area::all(), 'trabajadores' => Trabajador::all()]);
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
            $m = new HerramientaMaquinaria;
            $m->fill($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\HerramientaMaquinaria  $HerramientaMaquinaria
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        return view($this->viewPrefix.'show', [$this->modelSingular => HerramientaMaquinaria::find($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\HerramientaMaquinaria  $HerramientaMaquinaria
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
        return view($this->viewPrefix.'edit', [$this->modelSingular => HerramientaMaquinaria::find($id)]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\HerramientaMaquinaria  $HerramientaMaquinaria
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'unique:subHerramientaMaquinaria|required|max:255',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = HerramientaMaquinaria::find($id);
            $m->update($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\HerramientaMaquinaria  $HerramientaMaquinaria
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $m = HerramientaMaquinaria::find($id);
        $m->delete();
        return redirect()->route($this->prefix.'index');
    }
}
