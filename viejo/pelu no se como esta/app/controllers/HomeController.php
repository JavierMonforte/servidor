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
        //echo "HomeController -> construct <br>";
    }

    public function index()
    {
        // echo "<p>En Index()</p>";
        
        require ("app/views/index.php");
    }
    public function servicios()
    {
        require_once "app/models/Servicio.php";
        $servicios = Servicio::all();
        // echo "<p>En Index()</p>";
        require ("app/views/web/servicios.php");
    }
    public function menu(){
        require("app/views/web/menu.php");
    }
    public function peluqueros()
    {
        require_once "app/models/User.php";

        $users = User::all();
        // echo "<p>En Index()</p>";
        require ("app/views/web/peluqueros.php");
    }
    public function galeria(){
        $fotos = Foto::all();
        require ("app/views/web/galeria.php");
 
    }
    public function home()
    {
        require_once "app/models/User.php";

        $users = User::all();
        // echo "<p>En Index()</p>";
        require ("app/views/home.php");
    }

}