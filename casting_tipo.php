<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>

    <?php
    //gettype() => retorna o tipo da variável

    $valor = true;
    //$valor2 = (float) $valor; //float , double
    //$valor2 = (int) $valor; //int, integer
    //$valor2 = (string) $valor;

    //$valor2 = (bool) $valor; //bool, boolean

    //$valor2 = (int) $valor;

    $valor2 = (string) $valor;
    $valor3 = (int) $valor2;

    echo $valor . ' ' . gettype($valor);
    echo '<br>';
    echo $valor2 . ' ' . gettype($valor2);
    echo '<br>';
    echo $valor3 . ' ' . gettype($valor3);

    ?>
    
</body>
</html>