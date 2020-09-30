<?php

// principio de sustitución de Liskov : 
// Cada clase que hereda de otra puede usarse como su padre sin necesidad de conocer las diferencias entre ellas.
// normalmente se puede establecer una clase animal como clase padre y una clase hija llamada tigre o tortuga
// en este principio se utilizara esa misma clase hija como clase padre.

//las interfaces podrian implementar el comportamiento de cada animal.

interface IRun
{
    function run();
}

interface IHunt
{
    function hunt();
}

interface IWalk
{
    function walk();
}

//se determina a cada clase de un animal lo que puede hacer

class Turtle implements IWalk
{
    public function walk()
    {

    }
}

class Tiger implements IHunt, IWalk, IRun
{
    public function hunt()
    {

    }

    public function run()
    {

    }

    public function walk()
    {

    }
}