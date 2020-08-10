<?php
//Seta a mensagem de erro
function setarMensagemErro ($arr, $msg)
{
    $_SESSION[$arr] = $msg;//SESSION?
}

//Retorna a mensagem de erro devidamente formatada para o modal no HTML
function retornaMensagemErro()
{
   //Montar função que retorne todos os SESSIONS formatados para o Modal
    $msg = '';
    if (isset($_SESSION['nomeErr'])) {
        $msg = $msg. "<span>".$_SESSION['nomeErr']."</span><br>";
    }
    if (isset($_SESSION['snomeErr'])) {
        $msg = $msg. "<span>".$_SESSION['snomeErr']."</span><br>";
    }
    $_SESSION['msg'] = $msg;
}