<html>
<head>
<title> Sistema de cadastro </title>
 <link rel="stylesheet" type="text/css" href="style.css">
 <meta charset="UTF-8">
</head>
<body>
	<img src="Banners/header.jpg"> \
	<nav id="menu">
		<font face="Bakersfield">
		<nav id="nav-1">
			<a class="link-1" href="./main.php">Home</a>
			<a class="link-1" href="./missao.html">Nossa missão</a>
			<a class="link-1" href="./contato.html">Contato</a>
			<a class="link-1" href="./cadastro.php">Realizar Cadastro/Login</a>
		</nav>
	</nav>
<form name="signup" method="POST" action="cadastrando.php"><br /><br />
<center>

<table width="300" cellspacing="1" cellpadding="3" border="0" bgcolor="#000000">
<tr>
   <td><font color="#FFFFFF" face="arial, verdana, helvetica">
<b>Cadastre-se no GetPet</b>
   </font></td>
</tr>
<tr>
   <td bgcolor="#FFFFFF">
   <font face="arial, verdana, helvetica">
   <br />

Nome:           <input type="text" name="nome" id="nome"/> <br /> 
Data Nasc.:     <input type="date" name="datanasc"/> <br />
CPF:                  <input type="text" name="cpf"/> <br />
Estado:        <input type="text" name="estado"/> <br />
Cidade:        <input type="text" name="cidade"/> <br />
Bairro:          <input type="text" name="bairro"/> <br />
E-mail:         <input type="text" name="email"/> <br />
Senha:         <input type="password" name="senha"/> <img src="Banners/interrog.png" width="10" title="Insira apenas caracteres alfanuméricos (Máx. 16)"> <br />
                        	<input type="submit" value="Cadastrar" /><br />
Já possui uma conta? Clique <a href="./login.php"> aqui </a> para realizar login.
   </font>
   </td>
</tr>
</table> 
</form>
<br><br><br><br><br><br><br><br><br>
</body>
<footer>
	<hr size="2" width="100%" align="center" noshade>
	<div align="center"><font size="0.75">GetPet. Website de adoção e doação de animais. <br>
	<i>Instituto Federal do Paraná, campus Irati, 2017.</i> </font> </div>
</footer>
</html>
