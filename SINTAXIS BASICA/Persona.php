<?php

class Persona
{
    private $nombre;
    private $apellido;
    private $edad;

    public function __construct ($nombre, $apellido, $edad) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    public function getNombre() {
        return $this-> nombre;
    }
    public function getApelllido(){
        return $this-> apellido;
    }
    public function setNombre($nombre) {
        $this-> nombre -> $nombre;
    }
    public function setApellido($apellido){
        $this-> apellido = $apellido;
    }

    public function saludar() {
        return "Buenos días!";
    }

    public function __toString() {
        return $this->nombre . " " . $this->apellido;
    }


}