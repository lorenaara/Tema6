<? 
class ConciertosCOntrolador extends ControladorPadre{

    public  function controlar(){
        $metodo= $_SERVER['REQUEST_METHOD']; //cosigue el metodo(get, post)
        switch($metodo){
            case 'GET':
                buscar();
                break;
            case 'POST':
                insertar();
                break;
            case 'PUT':
                modificar();
                break;
            case 'DELETE':
                borrar();
                break;
            default:
            ControladorPadre::respuesta('',array('HTTP/1.1 400 No se ha utilizado el metodo correcto'));
        }

    }

    public static function buscar(){
       $parametros= $this->parametros();
    }
}