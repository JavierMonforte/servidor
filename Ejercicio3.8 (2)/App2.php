<!--a) login: muestra un formulario de login (usuario y contraseña).
b) auth: guarda el usuario y su contraseña en una cookie. Después reenvía la petición a home.
c) home: Muestra un saludo y un enlace para cerrar sesión.
d) logout: elimina las cookies (setcookie(...., time() - 1)) y reenvía a login.
e) Depura tu código. En login, comprueba que no hay ya un usuario. Si lo hay reenvía a home.-->

<?php
class app
{
    public function __construct($name = "javier", $contrasena ='javier')
    {
        $this->name = 'javier';
        $this->password ='javier';
    }
    public function run()
    {

        if (isset($_GET['method'])) {
            $method = $_GET['method'];
            try {
                $this->$method();
            } catch (Throwable $th) {
                if (method_exists($this, $method)) {
                    header("HTTP/1.0 500 Internal Server Error");
                    return http_response_code(500);
                    echo "Error en el servidor";
                } else {
                    header("HTTP/1.0 404 Not Found");
                    echo "No encontrado";
                }
            } finally {
                echo "<pre>";
                print_r($th);
            }

        }else {
            //La primera vez ejecuta el método index
            //header('Location: /servidor/Ejercicio3.8/views/login.php');
            require('views/login.php');//que pongo header o require?

        }
        
    }


    public function login()
    {
        if(isset($_COOKIE['usuario'])){ 
            header('localition:?method=home');
        } else{
            include('./views/login.php');
        }
    }

    public function auth()
    {
        
        setcookie('usuario', $this->name, time() + 3600 * 24);
        setcookie('clave', $this->password, time() + 3600 * 24);
        $this->home();
    }
    public function home()
    {
        echo('ha entrado en home');
        header('Location: ./views/index.php');
    }
    public function logout()
    {
        setcookie('usuario', $this->name, time() - 3600 * 24);
        setcookie('clave', $this->password, time() - 3600 * 24);
        header('Location: /servidor/Ejercicio3.8/views/login.php');
    }
}
