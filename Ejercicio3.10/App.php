<!--10. Colorear una página con ayuda de una cookie. Usaremos la clase App con los siguientes métodos:
a) home muestra un mensaje de bienvenida.
i. Comprueba si hay una cookie llamada "color".
ii. Si existe la usa para darle color al fondo de la página.
b) colores muestra una lista de colores. Cada color tiene un enlace del estilo
?method=cambio&color=red. Al hacer clic cambiará el color del home.
c) cambio recibe el color de la página anterior, crea la cookie y reenvia ('header...') al método home.
NOTA: dos vistas (home y colores) y un reenvío (cambio).-->

<?php
class App{
        public function __construct($name = "javier", $password = 'javier')
        {
            $this->name = 'javier';
            $this->password = 'javier';
        }
        public function run(){

           if (isset($_GET) && !empty($_GET)){
               $method = $_GET['method'];
           } else{
               $method = "home";
           }
           $this->$method();
        }
        public function home(){

            if (isset($_COOKIE) && !empty($_COOKIE)) {
                $color = $_COOKIE['color'];
            }
            else{
                $color = "blue";
                setcookie("color", $color, time() + 3600);
            }
                

            
            include("./views/index.php");
        }
        public function cambio(){
            if(isset($_GET) && !empty($_GET)){
                $color=$_GET['color'];
                setcookie("color", $color, time() + 3600*24);
                header("Location:?method=home");
            }
        }

    }

