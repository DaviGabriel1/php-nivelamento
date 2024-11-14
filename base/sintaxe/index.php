<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //echo phpinfo(); informa versão e etc sobre o php
        //echo "ola "."mundo" concatenação 
        $nome = "Davi";
        echo "meu nome é $nome";
        $texto = <<< 'FIM'
        Este é um exemplo de nowdoc.
        Ele não vai interpretar $variaveis ou \n novas linhas.
        Tudo é tratado como texto literal.
        FIM;

        echo $texto;

        define("CONS","valor da constante");

        echo CONS;

        // Todos os arrays em PHP são arrays associativos (hashmaps),

        $array1 = array("um" => 1,"dois" => 2,"tres" => 3);

        $array2 = ["um" => 1,"dois" => 2,"tres" => 3];

        $array3 = ["um","dois","tres"];

        echo ",$array3[0],"; //imprime um

        $array3[] = "quatro";

        echo $array3[3];

        unset($array3[3]); //deleta elemento do array







        ?>
</body>
</html>