<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Familia;
use App\Models\Proveedor;
use App\Models\Grupo;
use App\Models\EnfermedadPlaga;
use App\Models\Cultivo;
use Validator;

class CultivoController extends Controller
{
    
    private $prefix = 'cultivos.'; // Para Rutas
    private $viewPrefix = 'backend.cultivos.'; // Para Vistas
    private $modelSingular = 'cultivo'; // Variable enviada a vistas con un modelo
    private $modelPlural = 'cultivos'; // Variable enviada a vistas con varios modelos
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        return view($this->viewPrefix.'index', [$this->modelPlural => Cultivo::all()]);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        $familia = Familia::all();
        $proveedor = Proveedor::all();
        $grupo = Grupo::all();
        $enfermedadPlaga = EnfermedadPlaga::all();

        return view($this->viewPrefix.'create', ['familia' => $familia, 'proveedor' => $proveedor, 'grupo' => $grupo, 'enfermedadPlagas' => $enfermedadPlaga]);
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
            // 'display_name' => 'required|max:255',
            // 'description' => 'max:800'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = new Cultivo;
            $m->fill($request->all());

            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Cultivo  $Cultivo
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        return view($this->viewPrefix.'show', [$this->modelSingular => Cultivo::find($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Cultivo  $Cultivo
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
        $familia = Familia::all();
        $proveedor = Proveedor::all();
        $grupo = Grupo::all();
        $enfermedadPlaga = EnfermedadPlaga::all();

        return view($this->viewPrefix.'edit', [$this->modelSingular => Cultivo::find($id), 'familia' => $familia, 'proveedor' => $proveedor, 'grupo' => $grupo, 'enfermedadPlagas' => $enfermedadPlaga]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Cultivo  $Cultivo
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'unique:subCultivo|required|max:255',
            // 'display_name' => 'required|max:255',
            // 'description' => 'max:800'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = Cultivo::find($id);
            $m->update($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Cultivo  $Cultivo
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $m = Cultivo::find($id);
        $m->delete();
        return redirect()->route($this->prefix.'index');
    }
}
