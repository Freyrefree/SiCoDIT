<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use QRCode;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;

class QR_Controller extends Controller
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
               
        $datosCategoria = DB::select('SELECT * FROM categoriaequipo');
        return view('categoriaEquipos',compact('datosCategoria'));
    }
    
    public function agregarQR(Request $data){

        $qrcode = new BaconQrCodeGenerator;

        $nombre = "";
        $serie = "";
        $estatus = 1;
        $qr = "";
        $respuesta = 0;
        $ultimoID = 0;

        if ($data != null):

            $nombre = $data->nombreEquipo;
            $serie = $data->serieEquipo;
            $qr = bcrypt($data->nombreEquipo.$data->serieEquipo);

            $ultimoID = DB::table('equipo')-> insertGetId(array(
                'nombre' => $nombre,
                'serie' => $serie,
                'qr'=> $qr,
                'fechaRegistro'=> NOW(),
                'estatus'=> $estatus

        ));


            if($ultimoID > 0):
                $respuesta = 1;

                $respuesta = 0;
                $qrRespuesta = $qrcode->format('png')->color(38, 38, 38, 0.85)->backgroundColor(255, 255, 255, 0.82)->size(400)->generate($qr, 'public/qrcodes/'.base64_encode($ultimoID).'.png');
                if($qrRespuesta > 0){
                    $respuesta = 1;
                }
            endif;

            if($respuesta == 1){

               echo  base64_encode($ultimoID);
            }


        endif;

    }

    public function verificarQR(Request $request){

        $qr = $request->datos;

        $query = "SELECT * FROM equipo WHERE qr = '$qr' " ;

        $datosEquipo = DB::select($query);

        if($datosEquipo != null){
             echo 1;
        }else{
            echo 0;
        }



    }


}
