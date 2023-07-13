<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    $registros = array(
        array('Titulo' => 'Título notícia 1', 'conteudo' => 'Conteudo notícia 1'),
        array('Titulo' => 'Título notícia 2', 'conteudo' => 'Conteudo notícia 2'),
        array('Titulo' => 'Título notícia 3', 'conteudo' => 'Conteudo notícia 3'),
        array('Titulo' => 'Título notícia 4', 'conteudo' => 'Conteudo notícia 4')
    );

    echo '<pre>';
    print_r($registros);
    echo '</pre>';
    echo '<br>';


    //count -> conta a quantidade de elementos de array
    echo 'O array possui: ' . count($registros) . ' registros';
    echo '<br>';

    /*
    while ($idx < count($registros)) {

        echo '<h3>' . $registros[$idx]['Titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr>';

        $idx++;
    }
    */

    /*
    do{
        echo '<h3>' . $registros[$idx]['Titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr>';

        $idx++;

    } while ($idx < count($registros));
    */

    for ($idx = 0; $idx < count($registros); $idx++) {
        echo '<h3>' . $registros[$idx]['Titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr>';
    }


    ?>
</body>

</html>