<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
use SiCoDIT\Rutas\Rutas;
use Utilerias\Documentos\UtileriasDocumentos;
use Mpdf\Mpdf;


class ActivosFijos_Controller extends Controller
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
        $datosActivosFijos = DB::select('SELECT * FROM s_equipo');
        return view('activosFijos/listadoActivosFijos',compact('datosActivosFijos'));
    }

    public function sincronizar(){
        
        $consultaActivosFijosSAP = "SELECT ANLN1 FROM dev.ANLA WHERE ERNAM = 'MTI'";
        

        $activoFijo = "";
        $insertarActivoFijo = "";
        $respuesta = "";

        $datosActivosFijosSAP = DB::connection('sqlsrv')->select($consultaActivosFijosSAP);

        foreach ($datosActivosFijosSAP as $key => $value) {
            
            $activoFijo = $value->ANLN1;
            

            $insertarActivoFijo = "INSERT INTO s_equipo(activoFijo,estatus,fechaRegistro)
            SELECT '$activoFijo',1,NOW()
            WHERE NOT EXISTS (SELECT * FROM s_equipo WHERE activoFijo = '$activoFijo')";

            $respuesta = DB::insert($insertarActivoFijo);

        }

        if($respuesta){

            $objRutas = new Rutas();
            $objUtil = new UtileriasDocumentos();

            $id = 0;
            $activoFijo ="";

            $rutaActivoFijo = "";
            $rutaQR = "";
            $rutaPDF = "";
            $archivoQR ="";
            $archivoPDF ="";

            

            if($objRutas->validarConexion()){

                $respuestaUpdate="";
                
               
                $consultaActivosFijosSiCoDit = "SELECT * FROM s_equipo WHERE qr IS NULL";

                $datosActivosFijosSiCoDIT = DB::select($consultaActivosFijosSiCoDit); 
                
                if($datosActivosFijosSiCoDIT != null){

                    foreach ($datosActivosFijosSiCoDIT as $key => $value) {
                        $qrcode = new BaconQrCodeGenerator;

                        $id = $value->id;
                        $activoFijo = $value->activoFijo;

                        $qr = bcrypt($activoFijo);

                        $rutaActivoFijo = $objRutas->rutaSiCoDIT.$activoFijo;
                        $rutaQR = $objRutas->rutaSiCoDIT.$activoFijo."/QR";
                        $rutaPDF = $objRutas->rutaSiCoDIT.$activoFijo."/PDF";
                        

                        $objUtil->crearCarpeta($rutaActivoFijo);
                        $objUtil->crearCarpeta($rutaQR);
                        $objUtil->crearCarpeta($rutaPDF);

                        $archivoQR = $rutaQR."/".base64_encode($activoFijo).".png";
                        $archivoPDF = $rutaPDF."/".base64_encode($activoFijo).".pdf";

                        $qrRespuesta = $qrcode->format('png')->color(38, 38, 38, 0.85)->backgroundColor(255, 255, 255, 0.82)->size(400)->generate($qr, $archivoQR);
                        
                        $mpdf = new \Mpdf\Mpdf();
                        $mpdf->WriteHTML('<img src="'.$archivoQR.'" alt="">');
                        $mpdf->Output($archivoPDF, \Mpdf\Output\Destination::FILE);


                        $consultaUpdate = "UPDATE s_equipo SET 
                        qr = '$qr',
                        rutaqr = '$archivoQR' 
                        WHERE id = $id";

                        $respuestaUpdate = DB::update($consultaUpdate);                   

                    }

                    if($respuestaUpdate){
                        echo 1;
                    }

                }else{

                    echo 20;
                }



            }else{

                echo 10; // No se encuentra la carpeta Remota
            }

           



        }

    }

    public function detalleActivoFijo(Request $data){

        $activoFijo = $data->activoFijo;

        $consultaActivosFijosSAP = "SELECT 
        ANLN1 AS activoFijo,
        ANLKL AS clase,
        ANLN2 AS subActivoFijo,
        BUKRS AS sociedad,
    
        TXT50 AS denominacionA,
	    TXA50 AS denominacionB,
        KTOGR AS determinacionCuentas,
        SERNR AS numeroSerie,
        INVNR AS numeroInventario,
	    MENGE AS cantidad,
        IVDAT AS ultimoInventario,
	    INVZU AS notaInventario,

        AKTIV AS fechaCapitalizacion,
        ZUGDT AS fechaContabilizacion,
        ZUJHR AS primeraContabilizacion,
        DEAKT AS fechaDescapitalizacion,
        GPLAB AS fechaBajaPlanificada,
        BSTDT AS fechaPedido,
    
        ORD41 AS concepto1,
        ORD42 AS concepto2,
        ORD43 AS concepto3,
        ORD44 AS concepto4,
        GDLGRP AS concepto5,
        UMWKZ,
        ANLUE,
    
        LIFNR AS acreedor,
        LIEFE AS nombreAcreedor,
        HERST AS fabricante,
        VBUND AS sociedadGL,
        LAND1 AS paisOrigen,
        TYPBZ AS denominacionDeTipo,
        URJHR AS anioAdquisicion,
        URWRT AS valorAdquisicion,

        VMGLI AS clavepatrimonio,
	    EIGKZ AS indicadorPropiedad,
    
        ANLN1
        FROM dev.ANLA where ANLN1 = $activoFijo";        

        $datosActivoFijoSAP = DB::connection('sqlsrv')->select($consultaActivosFijosSAP);

        $consultaActivosFijosSAPDependiente = "SELECT 
        KOSTL AS centroCoste,
        CAUFN AS ordCostes,
        WERKS AS centro,
        STORT AS emplazamiento,
        RAUMN AS local,
        FKBER AS areaFuncional        
         FROM dev.ANLZ WHERE  ANLN1 = $activoFijo ";


        $datosActivoFijoSAPDependiente = DB::connection('sqlsrv')->select($consultaActivosFijosSAPDependiente);

        $consultaTablaValoracion = "  SELECT    
        ANLB.AFABE AS NoArea,
        T093T.AFBKTX AS areaDeValoracion,
        ANLB.AFASL AS amo,
        ANLB.NDJAR AS duracion,
        ANLB.NDPER AS per,
        ANLB.AFABG AS inicioAmortizacion,
        ANLB.WBIND AS indiceReposicion
        FROM dev.ANLB AS ANLB 
        INNER JOIN dev.T093T AS T093T
        ON T093T.MANDT = ANLB.MANDT
        AND T093T.AFAPL = ANLB.BUKRS
        AND T093T.AFABER = ANLB.AFABE
        WHERE T093T.SPRAS = 'S' AND ANLB.ANLN1 = $activoFijo  ORDER BY AFABE";

        $datosTablaValoracion = DB::connection('sqlsrv')->select($consultaTablaValoracion);

        $NoArea = "";
        $areaDeValoracion = "";
        $amo = "";
        $duracion= "";
        $per= "";
        $inicioAmortizacion= "";
        $indiceReposicion= "";

        $tablaHTML = "";
        $tablaHTML.="<table id='tablaValoracion' class='table table-striped table-bordered dt-responsive nowrap' style='width:100%'>";
        $tablaHTML.='
        <thead>
            <th>N° Area</th>
            <th>Área de Valoración</th> 
            <th>Amo</th> 
            <th>Duración</th> 
            <th>Per</th> 
            <th>In.Amo Normal</th>
            <th>Índ</th>      
        </thead>
        <tbody>';

        foreach ($datosTablaValoracion as $key => $value) {
            $NoArea = "";
            $areaDeValoracion = "";
            $amo = "";
            $duracion= "";
            $per= "";
            $inicioAmortizacion= "";
            $indiceReposicion= "";

            $NoArea = $value->NoArea;
            $areaDeValoracion = $value->areaDeValoracion;
            $amo = $value->amo;
            $duracion = $value->duracion;
            $per = $value->per;
            $inicioAmortizacion = $value->inicioAmortizacion;
            $indiceReposicion = $value->indiceReposicion;

            $tablaHTML.='
            <tr>
                <td>'.$NoArea.'</td>
                <td>'.$areaDeValoracion.'</td> 
                <td>'.$amo.'</td> 
                <td>'.$duracion.'</td> 
                <td>'.$per.'</td> 
                <td>'.$inicioAmortizacion.'</td>
                <td>'.$indiceReposicion.'</td>      
            </tr>';


        }

        $tablaHTML.="</tbody>";
        $tablaHTML.="</table>";

        $arrayTabla[0] = $tablaHTML;

        echo json_encode(array_merge($datosActivoFijoSAP,$datosActivoFijoSAPDependiente,$arrayTabla));


    }

    public function opcionesQR(Request $data){

        $activoFijo = $data->activoFijo;

        $rutaQR = "";       

        $query = "SELECT * FROM s_equipo WHERE activoFijo = $activoFijo";
        $paqueteActivoFijo = DB::select($query);
        
        $rutaQR = $paqueteActivoFijo[0]->rutaqr;
        $rutaQR = asset($rutaQR);
        echo $rutaQR;
        
        

    }

    









}
