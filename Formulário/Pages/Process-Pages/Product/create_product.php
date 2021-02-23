<?php
require "../../../database/models/product_model.php";

$user = $_POST['usuario'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$produtora = $_POST['produtora'];
$dataLancamento = $_POST['dataLancamento'];

$worked = CREATE_PRODUCT($user, $nome, $descricao, $preco, $produtora, $dataLancamento);

if (!$worked) {
    echo "Erro ao inserir o produto";
} else {
    echo "SUCESSO ao inserir!";
}