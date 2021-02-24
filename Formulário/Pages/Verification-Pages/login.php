<?php
session_start();
include('../../database/models/connection.php');

if (empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../form.html');
    exit();
}

$email = mysqli_real_escape_string(con(), $_POST['email']);
$senha = mysqli_real_escape_string(con(), $_POST['senha']);

$query = "SELECT cpf FROM user WHERE email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query(con(), $query);

$row = mysqli_num_rows($result);
$usuario = mysqli_fetch_assoc($result);

if($row == 1) {
    $_SESSION['usuario.cpf'] = $usuario['cpf'];
    header('Location: #');
    exit();
} else {
    header('Location: ../form.html');
    exit();
}