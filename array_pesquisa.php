<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    //in_array() -> true ou false para existencia do que está sendo procurado
    //array_search() -> retorna o índice do valor pesquisado, caso ele exista

    $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];
    /*
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    //$existe = in_array('Morango', $lista_frutas);
    // true -> texto = 1
    // false -> texto = vazio
    $existe = array_search('Abacaxi', $lista_frutas);
    //null -> texto = vazio

    
    if($existe != null) {
        echo 'Sim, o valor pesquisado existe no array';
    } else {
        echo 'Não, o valor pesquisado não existe no array';
    }
    */

    $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['João', 'Maria']
    ];

    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

    echo in_array('João', $lista_coisas)

    ?>


</body>

</html>