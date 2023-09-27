<?php
    require_once("ClassOperacion.php"); //en caso de tener un error se detiene el proceso, con include, no pasa eso.

    $operacion = new Operacion(12,2);
    $totalSuma = $operacion->getSuma();
    echo "Suma: ".$totalSuma;
    echo "<br>";
    $totalMulti = $operacion->multiplicar();
    echo "Multiplicación: ".$totalMulti
?>