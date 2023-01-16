<?

class UsuarioDAO extends FactoryBD implements DAO{
    public static function findAll(){
        $sql='select * from usuarios';
        $array=array();
        $devuelve=parent:: ejecuta($sql, $array);
        while($obj=$devuelve->fetchObject()){
            print_r($obj);
        }
    }
    public static function findById(){

    }
    public static function delete($id){

    }
    public static function insert(){

    }
    public static function update($objeto){

    }
}