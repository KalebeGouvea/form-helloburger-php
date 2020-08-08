<?php

//Seta a mensagem de erro
function setarMensagemErro ($nome, $msg)
{
    $erro[$nome] = $msg;//SESSION?
}

//Retorna a mensagem de erro devidamente formatada para o modal no HTML
function retornaMensagemErro()
{
    if (isset($erro)){
        foreach ($erro as $x => $x_valor) {
            $msg = $msg. "<span>$x_valor.</span><br>";
        }
        return $msg;
    }
    else {
        return null;
    }
}