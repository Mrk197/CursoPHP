<?php
    class Operacion{

        public $cantUno = 0;
        public $cantDos = 0;
        public $resultado = 0;

        //constructor
        function __construct($intCat1, $intCant2){
            $this->cantUno = $intCat1;
            $this->cantDos = $intCant2;

        }

        //métodos
        public function getSuma(){
            $this->resultado = $this->cantUno + $this->cantDos;
            return $this->resultado;
        }

        public function multiplicar(){
            $this->resultado = $this->cantUno * $this->cantDos;
            return $this->resultado;
        }
    }

?>