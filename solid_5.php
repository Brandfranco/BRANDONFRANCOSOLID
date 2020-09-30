<?php

// principio de inersion de dependencia : una clase particular no debería 
// depender directamente de una clase sino de la abstracción
// de la misma de modo que se favorezca la reusabilidad frente al acoplamiento.

// codigo para crear y enviar correos dependiendo del proveedor de servicios 

interface IMailService 
{
    function send(): void;
}

class MailChimpService implements IMailService
{
    public function send(): void
    {
        // código para enviar el correo
    }
}

class SendGridService implements IMailService
{
    public function send(): void
    {
        // código para enviar el correo
    }
}

// 
class OrderService 
{
    private IMailService $mailService;

    public function __constructor (IMailService $mailService) 
    {
        $this->mailService = $mailService;
    }

    public function create(Order $order) : void
    {
        //  código para crear la orden

        // Enviar notificación de la orden creada
        $this->mailService.Send();
    }
}