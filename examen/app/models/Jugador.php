<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';

class Jugador extends Model
{
    public function __construct()
    {
        $this->nacimiento = \DateTime::createFromFormat('Y-m-d H:i:s', $this->nacimiento);
    }

    public static function find($id) 
    {
        $db = Jugador::db();
        $stmt = $db->prepare('SELECT * FROM jugadores WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, Jugador::class);
        $jugador = $stmt->fetch(PDO::FETCH_CLASS);
        // echo $this->birthdate->format('d-m-y');
        return $jugador;
        }    
    public static function all()
    {
        $db = Jugador::db();
        //preparar consulta
        $sql = "SELECT * FROM jugadores";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $jugadores = $statement->fetchAll(PDO::FETCH_CLASS, Jugador::class);
        //retornar
        return $jugadores;
            }

    public function insert()
    {
        $db = Jugador::db();
        $stmt = $db->prepare('INSERT INTO jugadores(nombre, nacimiento, puesto, url, titular) VALUES(:nombre, :nacimiento, :puesto, :url, :titular)');
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':nacimiento', $this->nacimiento);
        $stmt->bindValue(':puesto', $this->puesto);
        $stmt->bindValue(':url', $this->url);
        $stmt->bindValue(':titular', $this->titular);
   

        return $stmt->execute();   
     }

    public function save()
    {
        $db = Jugador::db();
        $stmt = $db->prepare('UPDATE jugadores SET nombre = :nombre, nacimiento = :nacimiento, puesto = :puesto, url = :url, titular = :titular WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':nombre', $this->nombre);
        $stmt->bindValue(':nacimiento', $this->nacimiento);
        $stmt->bindValue(':puesto', $this->puesto);
        $stmt->bindValue(':url', $this->url);
        $stmt->bindValue(':titular', $this->titular);

        return $stmt->execute();   
     }
}





