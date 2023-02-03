<?

class UsuarioDAO extends FactoryBD implements DAO{

    public static function findAll(){
        $sql= 'select * from usuario';
        $datos=array();
        $devuelve= parent::ejecuta($sql,$datos);
        $arrayUsuarios=array();
        while($obj= $devuelve->fetchObject()){
            $usuario= new Usuario($obj->user, $obj->clave, $obj->nombre, $obj->email, $obj->fecha, $obj->perfil);
            array_push($arrayUsuarios, $usuario);
        }
        return $arrayUsuarios;
    }
    public static function findById($id)
    {
        $sql = 'select * from usuario where user =?';
        $datos=array($id);
        $devuelve= parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $usuario= new Usuario($obj->user, $obj->clave, $obj->nombre, $obj->email, $obj->fecha, $obj->perfil);
            return $usuario;
        }
    }
    public static function delete($id)
    {
        $sql ='update usuario set baja = true where user=?';
        $datos=array($id);
         $devuelve = parent::ejecuta($sql,$datos); 
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }
    public static function insert($objeto){
        $sql = 'insert into producto values(?,?,?,?,?,?)';
        $objeto = (array)$objeto;
        $datos = array();
        foreach($objeto as $att){
            array_push($datos,$att); 
        }
        $devuelve = parent::ejecuta($sql,$datos);
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }
    public static function update($objeto){
        $sql = 'update usuario set clave=?, nombre=?, email=?, fecha=?, perfil=? where user=?';
        $datos= array($objeto->clave, $objeto->nombre, $objeto->email, $objeto->fecha, $objeto->perfil, $objeto->user);
        $devuelve = parent::ejecuta($sql,$datos); 
        if($devuelve->rowCount() == 0){
            return false;
        }
        return true;
    }
    public static function valida($user, $clave){
        $sql= 'select * from usuario where user=? and clave=?';
        $datos=array($user, $clave);
        $devuelve = parent::ejecuta($sql,$datos);
        $obj = $devuelve->fetchObject();
        if($obj){
            $usuario= new Usuario($obj->user, $obj->clave, $obj->nombre, $obj->email, $obj->fecha, $obj->perfil);
            return $usuario;
        }
        return null;
    }

}