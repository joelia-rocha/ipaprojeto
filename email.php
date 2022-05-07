<?php

if(isset($post['email']) && !empty($post['email'])){
$nome = addslashes($post['name']);
$email = addslashes($post['email']);
$mensagem = addslashes($post['message']);

$to = "joeliarocha00@gmail.com";
$subject = "IPA";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n". 
        "Mensagem:".$mensagem;
$header = "From: joeliarochajrs00@gmail.com"."\r\n".
           "Reply-To:".$email."\r\n".
           "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("O email não foi enviado!");
}
}

?>