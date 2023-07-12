<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    //false (true/false) - tipo variável boolean
    //null e empty - valores especiais

    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;
    
    //valores null
    if(is_null($funcionario1)){
        echo 'Sim, a varíavel é null';
    } else {
        echo 'Não, a varíavel não é null';
    }

    echo '<br>';

    if(is_null($funcionario2)){
        echo 'Sim, a varíavel está null';
    } else {
        echo 'Não, a varíavel não é null';
    }

    echo '<br>';

    if(is_null($funcionario3)){
        echo 'Sim, a varíavel está null';
    } else {
        echo 'Não, a varíavel não é null';
    }

    echo '<br>';

     //valores vazios
     if(empty($funcionario1)){
        echo 'Sim, a varíavel está vazia';
    } else {
        echo 'Não, a varíavel não está vazia';
    }

    echo '<br>';

    if(empty($funcionario2)){
        echo 'Sim, a varíavel está vazia';
    } else {
        echo 'Não, a varíavel não está vazia';
    }

    echo '<br>';

    if(empty($funcionario3)){
        echo 'Sim, a varíavel está vazia';
    } else {
        echo 'Não, a varíavel não está vazia';
    }

    ?>


</body>

</html>