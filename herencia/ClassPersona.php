<?php
//no se pueden crear instancias de una clase abstracta
    abstract class Persona{
        public $intDpi;
        public $strNombre;
        public $intEdad;
        public $mensaje;

        function __construct(int $dpi, string $nombre, int $edad){
            $this->intDpi = $dpi;
            $this->strNombre = $nombre;
            $this->intEdad = $edad;
        }

        //metodo abstract no puede contener body y la clase principal debe ser abstracta 
        abstract public function getDatosPersonales();
        abstract public function setMensaje(string $mensaje);
        abstract public function getMensaje():string;
    }