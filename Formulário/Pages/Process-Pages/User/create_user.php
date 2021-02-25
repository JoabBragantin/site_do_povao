<?php
require "../../../database/models/user_model.php";

$cpf = $_POST['cpf'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$sexo = $_POST['textSexo'];
$estado = $_POST['estados'];
$dataNascimento = $_POST['dataNascimento'];

$worked = CREATE_USER($cpf, $nome, $email, $senha, $sexo, $estado, $dataNascimento);

if (!$worked) {
    echo "Erro ao inserir o usuário";
} else {
    header('Location: ../../form.html');
    exit();
}