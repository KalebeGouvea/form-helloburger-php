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
        $_SESSION['nome'] = $data;
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
        $_SESSION['snome'] = $data;
        return true;
    }
}

//Valida email
function validaEmail($data) : bool 
{
    if (empty($data)) {
        setarMensagemErro('emailErr','- Email é necessário');
        return false;
    }
    elseif (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
        setarMensagemErro('emailErr','- Formato de email inválido');
        return false;
    }
    else {
        unset($_SESSION['emailErr']);
        $_SESSION['email'] = $data;
        return true;
    }
}

//Valida senha
function validaSenha ($data) : bool 
{
    if (empty($data)) {
        setarMensagemErro('pwdErr','- Senha é necessária');
        return false;
    }
    elseif (strlen($data) < 6) {
        setarMensagemErro('pwdErr','- Sua senha deve conter no mínimo 6 caracteres!');
        return false;
    }
    elseif (strlen($data) > 30) {
        setarMensagemErro('pwdErr','- Sua senha deve conter no máximo 30 caracteres!');
        return false;
    }
    elseif (!preg_match("#[0-9]+#",$data)) {
        setarMensagemErro('pwdErr','- Sua senha deve conter no mínimo uma letra maiúscula, uma letra minúscula e um número!');
        return false;
    }
    elseif (!preg_match("#[A-Z]+#",$data)) {
        setarMensagemErro('pwdErr','- Sua senha deve conter no mínimo uma letra maiúscula, uma letra minúscula e um número!');
        return false;
    }
    elseif (!preg_match("#[a-z]+#",$data)) {
        setarMensagemErro('pwdErr','- Sua senha deve conter no mínimo uma letra maiúscula, uma letra minúscula e um número!');
        return false;
    }
    else {
        unset($_SESSION['pwdErr']);
        return true;
    }
}

//Valida telefone
function validaTelefone ($data) : bool
{
    if (empty($data)) {
        setarMensagemErro('foneErr','- Número de telefone é necessário');
        return false;
    }
    elseif (!preg_match("/\(?\d{2}\)?\s?\d{5}\-?\d{4}/",$data)) {
        setarMensagemErro('foneErr','- Número de telefone inválido');
        return false;
    }
    else {
        unset($_SESSION['foneErr']);
        $_SESSION['fone'] = $data;
        return true;
    }
}

//Valida nascimento
function validaNascimento($data)
{
    if (empty($data)) {
        setarMensagemErro('bdayErr','- Data de nascimento é necessária');
        return false;
    }
    // data é menor que 8
    if ( strlen($data) < 8){
        setarMensagemErro('bdayErr','- Data de nascimento inválida');
        return false;
    }
    else{
        // verifica se a data possui
        // a barra (/) de separação
        if(strpos($data, "/") !== FALSE){
            //
            $partes = explode("/", $data);
            // pega o dia da data
            $dia = $partes[0];
            // pega o mês da data
            $mes = $partes[1];
            // prevenindo Notice: Undefined offset: 2
            // caso informe data com uma única barra (/)
            $ano = isset($partes[2]) ? $partes[2] : 0;
 
            if (strlen($ano) < 4) {
                setarMensagemErro('bdayErr','- Data de nascimento inválida');
                return false;
            } 
            else {
                // verifica se a data é válida
                if (checkdate($mes, $dia, $ano)) {
                    unset($_SESSION['bdayErr']);
                    $_SESSION['bday'] = $data;
                     return true;
                } 
                else {
                    setarMensagemErro('bdayErr','- Data de nascimento inválida');
                     return false;
                }
            }
        }
        else{
            setarMensagemErro('bdayErr','- Data de nascimento inválida');
            return false;
        }
    }
}

//Valida sexo
function validaSexo ($data) : bool
{
    if (empty($data)) {
        setarMensagemErro('sexErr','- Sexo é necessário');
        return false;
    }
    else {
        unset($_SESSION['sexErr']);
        $_SESSION['sex'] = $data;
        return true;
    }
}

//Valida endereço
function validaEndereco($data) : bool 
{
    if (empty($data)) {
        setarMensagemErro('endErr','- Endereço é necessário');
        return false;
    }
    elseif (strlen($data) > 100) {
        setarMensagemErro('endErr','- Endereço deve ser inferior a 100 caracteres');
        return false;
    }
    else {
        unset($_SESSION['endErr']);
        $_SESSION['end'] = $data;
        return true;
    }
}

//Valida estado
function validaEstado ($data) : bool
{
    if (empty($data)) {
        setarMensagemErro('estadoErr','- Estado é necessário');
        return false;
    }
    else {
        unset($_SESSION['estadoErr']);
        $_SESSION['estado'] = $data;
        return true;
    }
}

//Valida cidade
function validaCidade ($data) : bool
{
    if (empty($data)) {
        setarMensagemErro('cidadeErr','- Cidade é necessária');
        return false;
    }
    else {
        unset($_SESSION['cidadeErr']);
        $_SESSION['cidade'] = $data;
        return true;
    }
}

//Valida ofertas
function validaOfertas ($data) : bool
{
    if (empty($data)) {
        setarMensagemErro('ofertasErr','- O campo ofertas é necessário');
        return false;
    }
    else {
        unset($_SESSION['ofertasErr']);
        $_SESSION['ofertas'] = $data;
        return true;
    }
}

//Verifica se email existe
function verificaEmail ($data) : bool
{
    $stmt = $GLOBALS['conn']->prepare("SELECT email FROM clientes WHERE email = :email");
    $stmt->bindParam(':email', $data);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        setarMensagemErro('verEmailErr','- O email informado já foi cadastrado');
        return false;
    } 
    else {
        return true;
    }
}