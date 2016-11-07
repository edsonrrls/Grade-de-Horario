<?php
	include_once("conexao.php");

	$cod_prof = $_POST['cod_prof'];

	echo $cod_prof;

    $consulta_edit = "SELECT * FROM professor WHERE cod_prof = $cod_prof";
    $con_edit = $mysqli->query($consulta_edit) or die($mysqli->error);



	//echo "$nome_prof, $semestre, $ano, $regime, $categoria, $validade, $curso";

?>