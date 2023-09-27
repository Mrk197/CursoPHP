<?php
    function autoload($class) {
        //echo $class."<br>";
        $url = str_replace("\\", "/",$class.".php");
        //echo($url."<br>");
        require_once($url);
    }
    spl_autoload_register('autoload');

?>