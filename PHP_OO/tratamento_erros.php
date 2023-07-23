<?php

    //tenha uma lógica
    try {

        //tenha uma lógica onde possa ocorrer um potencial erro (exceção)
        echo '<h3> *** Try *** </h3><br>';

        //$sql = 'Select * from clientes';
        //mysql_query($sql); //Erro

        if (!file_exists ('require_arquivo_a.php')) {
            throw new Exception('O Arquivo em questão deveria estar disponivel as' . date('d/m/Y H:i:s') . ' horas mas não estava. Vamos seguir mesmo assim!');
        } else {

        }

    } catch (Error $e) {
        echo '<h3> *** Catch Error *** </h3><br>';
        echo '<p style="color: red">' . $e . '</p>';
        //armazenando esse erro em banco de dados
    } catch(Exception $e) {
        echo '<h3> *** Catch Exception *** </h3><br>';
        echo '<p style="color: red">' . $e . '</p>';
    } finally {
        echo '<h3> *** Finally *** </h3>';
    }

    //tenha uma lógica
    /*
    try {

          //tenha uma lógica onde possa ocorrer um potencial erro (exceção)


    }
    */


?>