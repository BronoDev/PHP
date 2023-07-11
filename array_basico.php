<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    //sequenciais (numéricos)
    //$lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva', 'Abacate');
    
    /*
    $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva', 'Abacate'];
    $lista_frutas[] = 'Abacaxi';


    
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';
    echo '<hr/>';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';
   

    echo $lista_frutas[2];
    */

    //associativos
    $lista_frutas = array('a' => 'Banana','b' => 'Maça','x' => 'Morango','z' => 'Uva','2' => 'Abacate');
    
    $lista_frutas['w'] = 'abacaxi';
    echo '<pre>';
    var_dump($lista_frutas);
    echo '</pre>';

    
    echo $lista_frutas['w']
    ?>

</body>

</html>