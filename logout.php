<?php
    session_start();
    //deletar a variavel da sessao
    unset($_SESSION['logado']);
    //finalizar a sessão
    session_destroy();
    sleep(2); //2 segundos
    header("location:index.php");
?>