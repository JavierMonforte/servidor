<?php

namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class UserServicio extends Model
{
    public function __construct()
    {
    }
    public static function all()
    {
        //obtener conexión
        $db = UserServicio::db();
        //preparar consulta
        $sql = "SELECT * FROM user_servicio";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $userServicio = $statement->fetchAll(PDO::FETCH_CLASS, UserServicio::class);
        //retornar
        return $userServicio;
    }
    public static function find($list)
    {
        $db = UserServicio::db();
        $stmt = $db->prepare('SELECT * FROM user_servicio WHERE user_id=:id_user and servicio_id=:id_servicio');
        $stmt->execute(array(':id_user' => $list[0], ':id_servicio' => $list[1]));
        $stmt->setFetchMode(PDO::FETCH_CLASS, UserServicio::class);
        $userServicio = $stmt->fetch(PDO::FETCH_CLASS);
        // echo $this->birthdate->format('d-m-y');
        return $userServicio;
    }
    public function insert()
    {
        $db = UserServicio::db();
        $stmt = $db->prepare('INSERT INTO user_servicio(user_id, servicio_id) VALUES(:user_id, :servicio_id)');
        $stmt->bindValue(':user_id', $this->user_id);
        $stmt->bindValue(':servicio_id', $this->servicio_id);
        return $stmt->execute();
    }
/**No tiene mucho sentido cambiar unas claves primarias, realmente no se si se puede */
    public function save()
    {
        $db = UserServicio::db();
        $stmt = $db->prepare('UPDATE user_servicio SET user_id = :user_id, servicio_id = :servicio_id  WHERE user_id = :user_id and servicio_id = :servicio_id');
        $stmt->bindValue(':user_id', $this->user_id);
        $stmt->bindValue(':servicio_id', $this->servicio_id);
        return $stmt->execute();
    }

    public function delete()
    {
        $db = UserServicio::db();
        $stmt = $db->prepare('DELETE FROM user_servicio WHERE user_id = :user_id and servicio_id = :servicio_id');
        $stmt->bindValue(':user_id', $this->user_id);
        $stmt->bindValue(':servicio_id', $this->servicio_id);
        return $stmt->execute();
    }

    public function typeServicio()
    {
        // un producto pertenece a un tipo
        $db = Servicio::db();
        $statement = $db->prepare('SELECT * FROM servicios WHERE idservicio = :id');
        $statement->bindValue(':id', $this->servicio_id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, Servicio::class);
        $userServicio = $statement->fetch(PDO::FETCH_CLASS);

        return $userServicio;
    }
    public function typeUser()
    {
        // un producto pertenece a un tipo
        $db = User::db();
        $statement = $db->prepare('SELECT * FROM users WHERE id = :id');
        $statement->bindValue(':id', $this->user_id);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_CLASS, User::class);
        $userServicio = $statement->fetch(PDO::FETCH_CLASS);

        return $userServicio;
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
