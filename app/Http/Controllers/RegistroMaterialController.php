<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\RegistroMaterial;
use App\Models\CatalogoRegistroMaterial;
use App\Models\Area;
use App\Models\Trabajador;
use Validator;

class RegistroMaterialController extends Controller
{
    
    private $prefix = 'registro_materiales.'; // Para Rutas
    private $viewPrefix = 'backend.registroMateriales.'; // Para Vistas
    private $modelSingular = 'registroMaterial'; // Variable enviada a vistas con un modelo
    private $modelPlural = 'registroMateriales'; // Variable enviada a vistas con varios modelos
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        return view($this->viewPrefix.'index', [$this->modelPlural => RegistroMaterial::all()]);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view($this->viewPrefix.'create', ['herramientas' => RegistroMaterial::all(), 'areas' => Area::all(), 'trabajadores' => Trabajador::all()]);
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
            $m = new RegistroMaterial;
            $m->fill($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\RegistroMaterial  $RegistroMaterial
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        return view($this->viewPrefix.'show', [$this->modelSingular => RegistroMaterial::find($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\RegistroMaterial  $RegistroMaterial
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
        return view($this->viewPrefix.'edit', [$this->modelSingular => RegistroMaterial::find($id)]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\RegistroMaterial  $RegistroMaterial
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'unique:subRegistroMaterial|required|max:255',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = RegistroMaterial::find($id);
            $m->update($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\RegistroMaterial  $RegistroMaterial
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $m = RegistroMaterial::find($id);
        $m->delete();
        return redirect()->route($this->prefix.'index');
    }
}
