<?php
    require_once("ClassEmpleado.php");
    require_once("ClassCliente.php");

    /*$objEmpleado = new Empleado(9899889,"Andres", 25);
    $objEmpleado->setPuesto("Adminnistrador");
    echo $objEmpleado->getDatosPersonales();
    echo "Puesto:".$objEmpleado->getPuesto();

    $objCliente = new Cliente(35446,"Elena", 20);
    $objCliente->setCredito(1000);
    echo $objCliente->getDatosPersonales();
    echo "Credito:".$objCliente->getCredito();*/

    //implementación de métodos abstractos
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