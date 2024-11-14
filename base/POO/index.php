<?php
    include("Carro.php");
    include("Veiculo.php");
    
    $carro1 = new Carro("FIAT","Tipo","1999",100);
    echo $carro1->infos();
    echo Carro::$tipo; //acessa propriedades estáticas direta na classe

    echo $carro1->marca;
    echo $carro1->__get("marca");

    $carro1->marca = "gol";

    echo $carro1->marca;

    echo Carro::apresentar();

    //$veiculo = new Veiculo(100); Classe abstrata não pode ser instanciada
    //$veiculo->infos();
?>