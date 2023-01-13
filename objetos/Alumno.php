<?
require_once('./Persona2.php');
require_once('./interfaces.php');
class Alumno extends Persona implements Acciones{
    private $curso;
    
    public function __construct($nombre,$edad,$email,$curso)
    {
        parent::__construct($nombre,$edad,$email);
        $this->curso=$curso;
    }

    public function __toString()
    {
        return "id: ".parent::$id." Nombre: ". $this->nombre . " , Edad: ". $this->edad ." Curso: ".$this->curso. "<br>";
    }

    public function darBaja()
    {
        $this->curso=null;
    }
}