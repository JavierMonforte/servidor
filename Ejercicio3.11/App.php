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
                session_start();
                if (!isset($_SESSION['deseos'])) {
                    $_SESSION['contrasena'] = $contrasena;
                    $_SESSION['usuario'] = $nombre;
                    $_SESSION['deseos'] = $deseos;
                } else {
                    $_SESSION['deseos'] = $deseos;
                }
                //echo "hola" . $_SESSION['count'];
                // echo "<br><a href='sesiones_uso_basico2.php'>Siguiente</a>";

                // Eliminar un elemento de la sesión
                // unset($_SESSION['count']);

                // Borrar toda la sesión
                // session_destroy();
                // setcookie('usuario', $this->name, time() + 3600 * 24);
                // setcookie('clave', $this->password, time() + 3600 * 24);
                // setcookie("deseos", serialize($deseos), time() + 3600);
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
        session_start();
        include("./views/home.php");
    }
    public function logout()
    {
        unset($_SESSION['deseos']);
        unset($_SESSION['contrasena']);
        unset($_SESSION['usuario']);
        session_destroy();

        // setcookie('usuario', $this->name, time() - 3600 * 24);
        // setcookie('clave', $this->password, time() - 3600 * 24);
        header('Location: ?method=login');
    }
    public function new()
    {
        session_start();
        echo('ha entrado en new');
        if (isset($_POST) && !empty($_POST)) {
            $deseos = $_SESSION['deseos'];
            $deseos[] = $_POST['new'];
            $_SESSION['deseos'] = $deseos;
            echo ("nuevo deseo guardado");
        }
        header("Location:?method=home");
    }
    public function borrar()
    {
        session_start();
        if (isset($_GET) && !empty($_GET)) {
            $deseos = $_SESSION['deseos'];
            unset($deseos[$_GET['id']]);
            $_SESSION['deseos'] = $deseos;
            header('Location:?method=home');
        } else {
            header('Location:?method=home');
        }
    }
    public function empty()
    {
        session_start();
        $deseos = $_SESSION['deseos'];
        unset($deseos);
        $deseos = [];
        $_SESSION = $deseos;
        header('Location:?method=home');
    }
    public function close()
    {
        session_destroy();
        header('Location:?method=login');
    }
}
