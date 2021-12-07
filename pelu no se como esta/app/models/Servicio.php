<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;
use Exception;

require_once 'core/Model.php';


class Servicio extends Model
{
    public function __construct()
    {
    }
    public static function all(){ 
        //obtener conexión
        $db = Servicio::db();
        //preparar consulta
        $sql = "SELECT * FROM servicios";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $servicios = $statement->fetchAll(PDO::FETCH_CLASS, Servicio::class);
        //retornar
        return $servicios;
    }
    public static function find($id) 
    {
        $db = Servicio::db();
        $stmt = $db->prepare('SELECT * FROM servicios WHERE idservicio=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Servicio::class);
        $servicios = $stmt->fetch(PDO::FETCH_CLASS);
        // echo $this->birthdate->format('d-m-y');
        return $servicios;
    }    
    public function insert()
    {
        try{
        $db = Servicio::db();
        $stmt = $db->prepare('INSERT INTO servicios(servicio, descripcion, tipoServicio, precio, genero, tiempo) VALUES(:servicio, :descripcion, :tipoServicio, :precio, :genero, :tiempo)');
        $stmt->bindValue(':servicio', $this->servicio);
        $stmt->bindValue(':descripcion', $this->descripcion);
        $stmt->bindValue(':tipoServicio', $this->tipoServicio);
        $stmt->bindValue(':precio', $this->precio);
        $stmt->bindValue(':genero', $this->genero);
        $stmt->bindValue(':tiempo', $this->tiempo);

        return $stmt->execute();
        } catch(Exception $e){
            echo "Se ha producido una Excepcion al insertar en la base de datos <br>";
            echo "Es posible que alguno de los datos no se hayan introducido con el formato adecuado"; 
        }
    }

    public function save()
    {
        $db = Servicio::db();
        $stmt = $db->prepare('UPDATE servicios SET servicio = :servicio, descripcion = :descripcion, tipoServicio = :tipoServicio, precio = :precio, genero = :genero, tiempo = :tiempo WHERE idservicio = :id');
        $stmt->bindValue(':id', $this->idservicio);
        $stmt->bindValue(':servicio', $this->servicio);
        $stmt->bindValue(':descripcion', $this->descripcion);
        $stmt->bindValue(':tipoServicio', $this->tipoServicio);
        $stmt->bindValue(':precio', $this->precio);
        $stmt->bindValue(':genero', $this->genero);
        $stmt->bindValue(':tiempo', $this->tiempo);
        return $stmt->execute();
    }
    
    public function delete(){ 
        $db = Servicio::db();
        $stmt = $db->prepare('DELETE FROM servicios WHERE idservicio = :id');
        $stmt->bindValue(':id', $this->idservicio);
        return $stmt->execute();
    }
}
