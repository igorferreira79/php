<?php

require_once("config.php");

//carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//carrega uma lista de uusários
$lista = Usuario::getList();

echo json_encode($lista);

?>