<?php

namespace App\Http\Controllers;

use App\Models\Animales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AnimalesController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:ver-animales|crear-animales|editar-animales|borrar-animales|adoptar-animales')->only('index');
         $this->middleware('permission:crear-animales', ['only' => ['create','store']]);
         $this->middleware('permission:editar-animales', ['only' => ['edit','update']]);
         $this->middleware('permission:adoptar-animales', ['only' => ['edit','update']]);
         $this->middleware('permission:borrar-animales', ['only' => ['destroy']]);
    }
    
    public function index()
    {       
         
         $animales = Animales::all();
        
         return view('animales.index',compact('animales'));
          
    }

    public function create()
    {
        $id_razas = DB::table('razas')
        ->select('id')
        ->get();
        return view('animales.crear', compact('id_razas'));


    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function perros()
    {
       $animales = DB::table('animales')
        ->join('razas','animales.id_razas', '=','razas.id')
        ->select('animales.*','animales.nombre','animales.id','animales.Imagen')    
        ->where([
            ['id_tipo',1],
            ['adoptado', 'no'],
        ])->get();
        
       return view("adopcion.perros",compact("animales"));
    }
               
    public function gatos()
    {
       $animales = DB::table('animales')
        ->join('razas','animales.id_razas', '=','razas.id')
        ->select('animales.*','animales.nombre','animales.id','animales.Imagen')    
        ->where([
            ['id_tipo',2],
            ['adoptado', 'no'],
        ])->get();
       return view("adopcion.gatos",compact("animales"));
    }

    public function adoptantes()
    {
        $datos = DB::table('adopcions')
        ->join('clientes','adopcions.id_clientes','=','clientes.id')
        ->join('animales','adopcions.id_animales','=','animales.id')
        ->join('razas','animales.id_razas','=','razas.id')
        ->select('clientes.nombre_cliente','clientes.apellidos','animales.nombre','razas.raza',
        'clientes.direccion','clientes.localidad','clientes.telefono','clientes.email','adopcions.fecha_adopcion','adopcions.fecha_devolucion','adopcions.observaciones')
        ->where('animales.adoptado', '=', 'si')
        ->get();
       
        return view("adopcion.adoptantes",compact("datos"));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_perros()
    {
        return view('adopcion.anadirPerros');
    }

    public function create_gatos()
    {
        return view('adopcion.anadirGatos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->input('id');
        $this->validate($request,[
            "id" => "required",
            "id_razas"=>"required",
            "nombre"=>"required",
            "edad"=>"required",
            "Imagen"=>"required",
            "observaciones"=>"required"

          
        ]);
        $archivo = $request->file('Imagen');
        $Imagen = $archivo->getClientOriginalName();
        $animal= Animales::create($request->only("id","id_razas","nombre","edad","","observaciones"));
        DB::table('animales')->where('id',$id)->update(['Imagen'=>$Imagen]);
        
        
        return redirect("/perros")->with("success",__("Perro añadido!"));
        
  
      }

     

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
  
    public function show($animal){
       $Animal = Animales::where("id",$animal)
       ->first();
       return view('adopcion.show', compact('Animal'));
            }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */

    public function edit($Animal)
    {
        $Animal = Animales::where("id",$Animal)
       ->first();
      return view("adopcion.edit", compact('Animal'));
    
    }
      
    public function update($animales)
    {
    
        DB::table('animales')->where('id',$animales)->update(['adoptado'=>'si']);
        $usuario=Auth::user()->id;
        $fecha=date('Y-m-d');
        DB::table('adopcions')->insert(['id_clientes'=>$usuario,'id_animales'=>$animales,'fecha_adopcion'=>$fecha,'fecha_devolucion'=>null,'observaciones'=>null]);
        $id=DB::table('adopcions')->select('id')->where('id_clientes',$usuario)->get();
       $sql=DB::table('clientes')->select('id','nombre_cliente')->where('id',1)->get();
         
        return redirect('/');
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
     public function update2(Request $request)
     {
        $id = $request->input('id');
        $nombre = $request->input('nombre');
        $edad =  $request->input('edad');
       $archivo = $request->file('Imagen');
       $Imagen = $archivo->getClientOriginalName();
        $observaciones = $request->input('observaciones');
       


     DB::table('animales')->where('id',$id)->update(['nombre'=>$nombre]);
     DB::table('animales')->where('id',$id)->update(['edad'=>$edad]);
     DB::table('animales')->where('id',$id)->update(['Imagen'=>$Imagen]);
     DB::table('animales')->where('id',$id)->update(['observaciones'=>$observaciones]);
                    
                
                 return redirect("/perros");

     }

    


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animales  $animales
     * @return \Illuminate\Http\Response
     */
    public function destroy($animales)
    {
        
        DB::table('animales')->where('id',$animales)->delete();
     
        return redirect("/");
    }
    public function privacidad()
    {
        return view('privacidad');
    }

    public function cookies()
    {
        return view('cookies');
    }
}
