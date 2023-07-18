<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // variable (usuarios) me permite utilizarla en la vista usando blade
        $datos['usuarios']=Usuario::paginate();
        //al poner la variable ($datos) puede el index obtener la informaciòn
        return view('Usuario.index',$datos);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $usuario = new Usuario();
        $usuario->Nombre = $request->input('nombre');
        $usuario->correo =$request->input('correo');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->save();
        // return view('index',compact('usuario'));
         return view('plantillas.header',['usuario'=> $usuario]);
    }
    
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //recolecta datos de usuario (formulario) a excepcion del token
        $datosUsuario = request()->except('_token');
        //uso modelo e inserto en la base de datos
        Usuario::insert($datosUsuario);
        // return response()->json($datosUsuario);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) //recibe el parametro de formulario (id)
    {
        //
        Usuario::destroy($id);
        //redireccion
        return redirect('usuario');
    }
}
