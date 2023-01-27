
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
	<img src="Banners/header.jpg">
	<nav id="menu">
		<font face="Bakersfield">
		<nav id="nav-1">
			<a class="link-1" href="./main.php">Home</a>
			<a class="link-1" href="./missao.html">Nossa missão</a>
			<a class="link-1" href="./contato.html">Contato</a>
			<a class="link-1" href="./cadastro.php">Realizar Cadastro/Login</a>
		</nav>
	</nav>
	<div class="hoverzoom">

		<?php 
		$grupo = selectpets();

		foreach ($grupo as $pets) {
			echo "<div style='border: 3px solid gray; padding: 15px; min-width:100px; display: inline-block; position: relative; overflow: hidden'>
				<div class='retina'>
					<h3><p>" . $pets['titulo'] . "</p></h3>
				
					<h3><p>" . $pets['imagem'] . "</p></h3>
					<a href='anuncio.php?" . $pets['idAnuncio'] . "'>Quero adotar!</a> 
				</div>
				<img src=\"..\\Arquivos\\" . $pets['imagem'] . "\" width='400' height='300' alt='' title='Img#1'  />
				</div>";
		}	
		
		?>
	</div>		
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<footer>
	<hr size="2" width="100%" align="center" noshade>
	<div align="center"><font size="0.75">GetPet. Website de adoção e doação de animais. <br>
	<i>Instituto Federal do Paraná, campus Irati, 2017.</i> </font> </div>
</footer>
</html>
