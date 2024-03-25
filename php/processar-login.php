<?php

    $login = 'admin';
    $senha = 'admin';

    $loginForm = $_POST['emailTelefone'];
    $senhaForm = $_POST['senha'];

    if($login == $loginForm && $senha == $senhaForm){
        //Logado com sucesso
        echo "Logado com sucesso";
    } else{
        echo "Errou";
    }
?>
