<?php

$stmt = $conn->prepare("INSERT INTO clientes (nome, sobrenome, email, senha, telefone, data_nascimento, sexo, endereco, estado, cidade, aceita_ofertas) VALUES (:nome, :sobrenome, :email, :senha, :telefone, :data_nascimento, :sexo, :endereco, :estado, :cidade, :aceita_ofertas)");

$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':sobrenome', $snome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $pwd);
$stmt->bindParam(':telefone', $fone);
$stmt->bindParam(':data_nascimento', $bday);
$stmt->bindParam(':sexo', $sex);
$stmt->bindParam(':endereco', $end);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':aceita_ofertas', $ofertas);

if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso";
  } else {
    echo "Erro ao cadastrar";
  }