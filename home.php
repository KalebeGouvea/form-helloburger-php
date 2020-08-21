<?php
include 'header.php';

if (isset($_COOKIE['nome'])){
    $nome_cookie = $_COOKIE['nome'];
}

if(isset($nome_cookie)){
    echo"<h1>Bem-Vindo, $nome_cookie </h1> <br>";
}else{
    echo"<h1>Bem-Vindo, convidado </h1> <br>";
    echo"Você não pode acessar essas informações.";
    echo"<br><a href='index.php'>Faça Login</a> para ler o conteúdo";
}

include 'footer.php';
?>