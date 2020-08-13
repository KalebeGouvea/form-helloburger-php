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
    if (isset($_SESSION['emailErr'])) {
        $msg = $msg. "<span>".$_SESSION['emailErr']."</span><br>";
    }
    if (isset($_SESSION['pwdErr'])) {
        $msg = $msg. "<span>".$_SESSION['pwdErr']."</span><br>";
    }
    if (isset($_SESSION['foneErr'])) {
        $msg = $msg. "<span>".$_SESSION['foneErr']."</span><br>";
    }
    if (isset($_SESSION['bdayErr'])) {
        $msg = $msg. "<span>".$_SESSION['bdayErr']."</span><br>";
    }
    if (isset($_SESSION['sexErr'])) {
        $msg = $msg. "<span>".$_SESSION['sexErr']."</span><br>";
    }
    if (isset($_SESSION['endErr'])) {
        $msg = $msg. "<span>".$_SESSION['endErr']."</span><br>";
    }
    if (isset($_SESSION['estadoErr'])) {
        $msg = $msg. "<span>".$_SESSION['estadoErr']."</span><br>";
    }
    if (isset($_SESSION['cidadeErr'])) {
        $msg = $msg. "<span>".$_SESSION['cidadeErr']."</span><br>";
    }
    if (isset($_SESSION['ofertasErr'])) {
        $msg = $msg. "<span>".$_SESSION['ofertasErr']."</span><br>";
    }
    $_SESSION['msg'] = $msg;
}