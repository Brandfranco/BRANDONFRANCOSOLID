<?php

// principio de segregacion de interface: una clase no debería implementar una interfaz que no vaya
// a usar ni las interfaces deberían estar sobrecargadas de métodos que no todas las clases 
// que las implementen los necesitarán.

interface Bebida
{
//aqui va codigo
}

interface MaquinaBebida
{
    public function prepareBebida(): Bebida;
}

// se implementa un metodo segun la necesidad del usuario, a una interfaz
class MaquinaCafe implements MaquinaBebida
{
    public function prepareBebida(): Bebida;
    {
        //aqui va codigo para preparar cafe
    }
}

class MaquinaTe implements MaquinaBebida
{
    public function prepareBebida(): Bebida;
    {
        //aqui va codigo para preparar Te
    }
}
