<?php

// principio de responsabilidad unica: la clase deberia tener una razon unica para cambiar.
// la clase EmpleadoDB solo genera la unica funcion de realizar consultas a la base de datos.

class Empleado
{
    private $nombre;
    private $apellido;
    private $email;
    private $telefono;

    //constructor

    //aqui van los metodos getter y setter

}

class EmpleadoDB
{
    public function insertInDB(){
        
        // aqui va la sentencia de Insert en la DB
    }

    public function deleteDeDB(){

        // aqui va la sentencia de Delete en la DB
    }
}


