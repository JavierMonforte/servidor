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

    public function type() 
    {
        // un producto pertenece a un tipo
        $db = Servicio::db();
        $statement = $db->prepare('SELECT * FROM tipoServicios WHERE id = :id');
        $statement->bindValue(':id', $this->tipoServicio);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, Tipo::class);
        $tipoServicio = $statement->fetch(PDO::FETCH_CLASS);

        return $tipoServicio;
    }

    /*
    * Aunque ya podemos mostrar el nombre del tipo: $product->type()->name
    * Sería más elegante tratar type como un atributo
    * Vamos ahora a usar el metodo __get($nombreAtributo)
    *   -> __get se ejecuta siempre que intentamos acceder a un atributo inexistente
    *
    * Vamos a modificarlo para que:
    *   -> Si piden un atributo desconocido pero hay un método con ese nombre
    *       1) Primero ejecuta el método para que cree ese atributo
    *       2) Después devuelve el atributo ya existente
    */
    public function __get($atributoDesconocido)
    {
        // return "atributo $atributoDesconocido desconocido";
        if (method_exists($this, $atributoDesconocido)) {
            $this->$atributoDesconocido = $this->$atributoDesconocido();
            return $this->$atributoDesconocido;
        }
    } 
}

