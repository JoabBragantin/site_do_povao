<?php
require "../../../database/models/product_model.php";

$user = $_POST['usuario'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$produtora = $_POST['produtora'];
$dataLancamento = $_POST['dataLancamento'];

$idProduto = $_POST['idProduto'];

$worked = UPDATE_PRODUCT($idProduto, $nome, $descricao, $preco, $produtora, $dataLancamento);

if (!$worked) {
    echo "Erro ao atualizar o produto";
} else {
    echo "SUCESSO!";
}