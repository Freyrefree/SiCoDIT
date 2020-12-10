<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaEquipo_Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function listado()
	{
        //      $usuarios = DB::table('categoriaequipo')
        //     ->join('Permisos', 'Usuarios.Id', '=', 'Permisos.Id_usuario')
        //     ->where('Siac', '!=', 'NULL')
        //     ->select('Usuarios.Id as Id', 'Permisos.Siac->empresa as empresa', 'Usuarios.Imagen as Imagen', 'Permisos.Siac->activo as activo', 'Usuarios.No_nomina as No_nomina', 'Usuarios.Nombre as Nombre', 'Usuarios.Genero as Genero')
        //     ->get();	
        //     //dd($usuarios);	
               
        $datosCategoria = DB::select('SELECT * FROM categoriaequipo');
        return view('categoriaEquipos',compact('datosCategoria'));
    }
    
    public function agregar(Request $data){


        $nombreCategoria = "";
        $respuesta = 0;

        if ($data != null):

            $nombreCategoria = $data->nombreCategoria;

            $agregar = DB::insert("INSERT INTO categoriaequipo (nombre,fechaRegistro,estatus)
            values('$nombreCategoria',NOW(),1)");
            
            if($agregar):
                $respuesta = 1;
            endif;
            echo $respuesta;

            // return response()->json([
            //     'respuesta' => $respuesta,
            //     'url'=>url('/categoriaEquipos'),
            //     ]);


        endif;

    }

    public function activarDesactivar(Request $data){   

        $estatus = "";
        $id = 0;
        $respuesta = 0;

        if ($data != null):
            $id = $data->id;

            $paquete = DB::select('SELECT estatus FROM categoriaequipo WHERE id ='.$id);
            $estatus = $paquete[0]->estatus;
           
            if($estatus==1):
                $respuesta = DB::update("UPDATE categoriaequipo SET estatus = 0 WHERE id = $id");              
            
            else:
                
                $respuesta = DB::update("UPDATE categoriaequipo SET estatus = 1 WHERE id = $id");

            endif;

            echo $respuesta;

        endif;

    }

    public function obtenerDatosCategoriaEquipo(Request $data){

        $id=$data->id;

        $datosCategoria = DB::select('SELECT * FROM categoriaequipo WHERE id = '. $id);

        echo json_encode($datosCategoria);
           

    }

    public function actualizar(Request $data){

        $id = $data->id;
        $nombreCategoria = $data->nombreCategoriau;


        $respuesta = DB::update("UPDATE categoriaequipo SET nombre = '$nombreCategoria' WHERE id = $id");

        echo $respuesta;
           

    }


}
