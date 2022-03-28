<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

//=================================================================//


                     //Carrega um usuário
/*
$root = new Usuario();
$root->loadbyId(1);
echo $root;
*/

//=================================================================//
                //Carrega uma lista de usuários
/*                
$lista = Usuario::getList();
echo json_encode($lista);
*/

//=================================================================//

//Carrega uma lista de usuários buscando pelo login
/*
$search = Usuario::search("jo");

echo json_encode($search);
*/

//=================================================================//

// Carrega um usuário usando o login e a senha
/*
$usuario = new Usuario();
$usuario->login ("José", "1234567890");

echo $usuario;
*/
//=================================================================//
             //Criando um novo usuário
/*
$aluno = new Usuario("aluno", "@lun0");

$aluno->insert();

echo $aluno;
*/

//=================================================================//
                // Alterar um usuário
/*
$usuario = new Usuario();

$usuario->loadById(8);

$usuario->update("Roberto", "456899");

echo $usuario;
*/

//=================================================================//


$usuario = new Usuario();

$usuario->loadById(9);

$usuario->delete();

echo $usuario

?>