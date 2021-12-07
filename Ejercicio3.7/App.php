<?php
class App
{
    public function __construct($name = "")
    {
        // echo "Construyendo la app <hr>";
        $this->name = $name;
        $this->arrayNumeros = array();
        $this->teacher = "Ester Grao";
        $this->student = "Fulano De Tal";
    }
    public function run()
    {
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
            switch ($method) {
                case 0:
                    $this->calcularFibonachi();
                    break;
                case 1:
                    $this->calcularPotencia();
                    break;
                case 2:
                    $this->calcularFactorial();
                    break;
                case 3:
                    $this->calcularPrimos(10000);
                    break;
                default:
                    break;
            }
          } else {
            $this->view();
        }
        

    }
    public function calcularPrimos($cantidad)
    {
        $this->name = "NUMEROS PRIMOS";
        $cuenta = 0;
        for ($i = 2; $i < $cantidad; $i++) {
            $primo = true;
            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $primo = false;
                    break;
                } else {
                };
            }
            if ($primo) {
                $cuenta++;
                $this->arrayNumeros[$cuenta] = $i;
            } else {
            }
        }
        $this->view();
    }
    public function calcularFibonachi()
    {
        $this->name = "NUMEROS DE FIBONACHI";

        $uno = 0;/* no entiendo porque empieza en uno*/
        $dos = 1;
        $limite = 1000000;
        $this->arrayNumeros['1'] = $uno;
        $cuenta = 1;
        $total = 0;
        do {
            $total = $uno + $dos;
            $cuenta++;
            $this->arrayNumeros[$cuenta] = $total;
            $uno = $dos;
            $dos = $total;
        } while ($total < $limite);
        $this->view();

    }

    public function calcularPotencia()
    {
        $this->name = "POTENCIAS DE 2";

        for ($i = 1; $i <= 24; $i++) {
            $this->arrayNumeros[$i] = pow(2, $i);
        }
        $this->view();

    }

    public function calcularFactorial()
    {
        $this->name = "FACTORIALES";

        $factorial = 1;
        $i = 0;
        for ($i = 0; $i < 10000; $i++) {
            $factorial = 1;
            for ($j = 1; $j <= $i; $j++) {
                $factorial = $factorial * $j;
            }
            if ($factorial > 1000000) {
                break;
            }
            $this->arrayNumeros[$i] = $factorial;
        }
        $this->view();
    }
    public function view()
    {
        include('views/index.php');
    }
}