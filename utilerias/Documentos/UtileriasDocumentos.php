<?php namespace Utilerias\Documentos;

class UtileriasDocumentos
{
    

    public function crearCarpeta($path)
    {
        $respuesta = false;

        if (!file_exists($path)) {

            $respuesta = mkdir($path, 0777, true);

        }else{

            $respuesta = true;
        }

        return $respuesta;

    }
}