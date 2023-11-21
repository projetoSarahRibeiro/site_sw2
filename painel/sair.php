<?php
    session_start();

    //para esvaziar uma sessão
     unset(
        $_SESSION['id'], 
        $_SESSION['nome'],
        $_SESSION['email']
     );

     //para voltar ao login
     header("Location:../index.html ");

?>