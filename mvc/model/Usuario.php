<?

class Usuario{
    private $usuario;
    private $clave;
    private $nombre;
    private $correo;
    private $perfil;

    public function __construct($usuario, $clave, $nombre, $correo, $perfil)
    {
       $this->usuario=$usuario;
       $this->clave=$clave;
       $this->nombre=$nombre;
       $this->correo=$correo;
       $this->perfil=$perfil;
    }

    public function __get($get)
    {
        if(property_exists(__CLASS__, $get)) //en la clase que estas en este momento
        return $this->$get;
        return null;
    }
    public function __set($clave, $valor)
    {
        if(property_exists(__CLASS__, $clave)) //en caso de que no exista 
        $this->$clave=$valor;
    }
    
}