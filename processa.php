<?php
//Arquivo com a mesma finalidade do form.php, apenas reescrito.
session_start();
require 'src/connect.php';
include 'servicos/servicoValidacao.php';
include 'servicos/servicoMensagem.php';

$nome = test_input($_POST['nome']);
$snome = test_input($_POST['snome']);
$email = test_input($_POST['email']);
$pwd = test_input($_POST['pwd']);
$fone = test_input($_POST['fone']);
$bday = test_input($_POST['bday']);
$sex = isset($_POST['sex']) ? test_input($_POST['sex']) : '';
$end = test_input($_POST['end']);
$estado = test_input($_POST['estado']);
$cidade = test_input($_POST['cidade']);
$ofertas = test_input($_POST['ofertas']);

validaNome($nome);
validaSobrenome($snome);
validaEmail($email);
validaSenha($pwd);
validaTelefone($fone);
validaNascimento($bday);
validaSexo($sex);
validaEndereco($end);
validaEstado($estado);
validaCidade($cidade);
validaOfertas($ofertas);
verificaEmail($email);

retornaMensagemErro();

//Verifica se os campos são válidos
if (validaNome($nome) && validaSobrenome($snome) && validaEmail($email) && validaSenha($pwd) && validaTelefone($fone) && validaNascimento($bday) && validaSexo($sex) && validaEndereco($end) && validaEstado($estado) && validaCidade($cidade) && validaOfertas($ofertas) && verificaEmail($email)) {
    require 'src/insert.php';
    session_unset();
}
//Retorna para o index.php e ativa o modal com as mensagens
else {
    $_SESSION['showModal'] = true;
    header("Location: index.php");
    //echo 'Dados invalidos';
}
