<?php
    require_once("Autoload.php");

    $objUsuario = new Usuario();

    //insertar
    $insert = $objUsuario->insertUsuario("Jorge",1234567890,"jorge@info.com");
    echo $insert;

    //get all
    $users = $objUsuario->getUsuarios();
    print_r("<pre>");
    print_r($users);
    print_r("</pre>");

    //update
    $upsdateUser = $objUsuario->updateUser(1,"Marta",1234567890,"marta@info.com");
    echo $upsdateUser;

    //get one
    $user = $objUsuario->getUsuario(2);
    print_r("<pre>");
    print_r($user);
    print_r("</pre>");

    //delete
    $delete = $objUsuario->deleteUsuario(2);
    echo $delete;

