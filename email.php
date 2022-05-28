<?php
error_reporting(E_ALL ^ E_NOTICE);
$para = "luismfaceit01@gmail.com";
$email = $_POST['assunt'];
$nome = $_POST['nome'];
$msg = $_POST['msg'];
$verificar = $_POST['assunt'] && $_POST['nome'] && $_POST['msg'];
$headers = "From:luismfaceit01@gmail.com";
if(empty($verificar)){
    echo "";
}else{
    $envio = mail($para, $nome, $email,$msg, $headers);
    if($envio){
        echo "Email enviado  ;)";
    }
    else{
        echo "Falha no envio :(";
    }
}

?>