<?php

require_once "connection.php";

/*Inserir usuário*/
function CREATE_USER ($cpf, $nome, $email, $senha, $sexo, $estado, $dataNascimento) {
    $command = "INSERT INTO user(cpf, nome, email, senha, sexo, estado, dataNascimento) 
    VALUES ($cpf, '$nome', '$email', '$senha', '$sexo', '$estado', '$dataNascimento')";

    $worked = mysqli_query(con(), $command);
    
    return $worked;
}

/*Listar todos os usuários*/
function SHOW_USERS () {
    $command = "SELECT * FROM user";
    $worked = mysqli_query(con(), $command);

    $users = array();

    while ($row = mysqli_fetch_assoc($worked)) {
        $users[] = $row;
    }

    return $users;
}

/*Detalhar um usuário*/
function SHOW_USER ($cpf) {
    $command = "SELECT * FROM user WHERE cpf = $cpf";
    $worked = mysqli_query(con(), $command);
    $row = mysqli_fetch_assoc($worked);

    return $row;
}

/*Atualizar usuário*/
function UPDATE_USER ($cpf, $nome, $email, $senha, $sexo, $estado, $dataNascimento) {
    $command = "UPDATE user SET nome='$nome', email='$email', senha='$senha', sexo='$sexo',
    estado='$estado', dataNascimento=$dataNascimento WHERE cpf=$cpf";

    $worked = mysqli_query(con(), $command);

    return $worked;
}

/*Deletar usuário*/
function DESTROY_USER ($cpf) {
    $command = "DELETE FROM user WHERE cpf=$cpf";
    $worked = mysqli_query(con(), $command);

    return $worked;
}