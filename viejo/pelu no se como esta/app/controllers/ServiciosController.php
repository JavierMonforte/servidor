<?php
namespace App\Controllers;
//require_once "app/models/Servicio.php";

use App\Models\Servicio;

class ServiciosController {


    function __construct()
    {
        // echo "En UserController";
    }

    public function index()
    {
        //buscar datos
        $servicios = Servicio::all();
        //pasar a la vista
        require("app/views/servicios/index.php");
    }
    
    public function create()
    {
        require 'app/views/servicios/create.php';
    }
    
    public function store()
    {
        try{
        $servicios = new Servicio();
        $servicios->servicio = $_REQUEST['servicio'];
        $servicios->descripcion = $_REQUEST['descripcion'];
        $servicios->tipoServicio = $_REQUEST['tipoServicio'];
        $servicios->precio = $_REQUEST['precio'];
        $servicios->genero = $_REQUEST['genero'];
        $servicios->tiempo = $_REQUEST['tiempo'];
        $servicios->insert();
        header('Location:'.PATH.'servicios/');
    }catch (Exception $e){
        echo "Los datos introducidos no corresponden con el tipo de datos de la base de datos";
    }
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        list($idservicio) = $args;
        $servicios = Servicio::find($idservicio);
        // var_dump($user);
        // exit();
        require('app/views/servicios/show.php');        
    }
    public function edit($arguments)
    {
        $idservicio = (int) $arguments[0];
        $servicios = Servicio::find($idservicio);
        require 'app/views/servicios/edit.php';
    }
    
    public function update()
    {

        $idservicio = $_REQUEST['idservicio'];
        $servicios = Servicio::find($idservicio);
        $servicios->servicio = $_REQUEST['servicio'];
        $servicios->descripcion = $_REQUEST['descripcion'];
        $servicios->tipoServicio = $_REQUEST['tipoServicio'];
        $servicios->precio = $_REQUEST['precio'];
        $servicios->genero = $_REQUEST['genero'];
        $servicios->tiempo = $_REQUEST['tiempo'];
        $servicios->save();
        header('Location:'.PATH.'servicios');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $servicios = Servicio::find($id);
        $servicios->delete();
        header('Location:'.PATH.'servicios');
    }    
}