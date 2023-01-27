<html>
<head>
<title>Autenticando usuario...</title>
<script type="text/javascript">
function loginsuccessfully() { 
	setTimeout("window.location='http://localhost/cadastro/perfilusuario.php'", 5000);
} 
function loginfailed(){ 
	setTimeout("window.location='login.php'", 5000);
}
</script>
</head>
<body>
<?php
include "conecta.php";
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysqli_query($mysqli, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'") or die(mysqli_error($conexao));
$row = mysqli_num_rows($sql);
if ($row > 0) {
	session_start();
	$res = mysqli_fetch_array($sql);
	$_SESSION ['nome']=$res['nome'];
	$_SESSION ['cpf']=$res['cpf'];
	$_SESSION ['email']=$res['email'];
	$_SESSION ['estado']=$res['estado'];
	$_SESSION ['cidade']=$res['cidade'];
	$_SESSION ['bairro']=$res['bairro'];
	echo "<center> Login realizado com sucesso! Aguarde um instante, você será redirecionado em alguns segundos...</center>";
	echo"<script>loginsuccessfully()</script>";
}else { 
	echo"<center> Usuário ou senha inválidos! Aguarde um instante para tentar novamente.</center>";
	echo"<script>loginfailed()</script>";
}
?>
</body>
</html>
