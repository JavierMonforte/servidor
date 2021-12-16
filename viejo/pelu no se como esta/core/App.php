<?php
namespace Core;
class App
{
    /*
    * Controlador frontal
    */ 

    function __construct()
    {
        session_start();

        if (isset($_GET['url']) and !empty($_GET['url'])) {
            $url = $_GET['url'];
        } else {
            $url = 'home';
        }

        // vamos a usar la url de la siguiente manera:
        // controlador/metodo/argumentos
        //echo($url ."probando");
        $arguments = explode('/', trim($url, '/'));//como un split
        $controllerName = array_shift($arguments);//devuelve el primer elemento y lo borra del array
        $controllerName = ucwords($controllerName) . "Controller";//ucwords convierte en mayuscula la primera letra de cada palabra
        if (count($arguments)) { // coge el segundo elemento
            $method =  array_shift($arguments);
        } else {
            $method = "index"; // si no manda al metodo index
        }

         //echo "App - Url: $url <br>";
        // echo "<pre>";
        // var_dump($arguments);

        // echo "Controlador: $controllerName";
        // echo "<br>";
        // echo $method;
        // echo "<hr>";
        $file = "app/controllers/$controllerName" . ".php";
        if (file_exists($file)) {
            require_once $file;
        } else {
            header("HTTP/1.0 404 Not Found");
            die();
        }

        $controllerName = '\\App\\Controllers\\' . $controllerName;
        
        $controllerObject = new $controllerName;
        if (method_exists($controllerName, $method)) {
            $controllerObject->$method($arguments);
        } else {
            header("HTTP/1.0 404 Not Found");
            echo "No encontrado";
            die();
        }
    }
}

