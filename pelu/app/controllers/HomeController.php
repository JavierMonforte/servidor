<?php

namespace App\Controllers;

use App\Models\Servicio;
use App\Models\User;
use App\Models\Foto;

/**
 *
 */
class HomeController
{

    function __construct()
    {
    }

    public function index()
    {

        require("app/views/index.php");
    }
    public function servicios()
    {
        require_once "app/models/Servicio.php";
        $servicios = Servicio::all();
        require("app/views/web/servicios.php");
    }
    public function menu()
    {
        require("app/views/web/menu.php");
    }
    public function peluqueros()
    {
        require_once "app/models/User.php";

        $users = User::all();
        require("app/views/web/peluqueros.php");
    }
    public function galeria()
    {
        $fotos = Foto::all();
        require("app/views/web/galeria.php");
    }
    public function home()
    {
        require_once "app/models/User.php";

        $users = User::all();
        require("app/views/home.php");
    }
    public function citas()
    {
        require("app/views/web/citas.php");
    }

    public function login()
    {
        require("app/views/login.php");
    }
    public function logout()
    {
        unset($_SESSION['user']);
        unset($_SESSION['message']);
        session_destroy();
        require "app/views/web/menu.php";
    }
}
