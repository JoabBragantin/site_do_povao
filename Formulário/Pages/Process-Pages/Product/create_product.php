<?php
require "../../../database/models/product_model.php";

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$imagem = $_POST['imagem'];
$preco = $_POST['preco'];
$produtora = $_POST['produtora'];
$dataLancamento = $_POST['dataLancamento'];

$worked = CREATE_PRODUCT($nome, $descricao, $imagem, $preco, $produtora, $dataLancamento);

if (!$worked) {
    echo "Erro ao inserir o produto";
} else {
    echo "SUCESSO ao inserir!";
}