<?php

// Inicio da validação das variáveis POST
$nome = $snome = $email = $pwd = $fone = $bday = $sex = $end = $estado = $cidade = $ofertas = "";
$nomeErr = $snomeErr = $emailErr = $pwdErr = $foneErr = $bdayErr = $sexErr = $endErr = $estadoErr = $cidadeErr = $ofertasErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Validar nome
  if (empty($_POST["nome"])) {
    $nomeErr = "Nome é necessário";
  } 
  else {
    $nome = test_input($_POST["nome"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$nome)) {
      $nomeErr = "O nome deve conter apenas letras e espaços";
    }
  }
//Validar sobrenome
  if (empty($_POST["snome"])) {
    $snomeErr = "Sobrenome é necessário";
  } 
  else {
    $snome = test_input($_POST["snome"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$snome)) {
      $snomeErr = "O sobrenome deve conter apenas letras e espaços";
    }
  }
//Validar email
  if (empty($_POST["email"])) {
    $emailErr = "Email é necessário";
  } 
  else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Formato de email inválido";
    }
  }
//Validar senha
  if (empty($_POST["pwd"])) {
    $pwdErr = "Senha é necessária";
  }
  else {
    $pwd = test_input($_POST["pwd"]);
    if (strlen($_POST["pwd"]) < 6) {
      $pwdErr = "Sua senha deve conter no mínimo 6 caracteres!";
    }
    elseif(!preg_match("#[0-9]+#",$pwd)) {
      $pwdErr = "Sua senha deve conter no mínimo 1 número!";
    }
    elseif(!preg_match("#[A-Z]+#",$pwd)) {
      $pwdErr = "Sua senha deve conter no mínimo 1 letra maiúscula!";
    }
    elseif(!preg_match("#[a-z]+#",$pwd)) {
      $pwdErr = "Sua senha deve conter no mínimo 1 letra minúscula!";
    }
  }
//Validar telefone
  if (empty($_POST["fone"])) {
    $foneErr = "Número de telefone é necessário";
  } 
  else {
    $fone = test_input($_POST["fone"]);
    if (!preg_match("/\(?\d{2}\)?\s?\d{5}\-?\d{4}/",$fone)) {
      $foneErr = "Número de telefone inválido";
    }
  }
//Validar nascimento
  if (empty($_POST["bday"])) {
    $bdayErr = "Data de nascimento é necessária";
  }
  else {
    $bday = test_input($_POST["bday"]);
    $bday = date("d/m/Y", strtotime($bday));
    if (strlen($bday) < 8) {
      $bdayErr = "Data de nascimento inválida";
    }
    else{
      // verifica se a data possui
      // a barra (/) de separação
      if(strpos($bday, "/") !== FALSE){
          //
          $partes = explode("/", $bday);
          // pega o dia da data
          $dia = $partes[0];
          // pega o mês da data
          $mes = $partes[1];
          // prevenindo Notice: Undefined offset: 2
          // caso informe data com uma única barra (/)
          $ano = isset($partes[2]) ? $partes[2] : 0;

          if (strlen($ano) < 4) {
            $bdayErr = "Data de nascimento inválida";
          } 
          else {
              // verifica se a data é válida
              if (!checkdate($mes, $dia, $ano)) {
                $bdayErr = "Data de nascimento inválida";
              }
          }
      }
      else{
        $bdayErr = "Data de nascimento inválida";
      }
    }
  }
//Validar sexo
  if (empty($_POST["sex"])) {
    $sexErr = "Sexo é necessário";
  } 
  else {
    $sex = test_input($_POST["sex"]);
  }
//Validar endereço
  if (empty($_POST["end"])) {
    $sexErr = "Endereço é necessário";
  } 
  else {
    $end = test_input($_POST["end"]);
  }
//Validar estado
  if (empty($_POST["estado"])) {
    $estadoErr = "Estado é necessário";
  }
  else {
    $estado = test_input($_POST["estado"]);
  }
//Validar cidade
  if (empty($_POST["cidade"])) {
    $cidadeErr = "Cidade é necessária";
  } 
  else {
    $cidade = test_input($_POST["cidade"]);
  }
//Validar ofertas
  if (empty($_POST["end"])) {
    $ofertasErr = "O campo ofertas é necessário";
  } 
  else {
    $ofertas = test_input($_POST["ofertas"]);
  }

}

if (isset($nomeErr)) {
  echo "<script>alert('$nomeErr\\n$snomeErr\\n$emailErr\\n$pwdErr\\n$foneErr\\n$bdayErr\\n$sexErr\\n$endErr\\n$estadoErr\\n$cidadeErr\\n$ofertasErr');</script>";
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// Fim da validação das variáveis POST

echo $nome. "<br>";
echo $snome. "<br>";
echo $email. "<br>";
echo $pwd. "<br>";
echo $fone. "<br>";
echo $bday. "<br>";
echo $sex. "<br>";
echo $end. "<br>";
echo $estado. "<br>";
echo $cidade. "<br>";
echo $ofertas. "<br>";