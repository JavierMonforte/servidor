<?php
namespace App\Controllers;

use App\Models\User;

class LoginController
{

    function __construct()
    {
        // echo "En LoginController";
    }

    public function index()
    {
        require "app/views/login.php";
    }

    public function login(){

        // echo "ha entrado en login";
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = User::findbyEmail($email);
        
        if($user == false){
            $_SESSION['message'] = 'Error el usuario no existe.';
            header('Location:'.PATH.'login/index');
        }
        else
        {
            // Comprueba que la contraseña coincida con la contraseña cifrada
            if(User::passwordVerify($password, $user))
            {
                $_SESSION['user'] = $user;
                header('Location:'.PATH.'servicios/index');
            }
            else{
                $_SESSION['message'] = 'Error, la contraseña es incorrecta.';
                header('Location:'.PATH.'login');
            }
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        unset($_SESSION['message']);
        session_destroy();
        require "app/views/web/menu.php";
    }
}
