<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class Tipo extends Model
{
    public function __construct()
    {
    }
    public static function all(){ 
        //obtener conexión
        $db = Tipo::db();
        //preparar consulta
        $sql = "SELECT * FROM tipoServicios";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $tipos = $statement->fetchAll(PDO::FETCH_CLASS, Tipo::class);
        //retornar
        return $tipos;
    }
    public static function find($id) 
    {
        $db = Tipo::db();
        $stmt = $db->prepare('SELECT * FROM tipoServicios WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Tipo::class);
        $tipos = $stmt->fetch(PDO::FETCH_CLASS);
        // echo $this->birthdate->format('d-m-y');
        return $tipos;
    }    
    public function insert()
    {
        $db = Tipo::db();
        $stmt = $db->prepare('INSERT INTO tipoServicios(tipo) VALUES(:tipo)');
        $stmt->bindValue(':tipo', $this->tipo);
        return $stmt->execute();
    }

    public function save()
    {
        $db = Tipo::db();
        $stmt = $db->prepare('UPDATE tipoServicios SET tipo = :tipo WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':tipo', $this->tipo);
        return $stmt->execute();
    }
    
    public function delete(){ 
        $db = Tipo::db();
        $stmt = $db->prepare('DELETE FROM tipoServicios WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
}
