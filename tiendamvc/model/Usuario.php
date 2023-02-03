<?
class Usuario{
    private $user;
    private $clave;
    private $nombre;
    private $email;
    private $fecha;
    private $perfil;
    private $baja;

    public function __construct($user, $clave, $nombre, $email, $fecha, $perfil)
    {
        $this->user=$user;
        $this->clave=$clave;
        $this->nombre=$nombre;
        $this->email=$email;
        $this->fecha=$fecha;
        $this->perfil=$perfil;
        $this->baja=false;
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