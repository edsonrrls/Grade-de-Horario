<?php
	include_once("conexao.php");

	$cod_prof = $_POST['cod_prof'];

	//echo "$nome_prof, $semestre, $ano, $regime, $categoria, $validade, $curso";

	$del = "DELETE FROM professor where cod_prof = $cod_prof"; 

	$del = mysqli_query($mysqli, $del);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: professores.php"); //Redireciona página
	}
	else 
	{
		
	}
?>