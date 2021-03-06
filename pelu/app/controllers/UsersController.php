<?php
namespace App\Controllers;

//require_once "app/models/User.php";

use App\Models\Servicio;
use App\Models\User;
use App\Models\UserServicio;
use Dompdf\Dompdf;

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
class UsersController
{

    function __construct()
    {
        // echo "En UserController";
    }

    public function index()
    {
        //buscar datos
        $Servicios = Servicio::all();
        $users = User::all();
        //pasar a la vista
        require('app/views/user/index.php');
    }
    
    public function create()
    {
        require 'app/views/user/create.php';
    }
    
    public function store()
    {
        $user = new User();
        $user->nombre = $_REQUEST['name'];
        $user->apellido = $_REQUEST['surname'];
        $user->fechaNacimiento = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->insert();
        header('Location:'.PATH.'users/');
    }
    
    public function show($args)
    {
        // $id = (int) $args[0];
        list($id) = $args;
        $user = User::find($id);
        // var_dump($user);
        // exit();
        require('app/views/user/show.php');        
    }
    public function edit($arguments)
    {
        $id = (int) $arguments[0];
        $user = User::find($id);
        require 'app/views/user/edit.php';
    }
    
    public function update()
    {
        $id = $_REQUEST['id'];
        $user = User::find($id);
        $user->nombre = $_REQUEST['name'];
        $user->apellido = $_REQUEST['surname'];
        $user->fechaNacimiento = $_REQUEST['birthdate'];
        $user->email = $_REQUEST['email'];
        $user->save();
        header('Location:'.PATH.'users');
    }

    public function delete($arguments)
    {
        $id = (int) $arguments[0];
        $user = User::find($id);
        $user->delete();
        header('Location:'.PATH.'users');
    }  
    public function pdf()
    {
        //iniciar buffer, para construir un response
        ob_start();
        $users = User::all();
        require_once ('app/views/user/pdf.php');
        // Volcamos el contenido del buffer
        // el response ya no va al navegador, va a $html
        $html = ob_get_clean();
        
        $dompdf = new Dompdf();
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->loadHtml($html);
        $dompdf->render();
        $dompdf->stream("usuarios.pdf", array("Attachment"=>0));
    }
    public function pdfsimple()
    {
        $dompdf = new Dompdf();
        $dompdf->loadHtml('hello world');
        
        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
        
        // Render the HTML as PDF
        $dompdf->render();
        
        // Output the generated PDF to Browser
        $dompdf->stream();        
    }

}
  

