<?php

require_once("config.php");

//Carrega um usuario
//$futebol = new Usuario();
//$futebol->loadById(2);
//echo $futebol;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//CArrega uma lista Usuarios buscando pelo login
//$search = Usuario::search("l");
//echo json_encode($search);

//CArrega um usuarios usando o login e a senha
$usuario = new Usuario();
$usuario->login("user","123456");

echo $usuario;

?>