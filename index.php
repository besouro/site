<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">





<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="231" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="19" align="center">

<?php
 if(isset($_GET["msg"]) && $_GET["msg"]!= "")  { 
	echo ($_GET["msg"]);
 }
?>



</td>
  </tr>
  <tr>
    <td width="231" height="143" align="center"><form id="form1" name="form1" method="post" action="checkLogin.php">
      <p>
        <label for="nome"></label>
        <input type="text" name="nome" id="nome" />
      </p>
      <p>
        <label for="senha"></label>
        <input type="text" name="senha" id="senha" />
      </p>
      <p>
        <input type="submit" name="button" id="button" value="entrar" />
      </p>
    </form></td>
  </tr>
  <tr>
    <td height="19" align="center">&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
