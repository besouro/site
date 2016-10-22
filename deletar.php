<?php 
include("conecta.php");
include("funcao.php");
?>







<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Metalsystem</title>
</head>
<body>

<?php
$id = $_GET['id'];
RemoveProduto($conexao, $id);
header("Location: listar.php?removido=true");
die();
?>


</body>
</html>