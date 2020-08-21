<?php
session_start();
require 'src/connect.php';
include 'servicos/servicoValidacao.php';
include 'servicos/servicoMensagem.php';

$email = test_input($_POST['email']);
$senha = test_input($_POST['pwd']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'src/read.php';
}