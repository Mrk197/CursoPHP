<?php
 require_once("Operacion.php");
 require_once("OPeracionesBasicas.php");

  class Calcular implements Operacion,Operacion_basica
 {
    public function raizCuadrada(float $numero) : float{
        $total = sqrt($numero);
        return $total;
    }

    public function potencia(int $numero, int $potencia) : int{
        $total = pow($numero, $potencia);
        return $total;
    }

    public function op_basica(float $num1, float $num2, string $operacion){
        if ($operacion == "+") {
            $result = $num1+$num2;
        }
        else if ($operacion == "-") {
            $result = $num1-$num2;
        }else if ($operacion == "*") {
            $result = $num1*$num2;
        }
        else if ($operacion == "/") {
            $result = $num1/$num2;
        }
        else{
            $result = "operacion no válida";
        }
        return $result;
    }
 }

 ?>
 