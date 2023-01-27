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
<form name="registroanimal" enctype="multipart/form-data" method="POST" action="cadastrandoanuncio.php"><br /><br />
<center>

<table width="300" cellspacing="1" cellpadding="3" border="0" bgcolor="#000000">
<tr>
   <td><font color="#FFFFFF" face="arial, verdana, helvetica">
<b>Cadastro de anúncio!</b>
   </font></td>
</tr>
<tr>
   <td bgcolor="#FFFFFF">
   <font face="arial, verdana, helvetica">
   <br />
  <div>Título: <input name="titulo" type="text"/></div>
  <div>Descrição: <input name="descr" type="textarea"/></div>    
  <input type="hidden" name="MAX_FILE_SIZE" value="99999999"/>
      <div><input name="imagem" type="file"/></div>
      <div><input type="submit" value="Salvar"/></div>
   </font>
   </td>
</tr>
</table> 
</form>
</body>
</html>
