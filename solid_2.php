<?php

// principio cerrado/abierto: Los objetos deberían estar abiertos para su extensión y cerrados para su modificación.



// la interface IFormReg enviara a la clase RegisterService un disparador cuando se inserte valores a la base de datos.


interface IFormReg
{
    function send() : void;
}


class Persona
{
    private $nombre;
    private $apellido;
    private $email;
    private $telefono;

    //constructor

    //aqui van los metodos getter y setter

}

// separacion de la logica de las sentencias insert a la base de datos dependiendo la registro. implementando la interfaz.

class RegisterEmpleado implements IFormReg
{

    //constructor

    public function insertInDB(){
        
        // aqui va la sentencia de Insert en la DB
    }
}

class RegisterUsuario implements IFormReg
{

    //constructor

    public function insertInDB(){
        
        // aqui va la sentencia de Insert en la DB
    }
}

//la clase que dispara cada registro
class RegisterService
{
    public function send(Array $registers) : void
    {
        foreach($registers as $register) 
        {
            $register->send();
        }
    }
}