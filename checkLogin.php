<?php 

include("conecta.php");
include("funcao.php");
session_start();

$usuario = BuscaUsuario($conexao, $_POST["nome"], $_POST["senha"]);
if($usuario == null) {
	header("Location: index.php?msg=" . "usuario ou senha invalidos!!");
}else {
	$_SESSION["logado"] = true;
	$_SESSION["nome"] = $usuario["nome"];

	header("Location: restrito.php");
}
die();
