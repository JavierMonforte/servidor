<?php

class App
{
    public function __construct($name = "javier", $password = 'javier')
    {
        $this->name = 'javier';
        $this->password = 'javier';
    }

    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        } else {
            $method = 'home';
        }
        $this->$method();
    }


    public function home()
    {
        include("./views/index.php");
    }

    public function menu()
    {
        include("./views/menu.php");
    }
    public function reservar()
    {
        include("./views/citas.php");
    }

    public function servicios()
    {
        include("./views/servicios.php");
    }
    public function almacenarServicios()
    {
        session_start();
        $cortes = [];
        if (isset($_POST)) {
            $cortes['nombre'] = $_POST['servicios'];
            $cortes['color'] = $_POST['color'];
            $cortes['precio'] = $_POST['precio'];
            $cortes['descripcion'] = $_POST['descripcion'];
            $_SESSION['servicios'][] = $cortes;;
            header("Location:?method=servicios");

        } else {
            header("Location:?method=servicios");
        }
    }
    public function borrarServicios(){
        session_start();
        unset($_SESSION['servicios'][$_GET['id']]);
        header("Location:?method=servicios");
    }
    
}
