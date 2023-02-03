<?
require_once './configuracion/conexion.php';

Class FactoryBD{
    public static function ejecuta($sql,$datos){
        try{
            $con = new PDO("mysql:host=".HOST.";dbname=".BBDD,USER,PASS);
            $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $preparada = $con->prepare($sql);
            $preparada->execute($datos);       
        }catch(Exception $e){
             $preparada = null;
            if($e->getCode()==2002 ||$e->getCode()==1049){ //no se puede conectar a la base de datos
                ControladorPadre::respuesta( '',array('HTTP/1.1 500 Server Error'));
            }else{
                //este error saldra por ejemplo cuando ponemos un string en el campo fecha
                ControladorPadre::respuesta( '',array('HTTP/1.1 400 Algunos parametros esta mal '));
            }
           
                   
        }finally{
            unset($con);
            return $preparada;
        }
    }
}