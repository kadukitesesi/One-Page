<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$telefone =  addcslashes($_POST['telefone']);
$mensagem = addcslashes($_POST['mensagem']);


$to = "kadukitesesi@gmail.com";
$subject = "Contato - site";
$body = "Nome: ".$nome."\r\n".
        "E-mail: ".$email."\r\n".
        "Telefone: ".$telefone."\r\n".
        "Mensagem: ".$mensagem;
$header = "From:kadukityye@gmail.com"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

}

?>