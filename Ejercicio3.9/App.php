<!--9. Se trata de crear una lista de deseos. Usaremos la clase App con los siguientes métodos:
a) login método que muestra el formulario de entrada.
b) auth método que toma el nombre de usuario tras el login.
i. Tras hacer esto reenvía a home.
c) home método que muestra la lista de deseos. Además muestra un formulario de nuevos deseos.
i. El formulario envía al método new.
d) new toma el nuevo deseo y lo incluye en la lista.
e) delete borra un deseo de la lista. Debe recibir el índice del deseo.
f) empty vacía la lista de deseos.
g) close cierra sesión: borra la cookie.-->

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
            $method = 'login';
        }
        $this->$method();
    }


    public function login()
    {
        require('views/login.php');
    }

    public function auth()
    {
        if (isset($_POST) && !empty($_POST)) {
            $nombre = $_POST['usuario'];
            $contrasena = $_POST['clave'];
            if ($this->password == $contrasena && $this->name == $nombre) {
                $deseos = [];
                setcookie('usuario', $this->name, time() + 3600 * 24);
                setcookie('clave', $this->password, time() + 3600 * 24);
                setcookie("deseos", serialize($deseos), time() + 3600);
                header("Location:?method=home");
            } else {
                echo ("La contraseña o usuario no son correctos");
                header("La contraseña no es correcta"); //no me funciona
            }
        } else {
            /*header('Location:?method=login');*/
        }
    }
    public function home()
    {
        include("./views/home.php");
    }
    public function logout()
    {
        setcookie('usuario', $this->name, time() - 3600 * 24);
        setcookie('clave', $this->password, time() - 3600 * 24);
        header('Location: ?method=login');
    }
    public function new()
    {

        if (isset($_POST) && !empty($_POST)) {
            $deseos = unserialize($_COOKIE['deseos']);
            $deseos[] = $_POST['new'];
            setcookie("deseos", serialize($deseos), time() + 3600);
            echo ("nuevo deseo guardado");
        }
        header("Location:?method=home");
    }
    public function borrar()
    {
        if(isset($_GET) && !empty($_GET)){
            $deseos = unserialize($_COOKIE['deseos']);
            unset($deseos[$_GET['id']]);
            setcookie("deseos", serialize($deseos), time() + 3600);
            header('Location:?method=home');
        } else{
            header('Location:?method=home');
        }
    }
    public function empty()
    {
        $deseos = unserialize($_COOKIE['deseos']);
        unset($deseos);
        $deseos=[];
        setcookie("deseos", serialize($deseos), time() + 3600*24*365);
        header('Location:?method=home');

    }
    public function close()
    {
        $deseos = unserialize($_COOKIE['deseos']);
        setcookie("deseos", serialize($deseos), time() - 3600);
        header('Location:?method=login');
    }
}
