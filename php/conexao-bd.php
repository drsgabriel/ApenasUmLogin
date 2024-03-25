<?php
    $hostname = "localhost";
    $bancodedados = "apenasumlogin";
    $usuario = "root";
    $senha = "";

    // Cria a conexão
    $conn = new mysqli($hostname, $usuario, $senha, $bancodedados);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    } else {
        echo "Conexão bem sucedida!";
    }
?>
