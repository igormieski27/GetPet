<!DOCTYPE html>
<?php
include('conecta.php');
require_once('selecionapets.php');
?>
<html>
<head>
    <meta charset="UTF-8"/>
	 <link rel="stylesheet" type="text/css" href="style.css">
    <title>GetPet - Adoção de Animais</title>
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
	</nav>		<div align="center"> 
		<br> 
		<div class="divisor">
			<div class="anunciod"> Anúncio</div>
		</div>
		<br> <br>
		<?php
		$pet = getpet($_SERVER["QUERY_STRING"]);
		echo "<div style='border: 3px solid gray; padding: 15px; min-width:100px; display: inline-block'>
					<img src=\"..\\Arquivos\\" . $pet["imagem"] . "\" width='400' height='300' alt='' title='Img#1' style= 'margin:10px 10px' class='margem' />
		
					<div class='titulo'><h3><p>" . $pet["titulo"] . "</font> </p></h3></div>
					<div style='border: 3px solid gray; padding: 15px; min-width:100px; display: inline-block'>
						 <div class='descricao' style='max-width: 400px;'><p>" . $pet["descr"] . "</p></div>
					</div>

					<h3><p>" . $pet["imagem"] . "</p></h3>
			</font>
			</div>
		</div>"; ?>
		<br> </br> <br> </br> <br> </br> <br> </br> <br> </br>
		<div align="center"> <h3> Estão faltando informações nesse anúncio? Entre em contato conosco para adquirir mais informações. </h3> 
		 <p>E-mail para contato: getpetsuporte@gmail.com </div>
		 	<br>
</body>
<footer>
	<hr size="2" width="100%" align="center" noshade>
	<div align="center"><font size="0.75">GetPet. Website de adoção e doação de animais. <br>
	<i>Instituto Federal do Paraná, campus Irati, 2017.</i> </font> </div>
</footer>
</html>
