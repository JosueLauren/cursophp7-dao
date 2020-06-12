<?php 


require_once("config.php");
require_once("class/usuarios.php");

//$sql = new Sql();
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");


//echo json_encode($usuarios);
// carregar um usuário
//$user1 = new Usuario();
//$user1->loadbyId(1);
//echo $user1;

//carregar uma lista de usuarios
//$lista = Usuario::getList();

//carregar um usuario pelo login
//echo json_encode($lista);
//$search =  Usuario::search("user");
//echo json_encode($search);

// carregar um usuario usando o login e a senha
//$usuario =  new Usuario();
//$usuario->login("user", "12345");
//echo $usuario;

$aluno = new Usuario();

$aluno->setDeslogin("aluno");
$aluno->setDessenha("@alun0");

$aluno->insert();

echo $aluno;






?>