<?php

//Função Listar
function ListarProdutos($conexao) {
	$produtos = array();
	$resultado = mysqli_query($conexao, "select * from usuarios");
	while($produto = mysqli_fetch_assoc($resultado)) {
		array_push($produtos, $produto);
	}
	return $produtos;
}

//Função Inserir
function InsereProduto($conexao, $nome, $senha) {
	$query = "insert into usuarios (nome, senha) values ('{$nome}', {$senha})";
	return mysqli_query($conexao, $query);
}

//Função Deletar
function RemoveProduto($conexao, $id) {
	$query = "delete from usuarios where id = {$id}";
	return mysqli_query($conexao, $query);
}

//Função Busca Usuario
function BuscaUsuario($conexao, $nome, $senha) {
	//$senhaMd5 = md5($senha);
	$query = "select * from USUARIOS where nome='{$nome}' and senha='{$senha}'";
	$resultado = mysqli_query($conexao, $query);
	$usuario = mysqli_fetch_assoc($resultado);
	return $usuario;
}

//Função selecionar tabela
function SelecionaTabela($conexao, $id) {
	$query = "select * from USUARIOS";
	return mysqli_query($conexao, $query);

}

function buscaDownloads($conexao) {
	$query = "Select * from download";
	$result = mysqli_query($conexao, $query);
	$downloads = array();
		array_push($downloads, $produto);
	}
	return $downloads;	
}
?>
