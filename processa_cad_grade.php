<?php
	include_once("conexao.php");

	$nome_prof = $_POST['nome'];
	$fone_prof = $_POST['fone'];
	$email_prof = $_POST['email'];
	
	//echo "$nome_prof - $fone_prof - $email_prof"

	$result_grade = "INSERT INTO grade(codigo_prof, hora_inicio, hora_fim, codigo_disc, curso, turno, dia_semana) VALUES ('$nome_prof','$fone_prof', '$email_prof')"; //Cadastra dados

	$resultado_grade = mysqli_query($mysqli, $result_grade);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: cad_grade.php"); //Redireciona página
	}
	else 
	{
		
	}
?>