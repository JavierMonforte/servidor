<?php
namespace App\Controllers;

use App\Models\Jugador;
/**
*
*/
class JugadorController
{

    function __construct()
    {
        // echo "En JugadorController";
    }

    public function index()
    {
    //buscar datos
    $jugadores = Jugador::all();
    //pasar a la vista
        require "app/views/jugador/index.php";        
    }

    public function create()
    {
        require "app/views/jugador/create.php";
    }

    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $jugador = Jugador::find($id);
        //Completar
        require "app/views/jugador/create.php";

        
    }
    public function update()
    {
        $id = $_REQUEST['id'];
        $jugador = Jugador::find($id);
        $jugador->nombre = $_REQUEST['nombre'];
        $jugador->nacimiento = $_REQUEST['nacimiento'];
        $jugador->puesto = $_REQUEST['puesto'];
        $jugador->url = $this->fotosArchivo();
        $jugador->titular = $_REQUEST['titular'];

        $jugador->save();
        header('Location:/jugador');
    }
    public function store()
    {             
        $jugador = new Jugador();
        $jugador->nombre = $_REQUEST['nombre'];
        $jugador->nacimiento = $_REQUEST['nacimiento'];
        $jugador->puesto = $_REQUEST['puesto'];
        $jugador->url = $_REQUEST['url'];
        $jugador->titular = $_REQUEST['titular'];

        $jugador->insert();
        header('Location: /jugador');//ojo este header
    }

    public function titular($arg)
    {
        $id = (int) $arg[0];
        $jugador = Jugador::find($id);
        //Completar
        if (!isset($_SESSION)) {
            $titulares = [];
            $_SESSION['titulares'] = $titulares;

        } else{
            $_SESSION['titulares'][] = $jugador;
        }
        header('Location: /jugador');

        //completa
    }
    public function titulares()
    {
        $titulares = $_SESSION['titulares'];
        require "app/views/jugador/titulares.php"; 

    }
    public function quitar($arg)
    {
        $id = (int) $arg[0];
        $jugador = Jugador::find($id);
        $titulares = $_SESSION['titulares'];
        foreach ( $titulares as $key => $value) {
            if ($value->id == $id) {
                unset($value);
            }
        } 
        $_SESSION['titulares'] = $titulares;
       
        header('Location: /jugador/titulares');
    }
    public function fotosArchivo(){

        $tamanyo = $_FILES["archivo"]["size"];
       
        $res = move_uploaded_file ($_FILES["archivo"]["tmp_name"],"fotos/".$_FILES["archivo"]["name"]);
        
       return "fotos/".$_FILES["archivo"]["name"];
    }
}
