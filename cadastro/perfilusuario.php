<?php session_start() ?>
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
    </nav>
	<p>&nbsp;</p>
	<center>
    <h3><strong>Perfil do usuário:</strong></h3>
            <?php
                echo " <tr><strong>Nome:
                <td>" . $_SESSION['nome'] . "</td> <br>
                <td>CPF: ". $_SESSION['cpf'] . "</td> <br>
                <td>Estado: " . $_SESSION['estado'] . "</td> <br>
                <td>Cidade: " . $_SESSION['cidade'] . "</td><br>
                <td>Bairro: " . $_SESSION['bairro'] . "</td><br>
                <td>E-mail: " . $_SESSION['email'] . "</td><br>
            </tr>";
            ?>

    <p><strong>&nbsp;</strong></p>
	
	<a href="https://goo.gl/forms/1xikBsXmF7nXdKEF3" class="botao">DOAR UM ANIMAL</a>
    <a href="./main.php" class="botao">ADOTAR UM ANIMAL</a>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
</body>
<footer>
    <hr size="2" width="100%" align="center" noshade>
    <div align="center"><font size="0.75">GetPet. Website de adoção e doação de animais. <br>
    <i>Instituto Federal do Paraná, campus Irati, 2017.</i> </font> </div>
</footer>
</html>
