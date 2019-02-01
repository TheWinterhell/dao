<?php

require_once('config.php');

//Carrega um usuário
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuários 
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuario com login e senha
//$usuario = new Usuario();
//$usuario->login("jose","123");
//echo $usuario;

//Criando um novo usuario
//$aluno = new Usuario("Aluno","aaaaa");
//$aluno->insert();
//echo $aluno;

//Alterar um usuario
//$usuario = new Usuario();
//$usuario->loadById(8);
//$usuario->update("professor", "adoado");
//echo $usuario;

$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;
