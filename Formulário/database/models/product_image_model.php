<?php
require "connection.php";

/*Criar imagem de produto*/
function CREATE_PRODUCT_IMAGE ($product, $capa_imagem, $descricao_imagem) {
    $command = "INSERT INTO product_image(product, capa_imagem, descricao_imagem) 
    VALUES ($product, $capa_imagem, $descricao_imagem)";

    $worked = mysqli_query(con(), $command);

    return $worked;
}

/*Mostrar imagens de produto*/
function SHOW_PRODUCT_IMAGES () {
    $command = "SELECT * FROM product_image";
    $worked = mysqli_query(con(), $command);

    $products = array();

    while ($row = mysqli_fetch_assoc($worked)) {
        $products[] = $row;
    }

    return $products;
}

/*Mostrar imagem de produto*/
function SHOW_PRODUCT_IMAGE ($id) {
    $command = "SELECT * FROM product_image WHERE id=$id";
    $worked = mysqli_query(con(), $command);
    $row = mysqli_fetch_assoc($worked);

    return $row;
}

/*Atualizar imagem de produto*/
function UPDATE_PRODUCT_IMAGE ($id, $product, $capa_imagem, $descricao_imagem) {
    $command = "UPDATE product_image SET product=$product, capa_imagem=$capa_imagem,
    descricao_imagem=$descricao_imagem WHERE id=$id";

    $worked = mysqli_query(con(), $command);

    return $worked;
}

/*Deletar imagem de produto*/
function DESTROY_PRODUCT_IMAGE ($id) {
    $command = "DELETE FROM product_image WHERE id=$id";
    $worked = mysqli_query(con(), $command);

    return $worked;
}