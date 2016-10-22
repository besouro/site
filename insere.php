<?php 
include("conecta.php");
include("funcao.php");
?>


<?php

$nome = $_POST['nome'];
$senha = $_POST['senha'];


if (InsereProduto($conexao, $nome, $senha)) { ?>
<?php echo "Inserido com sucesso!"; ?>
<?php } else {
$msg = mysqli_error($conexao);
?>

<?php 
echo $msg;
?>

<?php 
}
?>




<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Metalsystem</title>
</head>
<body>


</body>
</html>