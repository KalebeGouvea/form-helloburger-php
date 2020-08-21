<?php

$stmt = $conn->prepare("SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'");
$stmt->execute();

if($stmt->rowCount() > 0){
    $_SESSION['showModal'] = false;
    header("Location: home.php");
} 
else {
    $_SESSION['showModal'] = true;
    setarMensagemErro('logErr','- Email ou senha incorretos');
    retornaMensagemErro();
    header("Location: index.php");
}