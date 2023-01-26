<?

class AlbaranDAO extends FactoryBD implements DAO{
    public static function findAll()
    {
        $sql= 'select * from albaran';
        $datos= array();
        $devuelve=parent:: ejecuta($sql, $datos);
        $arrayAlbaranes=array();
        while($obj= $devuelve->fetchObject()){
            $albaran= new Albaran($obj->fecha, $obj->codProd, $obj->cantidad, $obj->user);
            array_push($arrayAlbaranes, $albaran);
        }
        return $arrayAlbaranes;
    }
    public static function findById($id)
    {
        $sql= 'select * from albaran where id=?';
        $datos=array($id);
        $devuelve= parent:: ejecuta($sql, $datos);
        $obj= $devuelve->fetchObject();
        if($obj){
            $albaran= new Albaran($obj->fecha, $obj->codProd, $obj->cantidad, $obj->user);
            return $albaran;
        }
    }
    public static function delete($id){
        $sql='delete from albaran where id=?';
        $datos=array($id);
        $devuelve=parent::ejecuta($sql, $datos);
        if($devuelve->rowCount()==0){
            return false;
        }
        return true;
    }
    public static function insert($obj){
        $sql='insert into albaran value (?,?,?,?)';
        $obj=(array)$obj;
        foreach($obj as $att){
            array_push($datos, $att);
        }
        $devuelve= parent:: ejecuta($sql, $datos);
        if($devuelve->rowCount()==0){
            return false;
        }
        return true;
    }
    public static function update($objeto)
    {
        $sql='update albaran set fecha=?, codProd=?, cantidad=?, user=? where id=?';
        $datos=array($objeto->fecha, $objeto->codProd, $objeto->cantidad, $objeto->user, $objeto->id);
        $devuelve=parent::ejecuta($sql, $datos);
        if($devuelve->rowCount()==0){
            return false;
        }
        return true;
    }
}