<?php

if (! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente {
    
    /**
     * $id
     *
     * @var int     identificador de registro en base de datos.
     */
    protected $id;

    /**
     * $email
     *
     * @var string  email del cliente registrado.
     */
    protected $email;

    /**
     * $cuit
     *
     * @var long   cuit del cliente.
     */
    protected $cuit;

    /**
     * $dni
     *
     * @var long    dni del cliente.
     */
    protected $dni;

    /**
     * $apellido
     *
     * @var string  apellido del cliente.
     */
    protected $apellido;

    /**
     * $nombre
     *
     * @var string  nombre del cliente registrado.
     */
    protected $nombre;
    
    /**
     * $key
     *
     * @var string  clave privada de 2048bits.
     */
    protected $key;
    
    /**
     * $cert
     *
     * @var string  certificado obtenido de afip asociado al webservice de facturacion.
     */
    protected $cert;
    
    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function saludar() {
        return "Hola ".$this->nombre;
    }

}

?>