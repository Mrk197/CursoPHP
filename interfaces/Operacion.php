<?php
    //para definir métodos que se usaran en alguna clase
    interface Operacion{
        public function raizCuadrada(float $numero) : float;

        public function potencia(int $numero, int $potencia) : int;
    }
?>