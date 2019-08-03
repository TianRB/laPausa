<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\RegistroProcedimiento;
use Validator;

class RegistroProcedimientoController extends Controller
{
    
    private $prefix = 'registro_procedimientos.'; // Para Rutas
    private $viewPrefix = 'backend.registroProcedimientos.'; // Para Vistas
    private $modelSingular = 'registroProcedimiento'; // Variable enviada a vistas con un modelo
    private $modelPlural = 'registroProcedimientos'; // Variable enviada a vistas con varios modelos
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        return view($this->viewPrefix.'index', [$this->modelPlural => RegistroProcedimiento::all()]);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view($this->viewPrefix.'create');
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
            $m = new RegistroProcedimiento;
            $m->fill($request->all());

            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\RegistroProcedimiento  $RegistroProcedimiento
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        return view($this->viewPrefix.'show', [$this->modelSingular => RegistroProcedimiento::find($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\RegistroProcedimiento  $RegistroProcedimiento
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
        return view($this->viewPrefix.'edit', [$this->modelSingular => RegistroProcedimiento::find($id)]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\RegistroProcedimiento  $RegistroProcedimiento
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'unique:subRegistroProcedimiento|required|max:255',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = RegistroProcedimiento::find($id);
            $m->update($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\RegistroProcedimiento  $RegistroProcedimiento
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $m = RegistroProcedimiento::find($id);
        $m->delete();
        return redirect()->route($this->prefix.'index');
    }
}
