<?php
function selectpets(){
	include "conecta.php";
$res = mysqli_query($mysqli, "SELECT * FROM ANUNCIO");
 
 while ($row = mysqli_fetch_array($res)){
 	$grupo[] = $row;
 }

 return $grupo;

}

function getpet($id) {
	include "conecta.php";
	$res = mysqli_query($mysqli, "SELECT * FROM ANUNCIO WHERE idAnuncio=" . $id);

	return mysqli_fetch_array($res);
}
?>
