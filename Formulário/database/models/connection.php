<?php

function con() {
    $connection = mysqli_connect("localhost","root","","site_do_povao");

    if(!$connection) {
        return "Erro ao conectar à base de dados";
    } else {
        return $connection;
    }

}