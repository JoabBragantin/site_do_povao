<?php

require "connection.php";

/*Inserir produto */
function CREATE_PRODUCT ($nome, $descricao, $video_url, $preco, $plataforma, $produtora, $dataLancamento) {
    $command = "INSERT INTO product(nome, descricao, video_url, preco, plataforma, produtora, dataLancamento) 
    VALUES ('$nome', '$descricao', '$video_url', $preco, '$plataforma', '$produtora', '$dataLancamento')";

    $worked = mysqli_query(con(), $command);

    return $worked;
}

/*Listar todos os produtos */
function SHOW_PRODUCTS () {
    $command = "SELECT * FROM product";
    $worked = mysqli_query(con(), $command);

    $products = array();

    while ($row = mysqli_fetch_assoc($worked)) {
        $products[] = $row;
    }

    return $products;
}

/*Detalhar um produto */
function SHOW_PRODUCT ($idProduto) {
    $command = "SELECT * FROM product WHERE idProduto=$idProduto";
    $worked = mysqli_query(con(), $command);
    $row = mysqli_fetch_assoc($worked);

    return $row;
}

/*Atualizar produto */
function UPDATE_PRODUCT ($idProduto, $nome, $descricao, $video_url, $preco, $plataforma, $produtora, $dataLancamento) {
    $command = "UPDATE product SET nome='$nome', descricao='$descricao', video_url='$video_url', preco=$preco,
    plataforma='$plataforma', produtora='$produtora', dataLancamento='$dataLancamento' WHERE idProduto=$idProduto";

    $worked = mysqli_query(con(), $command);

    return $worked;
}

/*Deletar produto */
function DESTROY_PRODUCT ($idProduto) {
    $command = "DELETE FROM product WHERE idProduto=$idProduto";
    $worked = mysqli_query(con(), $command);

    return $worked;
}