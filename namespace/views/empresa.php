<?php
    //require_once("../controllers/Empleado.php");
    //require_once("../controllers/Cliente.php");
    //require_once("../controllers/Persona.php");
    require_once("../autoload.php");
    use Controllers\Empleado;
    use Controllers\Cliente;
    use Controllers\Persona;


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

    echo '<br>';
    $mensaje = new Persona();
    echo $mensaje->saludar();
?>