<?php
    session_start();

    //variavel verifica se a autenticacao foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuarios_app = [
        ['id'=>1,'email'=>'adm@teste.com.br', 'senha'=>'1234'],
        ['id'=>2,'email' => 'user@teste.com.br', 'senha' => '1234'],
        ['id'=>3,'email' => 'jose@teste.com.br', 'senha' => '1234'],
        ['id'=>4,'email' => 'maria@teste.com.br', 'senha' => '1234'],
        
        
    ];
    // echo '<pre>';
    // print_r($usuarios_app);
    // echo '</pre>';
    foreach($usuarios_app as $user){
        if($user['email'] == $_POST['email'] && $user['senha']==$_POST['senha']){
            $usuario_autenticado = true;
            print_r($user);
        }
    }

    if($usuario_autenticado){
        echo 'Usuário autenticado';
        $_SESSION['autenticado'] = 'SIM';
        $_SESSION['x'] = 'um valor';
        $_SESSION['y'] = 'outro valor';
        // header('Location: home.php');
    }else{
        $_SESSION['autenticado'] = 'NÃO';
        // header('Location: index.php?login=erro');
    }
    
?>