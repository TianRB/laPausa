<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\CultivoPlan;
use Validator;

class CultivoPlanController extends Controller
{
    
    private $prefix = 'cultivo_planes.'; // Para Rutas
    private $viewPrefix = 'backend.cultivoPlanes.'; // Para Vistas
    private $modelSingular = 'cultivoPlan'; // Variable enviada a vistas con un modelo
    private $modelPlural = 'cultivoPlanes'; // Variable enviada a vistas con varios modelos
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        return view($this->viewPrefix.'index', [$this->modelPlural => CultivoPlan::all()]);
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
            // 'display_name' => 'required|max:255',
            // 'description' => 'max:800'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = new CultivoPlan;
            $m->fill($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\CultivoPlan  $CultivoPlan
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        return view($this->viewPrefix.'show', [$this->modelSingular => CultivoPlan::find($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\CultivoPlan  $CultivoPlan
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
        return view($this->viewPrefix.'edit', [$this->modelSingular => CultivoPlan::find($id)]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\CultivoPlan  $CultivoPlan
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'unique:subCultivoPlan|required|max:255',
            // 'display_name' => 'required|max:255',
            // 'description' => 'max:800'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = CultivoPlan::find($id);
            $m->update($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\CultivoPlan  $CultivoPlan
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $m = CultivoPlan::find($id);
        $m->delete();
        return redirect()->route($this->prefix.'index');
    }
}
