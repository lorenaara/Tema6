<?php
class Persona{
    private $nombre;
    private $edad;
    private $email;
    public static $id=0;

    //metodos
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
    }
    public function __get($get)
    {
        return $this->$get;
    }
    public function __set($clave, $valor)
    {
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
}