<?php
//Arquivo com a mesma finalidade do form.php, apenas reescrito.

session_start();
include 'servicos/servicoValidacao.php';

$nome = test_input($_POST['nome']);
$snome = test_input($_POST['snome']);
$email = test_input($_POST['email']);
$pwd = test_input($_POST['pwd']);
$fone = test_input($_POST['fone']);
$bday = test_input($_POST['bday']);
$sex = test_input($_POST['sex']);
$end = test_input($_POST['end']);
$estado = test_input($_POST['estado']);
$cidade = test_input($_POST['cidade']);
$ofertas = test_input($_POST['ofertas']);


