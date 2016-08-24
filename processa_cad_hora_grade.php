<?php
	include_once("conexao.php");

	$cod_grade = $_POST['cod_grade'];
	$disciplina = $_POST['disciplina'];
	$turno = $_POST['turno'];
	$inicio = $_POST['inicio'];
	$fim = $_POST['fim'];
	$dia_semana = $_POST['dia'];
	echo "$cod_grade, $disciplina, $turno, $inicio, $fim, $dia_semana";

	$result_grade = "INSERT INTO hora_aula(cod_grade, cod_disc, hora_inicio, hora_termino, turno, dia_semana) VALUES ('$cod_grade','$disciplina','$inicio', '$fim', '$turno', '$dia_semana')"; //Cadastra dados

	$resultado_grade = mysqli_query($mysqli, $result_grade);

	if (mysqli_affected_rows($mysqli) != 0) {
		
		header("Location: cad_hora_grade.php"); //Redireciona página
	}
	else 
	{
		
	}
?>