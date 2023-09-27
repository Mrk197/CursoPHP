<?php
    namespace Controllers;
    //require_once("../models/Persona.php");
    require_once("../autoload.php");
    use models\Persona;

    class Empleado extends Persona{
        protected $strPuesto;
        function __constructor(int $dpi, string $nombre, int $edad) {
            parent::__constructor($dpi,$nombre,$edad);
        }

        public function setPuesto(string $puesto) {
            $this->strPuesto = $puesto;
        }

        public function getPuesto() : string {
           return $this->strPuesto;
        }

        //redifiniendo metodo abstracto de la clase padre, si no marca error
        public function getDatosPersonales() {
            $datos = "
                <h2>DATOS PERSONALES</h2>
                DPI: {$this->intDpi}<br>
                Nombre: {$this->strNombre}<br>
                Edad: {$this->intEdad}<br>
            ";

            return $datos;
        }

        public function setMensaje(string $mensaje){
            $this->mensaje = $mensaje;
        }

        public function getMensaje():string{
            return $this->mensaje.' '.$this->strNombre;
        }
    }