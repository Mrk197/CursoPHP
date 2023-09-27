<?php
    //require_once("ClassEmpleado.php");
    //require_once("ClassCliente.php");

    //para no estar requiriendo uno a uno los archivos
    //deben tener el mismo nombre de la clase
    require_once("autoload.php");

    $objEmpleado = new Empleado(9899889,"Andres", 25);
    $objEmpleado->setPuesto("Administrador");
    $objEmpleado->setMensaje("Bienvenido empleado");

    echo $objEmpleado->getMensaje();
    echo $objEmpleado->getDatosPersonales();

    echo '<br><hr>';

    $objCliente = new Cliente(35446,"Elena", 20);
    $objCliente->setCredito(1000);
    $objCliente->setMensaje("Bienvenido cliente");

    echo $objCliente->getMensaje();
    echo $objCliente->getDatosPersonales();
?>