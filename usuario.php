<?php
    require_once("ClassUsuario.php");

    $objUsuario1 = new Usuario("Pedro","pedrito@info.com","Admin");

    //echo $objUsuario1->strNombre;
    //echo $objUsuario1->strEmail;
    //echo $objUsuario1->strClave;  //error por que es private
    echo "<br>";
    //echo $objUsuario1->strFechaRegistro; //error
    echo "<br>";
    //echo $objUsuario1->strEstado; //error no pertenece al objeto, si no a la clase
    echo Usuario::$strEstado; //se muestra sin necesidad de instanciar (const)
    echo "<br>";
    echo $objUsuario1->getEmail();
    echo "<br><br>";
    echo $objUsuario1->getPerfil();
    echo "<br><br>";
    $objUsuario2 = new Usuario("Andrea","andy@info.com","Cliente");
    echo $objUsuario2->getPerfil();
    $objUsuario2->setCambiarClave("1243457");
    echo $objUsuario2->getPerfil();
    

?>
