<?php
namespace App\Controllers;

//require_once "app/models/Tipo.php";
use App\Models\Tipo;

/*
* La inserción requiere dos métodos en el controlador:
*   - Método insert que genera un formulario de alta
*   - Método store que recibe los datos de dicho formulario:
*       -> concluye con un reenvío a la lista, index(), o al detalle, show() del nuevo registro
*
* La actualización requiere dos métodos en el controlador:
*   - Método edit que genera un formulario de modificación con los datos del registro.
*        Este método implica buscar en la base de datos antes de construir el formulario
*   - Método update que recibe los datos de dicho formulario.
*        Igualmente, debemos buscar el registro en la base de datos y después modificarlo
*
*
*/
class TiposController
{

    function __construct()
    {
        // echo "En UserController";
    }

    public function index()
    {
        //buscar datos
        $tipos = Tipo::all();
        //pasar a la vista
        require('app/views/tipos/index.php');
    }
    
    public function create()
    {
        require 'app/views/tipos/create.php';
    }
    
    public function store()
    {
        $tipos = new Tipo();
        $tipos->tipo = $_REQUEST['tipo'];
        $tipos->insert();
        header('Location:'.PATH.'tipos/');
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $tipos = Tipo::find($id);
        // var_dump($user);
        // exit();
        require('app/views/tipos/show.php');        
    }
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $tipos = Tipo::find($id);
        require 'app/views/tipos/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $tipos = Tipo::find($id);
        $tipos->tipo = $_REQUEST['tipo'];
        $tipos->save();
        header('Location:'.PATH.'tipos');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $tipos = Tipo::find($id);
        $tipos->delete();
        header('Location:'.PATH.'tipos');
    }    
}
