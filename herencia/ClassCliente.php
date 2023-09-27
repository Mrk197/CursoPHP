<?php
require_once("ClassPersona.php");

class Cliente extends Persona{
    protected $fltCredito;
    function __constructor(int $dpi, string $nombre, int $edad) {
        parent::__constructor($dpi,$nombre,$edad);
    }

    public function setCredito(float $credito) {
        $this->fltCredito = $credito;
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


    public function getCredito() : float {
       return $this->fltCredito;
    }

    public function setMensaje(string $mensaje){
        $this->mensaje = $mensaje;
    }

    public function getMensaje():string{
        return $this->mensaje.' '.$this->strNombre;
    }
}

?>