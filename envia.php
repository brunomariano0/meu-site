<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $destino = "brunomariano802@gmail.com";
    $contato = "Orçamento - Site Bruno Mariano";

    $corpo = "Nome: ".$nome."\n"."E-mail:".$email."\n"."Telefone:".$telefone;

    $cabeca = "From: brunopmariano@outlook.com"."\n"."Reply-to:".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino, $contato, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso!");
    }else {
        echo("Houve um erro ao enviar o email!");
    }
?>