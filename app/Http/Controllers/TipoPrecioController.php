<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\TipoPrecio;
use Validator;

class TipoPrecioController extends Controller
{
    
    private $prefix = 'tipos_precio.'; // Para Rutas
    private $viewPrefix = 'backend.tiposDePrecios.'; // Para Vistas
    private $modelSingular = 'tipoPrecio'; // Variable enviada a vistas con un modelo
    private $modelPlural = 'tipoPrecios'; // Variable enviada a vistas con varios modelos
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        return view($this->viewPrefix.'index', [$this->modelPlural => TipoPrecio::all()]);
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
            'display_name' => 'required|max:255',
            'description' => 'max:800'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = new TipoPrecio;
            $m->fill($request->all());
            $m->name = str_slug($request->input('display_name'));
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\TipoPrecio  $TipoPrecio
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        return view($this->viewPrefix.'show', [$this->modelSingular => TipoPrecio::find($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\TipoPrecio  $TipoPrecio
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
        return view($this->viewPrefix.'edit', [$this->modelSingular => TipoPrecio::find($id)]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\TipoPrecio  $TipoPrecio
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'unique:subTipoPrecio|required|max:255',
            'display_name' => 'required|max:255',
            'description' => 'max:800'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = TipoPrecio::find($id);
            $m->update($request->all());
            $m->name = str_slug($request->input('display_name'));
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\TipoPrecio  $TipoPrecio
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $m = TipoPrecio::find($id);
        $m->delete();
        return redirect()->route($this->prefix.'index');
    }
}
