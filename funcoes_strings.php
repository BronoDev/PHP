<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php
   
    $texto = 'Curso Completo de PHP';

    //string to lower
    echo $texto . '<br/>';
    echo strtolower($texto);
    echo '<hr/>';
    //sting to upper
    echo $texto . '<br/>';
    echo strtoupper($texto);
    echo '<hr/>';
    //upper case first
    echo $texto . '<br/>';
    echo ucfirst($texto);
    echo '<hr/>';
    //string length
    echo $texto . '<br/>';
    echo strlen($texto);
    echo '<hr/>';
    //string replace
    echo $texto . '<br/>';
    echo str_replace('.', ',', '250.50');
    echo '<hr/>';
    //string replace
    echo $texto . '<br/>';
    //'Curso Completo de PHP'
    echo substr($texto, 0, 14) . '...';
    ?>

</body>

</html>