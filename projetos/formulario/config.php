<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-adriel';

    $conexao = new mysqli ($dbHost, $dbUsername, $dbPassword, $dbName);

    if($conexao->connect_errno) {
        echo "erro";
    }
    else {
        echo "Conexão efetuada com sucesso";
    }
?>