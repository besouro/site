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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>


<table border="1">
<?php
$produtos = ListarProdutos($conexao);
foreach($produtos as $produto) :
?>
<tr>
<td height="21" colspan="3">&nbsp;</td>
</tr>
<tr>
  <td width="93"><?php echo $produto['nome']?></td>
  <td width="91"><?php echo $produto['senha']?></td>
  <td width="91"><a href="deletar.php?id=<?php echo $produto['id']?>" >Remover</a></td>
</tr>

<?php
endforeach
?>
</table>




</body>
</html>