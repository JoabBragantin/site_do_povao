<?php
require "../../../database/models/product_model.php";

$idProduto = $_GET['idProduto'];

$worked = DESTROY_PRODUCT($idProduto);

if (!$worked) {
    echo "Falha ao deletar o produto";
} else {
    echo "SUCESSO!";
}