<?php

// Inicio da validação das variáveis POST
$nome = $snome = $email = $pwd = $fone = $bday = $sex = $end = $estado = $cidade = $ofertas = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nome"]);
  $snome = test_input($_POST["snome"]);
  $email = test_input($_POST["email"]);
  $pwd = test_input($_POST["pwd"]);
  $fone = test_input($_POST["fone"]);
  $bday = test_input($_POST["bday"]);
  $sex = test_input($_POST["sex"]);
  $end = test_input($_POST["end"]);
  $estado = test_input($_POST["estado"]);
  $cidade = test_input($_POST["cidade"]);
  $ofertas = test_input($_POST["ofertas"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// Fim da validação das variáveis POST

echo $_POST["nome"]. "<br>";
echo $_POST["snome"]. "<br>";
echo $_POST["email"]. "<br>";
echo $_POST["pwd"]. "<br>";
echo $_POST["fone"]. "<br>";
echo $_POST["bday"]. "<br>";
echo $_POST["sex"]. "<br>";
echo $_POST["end"]. "<br>";
echo $_POST["estado"]. "<br>";
echo $_POST["cidade"]. "<br>";
echo $_POST["ofertas"]. "<br>";