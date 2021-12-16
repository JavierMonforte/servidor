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
    public function typeServicio() 
    {
        // un producto pertenece a un tipo
        $db = Tipo::db();
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
    public function trabajadores()
    {
        $db = UserServicio::db();
        $stmt = $db->prepare('SELECT * FROM user_servicio WHERE servicio_id = :user_id');
        $stmt->execute(array(':user_id' => $this->idservicio));
        $stmt->setFetchMode(PDO::FETCH_CLASS, UserServicio::class);
        $trabajadores = $stmt->fetchAll(PDO::FETCH_CLASS, UserServicio::class);

        return $trabajadores;
    }
}

