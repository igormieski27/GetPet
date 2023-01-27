<html>
<head>
<title>Cadastro </title>
<meta content="5" src="cadastroanuncio.php">
</head>
<body> 
<?php
$titulo= $_POST['titulo'];
$descr= $_POST['descr'];


 $extensao = strtolower(substr($_FILES['imagem']['name'], -5));
    if ($extensao[0] != '.') {

        $extensao = substr($extensao, -4);
    }

    $Arquivo_Nome = md5(time()) . $extensao;
    $Pasta_Destino = "../Arquivos/";

    if(move_uploaded_file($_FILES['imagem']['tmp_name'], $Pasta_Destino . $Arquivo_Nome)){
        include "conecta.php";
        
        $sql = mysqli_query ($mysqli, "INSERT INTO anuncio(titulo,descr,imagem) VALUES('$titulo', '$descr', '$Arquivo_Nome')");
        echo "<center><h1>Anuncio enviado com sucesso! ";
    }else echo "erro";
?>
</body>
</html>
