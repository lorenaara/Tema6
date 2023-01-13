<?php
class Persona{
    private $nombre;
    private $edad;
    private $email;
    public static $id=0;

    //metodos
    public static function elProximoId(){
        return self::$id+1;
    }

    public function __construct($nombre,$edad,$email)
    {
        self::$id=$this::$id+1;
        $this->edad= $edad;
        $this->nombre= $nombre;
        $this->email=$email;
    }
    public function __destruct()
    {
       // echo "<br>se destruye ".$this;
       self::$id=$this::$id-1;
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
    public function __toString()
    {
        return "id: ".$this->id." Nombre: ". $this->nombre . " , Edad: ". $this->edad . "<br>";
    }
    public function __clone()
    {
       // $this->id= $this->id +1;
    }
    public function verVariables(){
        return get_object_vars($this);
    }
}