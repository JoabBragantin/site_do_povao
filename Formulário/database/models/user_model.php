<?php

//Em andamento

function CREATE_USER ($cpf, $nome, $email, $senha, $sexo, $estado, $dataNascimento) {
    $command = "INSERT INTO (cpf, nome, email, senha, sexo, estado, dataNascimento) 
    VALUES ($cpf, '$nome', '$email', '$senha', '$sexo', '$estado', $dataNascimento)";
}