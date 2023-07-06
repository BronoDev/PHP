<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

    <?php

    //void = Sem retorno
    function exibirBoasVindas()
    {
        echo "Bem-vindo ao curso de PHP!<br/>";
    }

    exibirBoasVindas();


    //return *(com retorno)
    function calcularAreaTerreno($largura, $comprimento)
    {
        $area = $largura * $comprimento;
        return $area;
    }

    $resultado = calcularAreaTerreno(30, 50);
    echo $resultado;
   
    ?>

</body>

</html>