<?php
require "../../../database/models/user_model.php";

$cpf = $_GET['cpf'];

$worked = DESTROY_USER($cpf);

if (!$worked) {
    echo "Falha ao deletar o usuário";
} else {
    echo "SUCESSO!";
}