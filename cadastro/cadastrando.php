<html>
<head>
<title>Cadastro </title>
<meta content="5" src="cadastro.php">
</head>
<body> 
<?php
$nome= $_POST['nome'];
$datanasc= $_POST['datanasc'];
$cpf= $_POST['cpf'];
$estado= $_POST['estado'];
$cidade= $_POST['cidade'];
$bairro= $_POST['bairro'];
$email= $_POST['email'];
$senha= $_POST['senha'];

$host= "localhost";
$user= "root";
$pass= "";
$banco= "tcc";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($banco) or die (mysql_error());	

$sql = mysql_query ("INSERT INTO usuarios(nome,datanasc,cpf,estado,cidade,bairro,email,senha) VALUES('$nome', 'datanasc', '$cpf', '$estado', '$cidade', '$bairro', '$email', '$senha')");
echo "<center><h1>Cadastro efetuado com sucesso! ";
?>
</body>
</html>


