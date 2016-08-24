<?php
    include("conexao.php");

    $valor = $_POST['valor'];
    $cod_grade = $_POST['cod_grade'];

    $cod_prof = $valor;

    $consulta = "SELECT * FROM grade JOIN professor on grade.cod_prof = professor.cod_prof WHERE grade.cod_prof ='$cod_prof' AND grade.cod_grade = '$cod_grade'";
    $con = $mysqli->query($consulta) or die($mysqli->error);

    $consulta2 = "SELECT * FROM hora_aula JOIN grade on hora_aula.cod_grade = grade.cod_grade WHERE hora_aula.dia_semana = 'Segunda-Feira' AND hora_aula.cod_grade = '$cod_grade'";
    $con2 = $mysqli->query($consulta2) or die($mysqli->error);

    $consulta3 = "SELECT * FROM hora_aula JOIN grade on hora_aula.cod_grade = grade.cod_grade WHERE hora_aula.dia_semana = 'Terça-Feira' AND hora_aula.cod_grade = '$cod_grade'";
    $con3 = $mysqli->query($consulta3) or die($mysqli->error);

    $consulta4 = "SELECT * FROM hora_aula JOIN grade on hora_aula.cod_grade = grade.cod_grade WHERE hora_aula.dia_semana = 'Quarta-Feira' AND hora_aula.cod_grade = '$cod_grade'";
    $con4 = $mysqli->query($consulta4) or die($mysqli->error);

    $consulta5 = "SELECT * FROM hora_aula JOIN grade on hora_aula.cod_grade = grade.cod_grade WHERE hora_aula.dia_semana = 'Quinta-Feira' AND hora_aula.cod_grade = '$cod_grade'";
    $con5 = $mysqli->query($consulta5) or die($mysqli->error);

    $consulta6 = "SELECT * FROM hora_aula JOIN grade on hora_aula.cod_grade = grade.cod_grade WHERE hora_aula.dia_semana = 'Sexta-Feira' AND hora_aula.cod_grade = '$cod_grade'";
    $con6 = $mysqli->query($consulta6) or die($mysqli->error);

    $consultasab = "SELECT * FROM hora_aula JOIN grade on hora_aula.cod_grade = grade.cod_grade WHERE hora_aula.dia_semana = 'Sábado' AND hora_aula.cod_grade = '$cod_grade'";
    $consab = $mysqli->query($consultasab) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grade Horários Digital</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Footer Customizado -->
    <link rel="stylesheet" href="css/demo.css">
	<link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">

	<!-- Material Designer Lite -->
	<link rel="stylesheet" href="mdl/material.min.css">
	<script src="mdl/material.min.js"></script>

	<!-- Botoes Animados -->
	<link href="css/hover.css" rel="stylesheet" media="all">

    <!-- CSS Customizado -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>

</head>

<body>

    <!-- NavBar -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container">
            <!-- Icone barra de navegação versão mobile -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <img src="png/fatec-small.png" alt="">
                </a>
            </div>
            <!-- Links e botões da barra de navegação -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="cadastro.html">Cadastros</a>
                    </li>
                    <li>
                        <a href="consulta.html">Consultas</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
				      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Usuário</a></li>
				      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Sair</a></li>
    			</ul>
            </div>
            <!-- fim NavBar -->
        </div>
        <!-- fim container -->
    </nav>

    <!-- Conteúdo da página -->

		<div class="container">

		<div class="panel-body col-xs-12 col-md-12">

            <div class="alert alert-success">
              <b>Informaçoes sobre a grade cadastrada:</b>
            </div>
		
			  
            <table class="table">
                <tr>                    
                    <td><b>Código da grade</b></td>                                        
                    <td><b>Professor</b></td>   
                    <td><b>Semestre</b></td>  
                    <td><b>Ano</b></td>  
                    <td><b>Valido a partir</b></td>  
                    <td><b>Categoria</b></td>  
                    <td><b>Regime</b></td>  
                    <td><b>Curso</b></td>  
                </tr>
                <?php while ($dado = $con->fetch_array()){ ?>
                <tr>                    
                    <td><?php echo $dado["cod_grade"]; ?></td>
                    <td><?php echo $dado["nome_prof"]; ?></td>   
                    <td><?php echo $dado["semestre"]; ?></td>
                    <td><?php echo $dado["ano"]; ?></td>
                    <td><?php echo $dado["validade"]; ?></td>
                    <td><?php echo $dado["categoria"]; ?></td>
                    <td><?php echo $dado["regime"]; ?></td>
                    <td><?php echo $dado["curso"]; ?></td>
                </tr>
                <?php }?>
            </table>

            <div class="col-xs-4 col-md-2">
                <table class="table">
                    <tr>                    
                        <td><b>Segunda-Feira</b></td>             
                    </tr>

                    <?php while ($seg = $con2->fetch_array()){ ?> 
                    <tr>              
                        <td><?php echo $seg["cod_disc"]; ?>/<?php echo $seg["hora_termino"]; ?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>

            <div class="col-xs-4 col-md-2">
                <table class="table">
                    <tr>                    
                        <td><b>Terça-Feira</b></td>             
                    </tr>

                    <?php while ($ter = $con3->fetch_array()){ ?> 
                    <tr>              
                        <td><?php echo $ter["hora_inicio"]; ?>/<?php echo $ter["hora_termino"]; ?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>

            <div class="col-xs-4 col-md-2">
                <table class="table">
                    <tr>                    
                        <td><b>Quarta-Feira</b></td>             
                    </tr>

                    <?php while ($qua = $con4->fetch_array()){ ?> 
                    <tr>              
                        <td><?php echo $qua["hora_inicio"]; ?>/<?php echo $qua["hora_termino"]; ?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>

            <div class="col-xs-4 col-md-2">
                <table class="table">
                    <tr>                    
                        <td><b>Quinta-Feira</b></td>             
                    </tr>

                    <?php while ($qui = $con5->fetch_array()){ ?> 
                    <tr>              
                        <td><?php echo $qui["hora_inicio"]; ?>/<?php echo $qui["hora_termino"]; ?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>

            <div class="col-xs-4 col-md-2">
                <table class="table">
                    <tr>                    
                        <td><b>Sexta-Feira</b></td>             
                    </tr>

                    <?php while ($sex = $con6->fetch_array()){ ?> 
                    <tr>              
                        <td><?php echo $sex["hora_inicio"]; ?>/<?php echo $sex["hora_termino"]; ?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>

            <div class="col-xs-4 col-md-2">
                <table class="table">
                    <tr>                    
                        <td><b>Sábado</b></td>             
                    </tr>

                    <?php while ($sab = $consab->fetch_array()){ ?> 
                    <tr>              
                        <td><?php echo $sab["hora_inicio"]; ?>/<?php echo $sab["hora_termino"]; ?></td>
                    </tr>
                    <?php }?>
                </table>
            </div>

          </div>

		</div>

    <!-- fim container -->

    <footer class="footer-distributed">

			<div class="footer-left">
			</div>

			<div class="footer-center">

				<div>
					<span>Av. Prestes Maia, 1764 </span>Jd. Ipanema, Araçatuba/SP
				</div>
				<div>
					(18) 3625-9917
				</div>

				<div>
				
					<a href="mailto:support@company.com">falecom@fatecaracatuba.edu.br</a>
				</div>

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>
			</div>

			<div class="footer-right">

				<img src="png/fatec.png" width="200px">

				<p class="footer-company-name">Grade Horários Digital &copy; 2016
                <br>Edson Asêncio Leal
                <br>Lucilena de Lima</p>
				
			</div>

		</footer>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>