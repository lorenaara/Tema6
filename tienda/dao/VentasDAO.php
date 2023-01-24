<?
class VentaDAO extends FactoryBD implements DAO{
    public static function findAll()
    {
        $sql ='select * fron venta';
        $datos=array();
        $devuelve=parent::ejecuta($sql, $datos);
        $arrayVentas=array();
        while($obj= $devuelve->fetchObject()){
            $venta= new Venta($obj->id, $obj->user, $obj->fecha, $obj->codProd, $obj->cantidad, $obj->precio);
            array_push($arrayVentas, $venta);
        }
        return $arrayVentas;
    }
    public static function findById($id)
    {
        $sql = 'select * from venta where id=?';
        $datos= array($id);
        $devuelve=parent::ejecuta($sql, $datos);
        $obj=$devuelve->fetchObject();
        if($obj){
            $venta= new Venta($obj->id, $obj->user, $obj->fecha, $obj->codProd, $obj->cantidad, $obj->precio);
            return $venta;
        }
    }
    public static function delete($id)
    {
        $sql ='delete from venta where id=?';
        $datos= array($id);
        $devuelve=parent::ejecuta($sql, $datos);
        if($devuelve->rowCount()==0){
            return false;
        }
        return true;
    }
    public static function insert($objeto){
        $sql ='insert into venta value(?,?,?,?,?)';
        $objeto=(array)$objeto;
        foreach($objeto as $att){
            array_push($datos,$att); 
        }
        $devuelve = parent::ejecuta($sql,$datos);
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }
}