<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    /*
    while(condicao) {

    }

    do {

    } while();
    */

    for($x = 10; true ; $x--) {

        if($x == 0) {
            break;
        }
        echo "X = $x <br>";
    }

    ?>

</body>

</html>