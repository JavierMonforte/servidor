<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Foto extends Model
{
    public function __construct()
    {
    }
    public static function all(){ 
        //obtener conexión
        $db = Foto::db();
        //preparar consulta
        $sql = "SELECT * FROM fotos";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $fotos = $statement->fetchAll(PDO::FETCH_CLASS, Foto::class);
        //retornar
        return $fotos;
    }
    public static function find($id) 
    {
        $db = Foto::db();
        $stmt = $db->prepare('SELECT * FROM fotos WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Foto::class);
        $tipos = $stmt->fetch(PDO::FETCH_CLASS);
        // echo $this->birthdate->format('d-m-y');
        return $tipos;
    }    
    public function insert()
    {
        $db = Tipo::db();
        $stmt = $db->prepare('INSERT INTO fotos(nombre,url,descripcion) VALUES(:nombre,:url,:descripcion)');
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':url', $this->url);
        $stmt->bindValue(':descripcion', $this->descripcion);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Tipo::db();
        $stmt = $db->prepare('UPDATE fotos SET nombre = :nombre, url = :url, descripcion = :descripcion WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':url', $this->url);
        $stmt->bindValue(':descripcion', $this->descripcion);
        return $stmt->execute();
    }
    
    public function delete(){ 
        $db = Tipo::db();
        $stmt = $db->prepare('DELETE FROM fotos WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
