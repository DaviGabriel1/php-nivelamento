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
        echo "meu nome é $nome\n";
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


        /* Lógicas */

        $x = 1;
        $y = 2;
        $x = $y; // $x agora contém o mesmo valor de $y
        $z = &$y;
        // $z agora contém uma referência para $y. Mudando o valor de
        // $z irá mudar o valor de $y também, e vice-versa.
        // $x irá permanecer inalterado com o valor original de $y

        var_dump($z); //imprime tipo e valor

        $a = 0;
        $b = '0';
        $c = '1';
        $d = '1';

        // assert lança um aviso se o seu argumento não é verdadeiro
        echo assert($a == $b); // igualdade
        echo assert($c != $a); // desigualdade
        echo assert($c <> $a); // alternativa para desigualdade
        echo assert($a < $c);
        echo assert($c > $b);
        echo assert($a <= $b);
        echo assert($c >= $d);

        //só serão verdadeiras se os valores são iguais e do mesmo tipo.
        echo assert($c === $d);
        echo assert($a !== $d);
        echo assert(1 == '1');
        echo assert(1 !== '1');
        // As variáveis podem ser convertidas entre tipos, dependendo da sua utilização.

        $inteiro = 1;
        echo $inteiro + $inteiro; // Imprime => 2

        $string = '1';
        echo $string + $string; // Imprime => 2 (strings são coagidas para inteiros)

        // Tipo de fundição pode ser utilizado para tratar uma variável 
        // como um outro tipo

        $booleano = (boolean) 1; // => true

        $zero = 0;
        $booleano = (boolean) $zero; // => false

        // Há também funções dedicadas para fundir a maioria dos tipos
        $inteiro = 5;
        $string = strval($inteiro);

        $var = null; // valor Null


        /* CONTROLE DE FLUXO */

        if (true) {
            print 'Eu fico impresso';
        }
        
        if (false) {
            print 'Eu não\'t';
        } else {
            print 'Eu fico impresso';
        }
        
        if (false) {
            print 'Não fica impresso';
        } elseif(true) {
            print 'Fica';
        }
        
        // operadores ternários
        print (false ? 'Não fica impresso' : 'Fica');
        
        $x = 0;
        if ($x === '0') {
            print 'Não imprime';
        } elseif($x == '1') {
            print 'Não imprime';
        } else {
            print 'Imprime';
        }
    ?>
        <?php if(true): ?> <!-- MUITO USADO EM TEMPLATES -->
            isto é exibido se for verdadeiro
        <?php else: ?>
            Isto é imprimido caso contrário
        <?php endif; ?>

        <?php
                    
        $flag = 0;            
        switch ($flag) {
            case '0':
                print 'Switch faz coerção de tipo';
                break; 
            case 'dois':
            case 'tres':
                // Faz alguma coisa, se a variável é 'dois' ou 'tres'
                break;
            default:
                // Faz algo por padrão
        }

        // While, do...while e for são repetições provavelmente familiares
        $i = 0;
        while ($i < 5) {
            echo $i++;
        }; // Imprime "01234"

        echo "\n";

        $i = 0;
        do {
            echo $i++;
        } while ($i < 5); // Imprime "01234"

        echo "\n";

        for ($x = 0; $x < 10; $x++) {
            echo $x;
        } // Imprime "0123456789"

        echo "\n";

        $rodas = ['bicicleta' => 2, 'carro' => 4];

        // Repetições foreach podem iterar sobre arrays
        foreach ($rodas as $contador_rodas) {
            echo $contador_rodas;
        } // Imprime "24"

        echo "\n";

        // pode iterar tanto chave quanto valores
        foreach ($rodas as $veiculo => $contador_rodas) {
            echo "O $veiculo tem $contador_rodas rodas";
        }

        echo "\n";

        $i = 0;
        while ($i < 5) {
            if ($i === 3) {
                break; // Sai da repetição
            }
            echo $i++;
        } // Imprime "012"

        for ($i = 0; $i < 5; $i++) {
            if ($i === 3) {
                continue; // Ignora esta iteração da repetição
            }
            echo $i;
        } // Imprime "0124"



        $carro = array("rodas" => 4,"placa" => 'ABC1234');

        $rodas = &$carro['rodas'];
    
        foreach($carro as $prop ){
            echo $prop.",";
        }
    
        $carro['rodas'] = 6;
    
    
        print "$rodas";
    
        print_r($carro);
    
        $rodas = 4;
    
        print_r($carro);

        ?>
</body>
</html>

        