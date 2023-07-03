<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $nome = 'Jorge';
    $cor = 'verde';
    $idade = 29;
    $atividade_preferida = 'joga games';

    //operador .

    echo 'Olá ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você possui ' . $idade . ' anos e que gosta de ' . $atividade_preferida;

    //aspas duplas
    echo '<br/>';

    echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade  anos e que gosta de $atividade_preferida";
    ?>

</body>

</html>