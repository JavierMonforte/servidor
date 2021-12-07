<?php
namespace App\Controllers;
//require_once "app/models/Servicio.php";

use App\Models\Foto;

class FotosController {


    function __construct()
    {
        // echo "En UserController";
    }

    public function index()
    {
        //buscar datos
        $fotos = Foto::all();
        //pasar a la vista
        require("app/views/fotos/index.php");
    }
    
    public function create()
    {
        require 'app/views/fotos/create.php';
    }
    
    public function store()
    {
        $fotos = new Foto();
        $fotos->nombre = $_REQUEST['nombre'];
        $fotos->url = $this->fotosArchivo();
        $fotos->descripcion = $_REQUEST['descripcion'];
        $fotos->insert();
        header('Location:'.PATH.'fotos');
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $fotos = Foto::find($id);
        // var_dump($user);
        // exit();
        require('app/views/fotos/show.php');        
    }
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $fotos = Foto::find($id);
        require 'app/views/fotos/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $fotos = Foto::find($id);
        $fotos->nombre = $_REQUEST['nombre'];
        $fotos->url = $_REQUEST['url'];
        $fotos->descripcion = $_REQUEST['descripcion'];
        $fotos->save();
        header('Location:'.PATH.'fotos');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $fotos = Foto::find($id);
        $fotos->delete();
        header('Location:'.PATH.'fotos');
    }  
    
    public function fotosArchivo(){

        $tamanyo = $_FILES["archivo"]["size"];
       
        $res = move_uploaded_file ($_FILES["archivo"]["tmp_name"],"app/img/galeria/".$_FILES["archivo"]["name"]);
        
       return "app/img/galeria/".$_FILES["archivo"]["name"];
    }
}