<?php 


require_once("config.php");
require_once("class/usuarios.php");

//$sql = new Sql();


//$usuarios = $sql->select("SELECT * FROM tb_usuarios");


//echo json_encode($usuarios);

$user1 = new Usuario();

$user1->loadbyId(1);

echo $user1;





?>