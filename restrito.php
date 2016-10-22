<?php 
include("conecta.php");
include("funcao.php");
session_start();

if (!isset($_SESSION["logado"]) && !$_SESSION["logado"]) {
	header("Location: index.php?msg=" . "acesso negado");
	die();
}

?>
-<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>   
     
<p>SEJA BEM VINDO <?php echo ($_SESSION["nome"]); ?>!</p>
<p>PAGINA RESTRITA</p>

<?php 
	$downloads = BuscaDownloads($conexao);
?>
<table>
<tr>
	<th>Descrição</th>
    <th>link</th>
    <th>imagem</th>
<tr>
<?php foreach ($downloads as $download): ?>
	<tr>
    	<td><?php echo($download["descricao"]); ?></td>
        <td><?php echo($download["link"]); ?></td>
        <td><?php echo($download["imagem"]); ?></td>
    </tr>    
<?php endforeach ?>
</table>
</body>
</html>


