<?
class ControladorPadre{
    //comprobar el recurso
    public static function recurso(){
        if(isset($_SERVER["PATH_INFO"])){
        $uri=$_SERVER["PATH_INFO"];
        $uri=explode('/',$uri);
        return $uri;
        }else{
            //retornar un error de la API si no encuatra el recurso o no se le ha dado un recurso
            ControladorPadre::respuesta('',array('HTTP/1.1 400 No se ha indicado recurso'));
            //error 400 se ha hecho una mala consulta
        }
    }
    protected  function parametros(){
        $uri=$_SERVER["QUERY_STRING"];
        $uri=explode('/',$uri);
        print_r(($uri));
        return $uri;
    }

    public static function respuesta($datos, $httpHeaders=array()){
        foreach ($httpHeaders as $value) {
          header($value);
        }
        echo $datos;
        exit;
    }

}