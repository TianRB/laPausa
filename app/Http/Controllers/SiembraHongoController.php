<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Models\SiembraHongo;
use Validator;

class SiembraHongoController extends Controller
{
    
    private $prefix = 'siembra_hongos.'; // Para Rutas
    private $viewPrefix = 'backend.siembraHongos.'; // Para Vistas
    private $modelSingular = 'siembraHongo'; // Variable enviada a vistas con un modelo
    private $modelPlural = 'siembraHongos'; // Variable enviada a vistas con varios modelos
    
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index(){
        return view($this->viewPrefix.'index', [$this->modelPlural => SiembraHongo::all()]);
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
            $m = new SiembraHongo;
            $m->fill($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Display the specified resource.
    *
    * @param  \App\SiembraHongo  $SiembraHongo
    * @return \Illuminate\Http\Response
    */
    public function show($id){
        return view($this->viewPrefix.'show', [$this->modelSingular => SiembraHongo::find($id)]);
    }
    
    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\SiembraHongo  $SiembraHongo
    * @return \Illuminate\Http\Response
    */
    public function edit($id){
        return view($this->viewPrefix.'edit', [$this->modelSingular => SiembraHongo::find($id)]);
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\SiembraHongo  $SiembraHongo
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id){
        
        // dd($request->all());
        $input = $request->all();
        
        $rules = [
            // 'name' => 'unique:subSiembraHongo|required|max:255',
            // 'display_name' => 'required|max:255',
            // 'description' => 'max:800'
        ];
        $validator = Validator::make($input, $rules);
        if ($validator->fails()) {
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        } else {
            $m = SiembraHongo::find($id);
            $m->update($request->all());
            
            $m->save();
            return redirect()->route($this->prefix.'index');
        }
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\SiembraHongo  $SiembraHongo
    * @return \Illuminate\Http\Response
    */
    public function destroy($id){
        $m = SiembraHongo::find($id);
        $m->delete();
        return redirect()->route($this->prefix.'index');
    }
}
