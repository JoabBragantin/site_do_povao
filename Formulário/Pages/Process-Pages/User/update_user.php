<?php
require "../../../database/models/user_model.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sexo = $_POST['sexo'];
$estado = $_POST['estado'];
$dataNascimento = $_POST['dataNascimento'];

$cpf = $_POST['cpf'];

$worked = UPDATE_USER ($cpf, $nome, $email, $senha, $sexo, $estado, $dataNascimento);

if (!$worked) {
    echo "Erro ao atualizar o usuário";
} else {
    echo "SUCESSO!";
}