<?
class Venta{
    private $id;
    private $user;
    private $fecha;
    private $codProd;
    private $cantidad;
    private $precio;

    public function __construct($user, $fecha, $codProd, $cantidad, $precio)
    {
        $this->user=$user;
        $this->fecha=$fecha;
        $this->codProd=$codProd;
        $this->cantidad=$cantidad;
        $this->precio=$precio;
    }
    public function __get($get){
        if(property_exists(__CLASS__,$get))
            return $this->$get;
        return null;
    }

    public function __set($clave,$valor){
        if(property_exists(__CLASS__,$clave))
            $this->$clave=$valor;
        
    }
}