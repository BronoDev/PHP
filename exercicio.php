<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>
    <?php

    $idade = 60;
    $peso = 50;

    if (($idade >= 16 && $idade <= 60) && $peso >= 50) {
        echo 'pode doar';
    } else{
        echo 'Não pode doar';
    }
    ?>
</body>

</html>