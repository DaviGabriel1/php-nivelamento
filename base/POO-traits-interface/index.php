<?php
    include("models/Assistente.php");
    include("models/Gerente.php");

    $as1 = new Assistente("Paulo",892.00);
    $as2 = new Assistente("Wendel",1020.90);
    $ge1 = new Gerente("Antonio",5000.00);
    $ge2 = new Gerente("Geraldo",12000.00);

    echo print_r($as1);
    echo print_r($as2);
    echo "<br>";
    echo print_r($ge1);
    echo print_r($ge2);

    echo $ge1->aviso();
?>