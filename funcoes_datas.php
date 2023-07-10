<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>

<body>

   <?php
/*
    //recuperação da data atual / data corrente
    echo date('d/m/Y H:i');

    //
    echo '<br/>';
    echo date_default_timezone_get();
    echo '<br/>';
    echo date_default_timezone_set('America/Sao_Paulo');
    echo '<br/>';
    echo date('d/m/Y H:i');
*/

    $data_inicial = '2018-04-24';
    $data_final = '2018-05-15';

    //timestamp
    //01/01/1970 -- 2018-04-24 (js->milissegundos / php->segundos)
    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);

    echo $data_inicial . ' - ' . $time_inicial;
    echo '<br/>';
    echo $data_final . ' - ' . $time_final;

    $diferenca_times = $time_final - $time_inicial; //abs

    echo '<br/>';
    echo 'A diferença de segundos entre a data inicial e final é ' . $diferenca_times;
 
    $segundos_existem_dia = 24 * 60 * 60;

    echo '<br/>';
    echo 'Um dia possui ' . $segundos_existem_dia . ' segundos.';

    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

    echo '<br/>';
    echo 'A diferença em dias é: ' . $diferenca_de_dias_entre_as_datas;

   ?>

</body>

</html>