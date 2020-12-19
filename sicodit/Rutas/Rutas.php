<?php namespace SiCoDIT\Rutas;



class Rutas
{

    // public $rutaSiCoDIT = "\\\\192.168.1.4/sicodit";
    public $rutaSiCoDIT = "sicodit/ActivosFijos/";



    public function validarConexion()
    {
        // return true;

        // Storage::disk('local')->put('example.txt', 'Contents');
        // if(Storage::disk('archivosSiCoDIT')){
        //     return true;
        // }else{
        //     return false;
        // }

        if(opendir($this->rutaSiCoDIT)){
            return true;
        }else{
           return false;
        }
    }
}