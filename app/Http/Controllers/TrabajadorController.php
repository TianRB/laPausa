<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\Trabajador;
use App\Models\User;
use Validator;

class TrabajadorController extends Controller
{
    
    private $prefix = 'trabajadores.'; // Para Rutas
    private $viewPrefix = 'backend.trabajadores.'; // Para Vistas
    private $modelSingular = 'trabajador'; // Variable enviada a vistas con un modelo
    private $modelPlural = 'trabajadores'; // Variable enviada a vistas con varios modelos
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        return view($this->viewPrefix.'index', [$this->modelPlural => Trabajador::all()]);
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create(){
        return view($this->viewPrefix.'create', ['usuarios' => User::all()]);
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
            $m = new Trabajador;
            $m->fill($request->all());
            $m->name = str_slug($request->input('display_name'));

            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\Trabajador  $Trabajador
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        return view($this->viewPrefix.'show', [$this->modelSingular => Trabajador::find($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Trabajador  $Trabajador
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
        return view($this->viewPrefix.'edit', [$this->modelSingular => Trabajador::find($id), 'users' => User::all()]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\Trabajador  $Trabajador
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'unique:subTrabajador|required|max:255',
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = Trabajador::find($id);
            $m->update($request->all());
            $m->name = str_slug($request->input('display_name'));

            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Trabajador  $Trabajador
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $m = Trabajador::find($id);
        $m->delete();
        return redirect()->route($this->prefix.'index');
    }
}
