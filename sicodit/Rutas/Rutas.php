<?php namespace SiCoDIT\Rutas;

class Rutas
{

    public $rutaSiCoDIT = "\\\\192.168.1.4/sicodit";


    public function validarConexion()
    {

        if(opendir($this->rutaSiCoDIT)){
            return true;
        }else{
           return false;
        }
    }
}