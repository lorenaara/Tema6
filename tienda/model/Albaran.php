<?

class Albaran{
    private $id;
    private $fecha;
    private $codProd;
    private $cantidad;
    private $user;

    public function __construct($fecha, $codProd, $cantidad, $user)
    {
        $this->fecha=$fecha;
        $this->codProd=$codProd;
        $this->cantidad=$cantidad;
        $this->user=$user;
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