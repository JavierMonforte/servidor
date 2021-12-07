<?php
namespace App\Controllers;

//require_once "app/models/Tipo.php";
use App\Models\UserServicio;
use App\Models\User;
use App\Models\Servicio;


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
class UserServicioController
{

    function __construct()
    {
        // echo "En UserController";
    }

    public function index()
    {
        //buscar datos
        $userServicio = UserServicio::all();
        //pasar a la vista
        require('app/views/userServicio/index.php');
    }
    
    public function create()
    {
        $users = User::all();
        $servicio = Servicio::all();
        require 'app/views/userServicio/create.php';
    }
    
    public function store()
    {
       
        $userServicio = new UserServicio();
        $userServicio->servicio_id = $_REQUEST['servicio'];
        $userServicio->user_id = $_REQUEST['usuario'];
        $userServicio->insert();
        header('Location:'.PATH.'userServicio/');
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        $users = User::all();
        $servicio = Servicio::all();
        list($id) = $args;
        $userServicio = UserServicio::find($id);
        // var_dump($user);
        // exit();
        require('app/views/userServicio/show.php');        
    }
    public function edit($arguments)
    {
        $users = User::all();
        $servicio = Servicio::all();
        $id = (int) $arguments[0];
        $userServicio = UserServicio::find($id);
        require 'app/views/userServicio/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];    
        $userServicio = UserServicio::find($id);
        $userServicio->user_id = $_REQUEST['usuario'];
        $userServicio->servicio_id = $_REQUEST['servicio'];   
        $userServicio->save();
        header('Location:'.PATH.'userServicio');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $userServicio = UserServicio::find($id);
        $userServicio->delete();
        header('Location:'.PATH.'userServicio');
    }    
}
