<?php

    require_once("config.php");

    $teste = new usuario();

    $teste->loadById('2');

    echo $teste;

?>