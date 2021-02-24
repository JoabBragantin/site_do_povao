<?php
session_start();
if (!$_SESSION['usuario.cpf']) {
    header('Location: ../../index.html');
    exit();
}