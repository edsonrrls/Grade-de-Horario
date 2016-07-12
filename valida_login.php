<?php

session_start();
$usuariot = $_POST['usuario'];
$senhat = $_POST['senha'];
echo $usuariot.'-'.$senhat;

include_once("conexao.php")

?>