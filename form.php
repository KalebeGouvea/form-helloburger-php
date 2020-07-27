<?php

session_start();
// Inicio da validação das variáveis POST
//$nome = $snome = $email = $pwd = $fone = $bday = $sex = $end = $estado = $cidade = $ofertas = "";
//$nomeErr = $snomeErr = $emailErr = $pwdErr = $foneErr = $bdayErr = $sexErr = $endErr = $estadoErr = $cidadeErr = $ofertasErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Validar nome
  if (empty($_POST["nome"])) {
    $erro['nomeErr'] = "Nome é necessário";
  } 
  else {
    $_SESSION['nome'] = test_input($_POST["nome"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$_SESSION['nome'])) {
      $erro['nomeErr'] = "O nome deve conter apenas letras e espaços";
    }
  }
//Validar sobrenome
  if (empty($_POST["snome"])) {
    $erro['snomeErr'] = "Sobrenome é necessário";
  } 
  else {
    $_SESSION['snome'] = test_input($_POST["snome"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$_SESSION['snome'])) {
      $erro['snomeErr'] = "O sobrenome deve conter apenas letras e espaços";
    }
  }
//Validar email
  if (empty($_POST["email"])) {
    $erro['emailErr'] = "Email é necessário";
  } 
  else {
    $_SESSION['email'] = test_input($_POST["email"]);
    if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
      $erro['emailErr'] = "Formato de email inválido";
    }
  }
//Validar senha
  if (empty($_POST["pwd"])) {
    $erro['pwdErr'] = "Senha é necessária";
  }
  else {
    $_SESSION['pwd'] = test_input($_POST["pwd"]);
    if (strlen($_POST["pwd"]) < 6) {
      $erro['pwdErr'] = "Sua senha deve conter no mínimo 6 caracteres!";
    }
    elseif(!preg_match("#[0-9]+#",$_SESSION['pwd'])) {
      $erro['pwdErr'] = "Sua senha deve conter no mínimo 1 número!";
    }
    elseif(!preg_match("#[A-Z]+#",$_SESSION['pwd'])) {
      $erro['pwdErr'] = "Sua senha deve conter no mínimo 1 letra maiúscula!";
    }
    elseif(!preg_match("#[a-z]+#",$_SESSION['pwd'])) {
      $erro['pwdErr'] = "Sua senha deve conter no mínimo 1 letra minúscula!";
    }
  }
//Validar telefone
  if (empty($_POST["fone"])) {
    $erro['foneErr'] = "Número de telefone é necessário";
  } 
  else {
    $_SESSION['fone'] = test_input($_POST["fone"]);
    if (!preg_match("/\(?\d{2}\)?\s?\d{5}\-?\d{4}/",$_SESSION['fone'])) {
      $erro['foneErr'] = "Número de telefone inválido";
    }
  }
//Validar nascimento
  if (empty($_POST["bday"])) {
    $erro['bdayErr'] = "Data de nascimento é necessária";
  }
  else {
    $_SESSION['bday'] = test_input($_POST["bday"]);
    $_SESSION['bday'] = date("d/m/Y", strtotime($_SESSION['bday']));
    if (strlen($_SESSION['bday']) < 8) {
      $erro['bdayErr'] = "Data de nascimento inválida";
    }
    else{
      // verifica se a data possui
      // a barra (/) de separação
      if(strpos($_SESSION['bday'], "/") !== FALSE){
          //
          $partes = explode("/", $_SESSION['bday']);
          // pega o dia da data
          $dia = $partes[0];
          // pega o mês da data
          $mes = $partes[1];
          // prevenindo Notice: Undefined offset: 2
          // caso informe data com uma única barra (/)
          $ano = isset($partes[2]) ? $partes[2] : 0;

          if (strlen($ano) < 4) {
            $erro['bdayErr'] = "Data de nascimento inválida";
          } 
          else {
              // verifica se a data é válida
              if (!checkdate($mes, $dia, $ano)) {
                $erro['bdayErr'] = "Data de nascimento inválida";
              }
          }
      }
      else{
        $erro['bdayErr'] = "Data de nascimento inválida";
      }
    }
  }
//Validar sexo
  if (empty($_POST["sex"])) {
    $erro['sexErr'] = "Sexo é necessário";
  } 
  else {
    $_SESSION['sex'] = test_input($_POST["sex"]);
  }
//Validar endereço
  if (empty($_POST["end"])) {
    $erro['endErr'] = "Endereço é necessário";
  } 
  else {
    $_SESSION['end'] = test_input($_POST["end"]);
  }
//Validar estado
  if (empty($_POST["estado"])) {
    $erro['estadoErr'] = "Estado é necessário";
  }
  else {
    $_SESSION['estado'] = test_input($_POST["estado"]);
  }
//Validar cidade
  if (empty($_POST["cidade"])) {
    $erro['cidadeErr'] = "Cidade é necessária";
  } 
  else {
    $_SESSION['cidade'] = test_input($_POST["cidade"]);
  }
//Validar ofertas
  if (empty($_POST["ofertas"])) {
    $erro['ofertasErr'] = "O campo ofertas é necessário";
  } 
  else {
    $_SESSION['ofertas'] = test_input($_POST["ofertas"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$msg = "";
if (isset($erro)){
  foreach ($erro as $x => $x_valor) {
    $msg = $msg .$x_valor. "\\n";
  }
  echo "<script>alert('$msg');window.location = 'index.php';</script>";
}

// Fim da validação das variáveis POST