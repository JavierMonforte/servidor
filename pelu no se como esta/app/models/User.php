<?php
namespace App\Models;

use PDO;
use DateTime;
use Core\Model;

require_once 'core/Model.php';


class User extends Model
{
    public function __construct()
    {
        $this->fechaNacimiento = DateTime::createFromFormat('Y-m-d', $this->fechaNacimiento);
    }
    public static function all(){ 
        //obtener conexión
        $db = User::db();
        //preparar consulta
        $sql = "SELECT * FROM users";
        //ejecutar
        $statement = $db->query($sql);
        //recoger datos con fetch_all
        $users = $statement->fetchAll(PDO::FETCH_CLASS, User::class);
        //retornar
        return $users;
    }
    public static function find($id) 
    {
        $db = User::db();
        $stmt = $db->prepare('SELECT * FROM users WHERE id=:id');
        $stmt->execute(array(':id' => $id));
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        // echo $this->birthdate->format('d-m-y');
        return $user;
    }    
    public function insert()
    {
        $db = User::db();
        $stmt = $db->prepare('INSERT INTO users(nombre, apellido, fechaNacimiento, email, password, active, admin) VALUES(:name, :surname, :birthdate, :email, :password, :active, :admin)');
        $stmt->bindValue(':name', $this->nombre);
        $stmt->bindValue(':surname', $this->apellido);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':birthdate', $this->fechaNacimiento);
        $stmt->bindValue(':password', $this->password);
        $stmt->bindValue(':active', $this->active);
        $stmt->bindValue(':admin', $this->admin);

        return $stmt->execute();
    }

    public function save()
    {
        $db = User::db();
        $stmt = $db->prepare('UPDATE users SET nombre = :name, apellido = :surname, fechaNacimiento = :birthdate, email = :email, password = :password, active = :active, admin = :admin WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':name', $this->nombre);
        $stmt->bindValue(':surname', $this->apellido);
        $stmt->bindValue(':birthdate', $this->fechaNacimiento);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':password', $this->password);
        $stmt->bindValue(':active', $this->active);
        $stmt->bindValue(':admin', $this->admin);

        return $stmt->execute();
    }
    
    public function delete(){ 
        $db = User::db();
        $stmt = $db->prepare('DELETE FROM users WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        return $stmt->execute();
    }
    public static function findbyEmail($email){

        $db = User::db();
        $stmt = $db->prepare('SELECT * FROM users WHERE email=:email');
        $stmt->execute(array(':email' => $email));
        $stmt->setFetchMode(PDO::FETCH_CLASS, User::class);
        $user = $stmt->fetch(PDO::FETCH_CLASS);
        return $user;
    }
    public function setPassword($password)
    {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $db = User::db();
        $stmt = $db->prepare('UPDATE users SET password = :password WHERE id = :id');
        $stmt->bindValue(':id', $this->id);
        $stmt->bindValue(':password', $password);
        $stmt->execute();
        return $password;
    }
    public function passwordVerify($password, $user)
    {
        return password_verify($password, $user->password);
    } 
}
