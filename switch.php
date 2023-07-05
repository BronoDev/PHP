<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    $parametro = 6;

    switch ($parametro) {
        case 1:
            echo 'Entrou no case 1';
            break;

        case 2:
            echo 'Entrou no case 2';
            break;

        case 3:
            echo 'Entrou no case 3';
            break;

        default:
            echo 'Entrou no default';
            break;
    }

    ?>

</body>

</html>