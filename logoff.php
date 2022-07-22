<?php
    // session_start();
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';
    //remover indices do array de sessão
    //unset()
    // unset($_SESSION['x']);

    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';

    //destruir a variável de sessão
    //session_destroy() remove todos os indices

    // session_destroy($_SESSION);
    // echo '<pre>';
    // print_r($_SESSION);
    // echo '</pre>';
    session_destroy();
    header('Location: index.php');
?>