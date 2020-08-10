<?php

//Filtra o input com caracteres especiais
function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

//Valida nome
function validaNome($data) : bool
{
    if (empty($data)) {
        setarMensagemErro('nomeErr','- Nome é necessário');
        return false;
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/",$data)) {
        setarMensagemErro('nomeErr','- O nome deve conter apenas letras e espaços');
        return false;
    }
    elseif (strlen($data) > 20) {
        setarMensagemErro('nomeErr','- Nome deve ser inferior a 20 caracteres');
        return false;
    }
    else {
        unset($_SESSION['nomeErr']);
        return true;
    }
}

//Valida sobrenome
function validaSobrenome($data) : bool
{
    if (empty($data)) {
        setarMensagemErro('snomeErr','- Sobrenome é necessário');
        return false;
    }
    elseif (!preg_match("/^[a-zA-Z ]*$/",$data)) {
        setarMensagemErro('snomeErr','- O sobrenome deve conter apenas letras e espaços');
        return false;
    }
    elseif (strlen($data) > 20) {
        setarMensagemErro('snomeErr','- Sobrenome deve ser inferior a 20 caracteres');
        return false;
    }
    else {
        unset($_SESSION['snomeErr']);
        return true;
    }
}