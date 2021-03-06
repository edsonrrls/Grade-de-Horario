<?php
include ("conexao.php");

$consulta = "SELECT grade.cod_grade, grade.curso, professor.nome_prof FROM grade JOIN professor on grade.cod_prof = professor.cod_prof";
    $con = $mysqli->query($consulta) or die($mysqli->error);

$consulta2 = "SELECT * FROM horario";
    $con2 = $mysqli->query($consulta2) or die($mysqli->error);

$consulta3 = "SELECT * FROM disciplina";
    $con3 = $mysqli->query($consulta3) or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
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
			  <b>Informe os dados para cadastrar aula na grade de horários:</b>
			</div>			

        <form method="POST" action="processa_cad_hora_grade.php">
            <!-- Inicio Professor -->
            <div class="form-group col-xl-12 col-md-6 col-sm-6">
                <label for="professor">Nome do Professor:</label>

                    <select class="form-control" name="cod_grade" required>
                        <option value="">Escolha o professor</option>
                        <?php while ($dado = $con->fetch_array()){ ?>
                        <option value="<?php echo $dado["cod_grade"]; ?>">
                            <?php echo $dado["nome_prof"]; ?> - <?php echo $dado["curso"]; ?>
                        </option>                    
                        <?php } ?>
                    </select>
            </div>
            <!-- Fim Professor -->

            <div class="form-group col-xl-12 col-md-3 col-sm-3">
            <label for="curso">Nome da disciplina:</label>

                <select class="form-control" name="disciplina" required>
                    <option value="">Escolha a disciplina</option>
                    <?php while ($disc = $con3->fetch_array()){ ?>
                        <option value="<?php echo $disc["cod_disc"]; ?>">
                            <?php echo $disc["nome_disc"]; ?>                             
                        </option>                    
                        <?php } ?>                       
                </select>

            <label for="curso">Turno da Aula:</label>

                <select class="form-control" name="turno" required>
                    <option value="">Escolha o turno</option>
                    <option value="Manhã">Manha</option>
                    <option value="Tarde">Tarde</option>
                    <option value="Noite">Noite</option>
                </select>
                
            </div>

            <div class="form-group col-xl-12 col-md-3 col-sm-3">
            <label for="curso">Hora da aula:</label>

                <select class="form-control" name="hora_aula" required>
                    <option value="">Escolha o horário</option>
                    <?php while ($dado = $con2->fetch_array()){ ?>
                        <option value="<?php echo $dado["cod_horario"]; ?>">
                            <?php echo $dado["hora_inicio"]; ?> - <?php echo $dado["hora_termino"]; ?>
                        </option>                    
                        <?php } ?>                       
                </select>

                <label for="curso">Dia da Semana:</label>

                <select class="form-control" name="dia" required>
                    <option value="">Escolha o dia</option>
                    <option value="Segunda-Feira">Segunda-Feira</option>
                    <option value="Terça-Feira">Terca-Feira</option>
                    <option value="Quarta-Feira">Quarta-Feira</option>
                    <option value="Quinta-Feira">Quinta-Feira</option>
                    <option value="Sexta-Feira">Sexta-Feira</option>
                    <option value="Sabado">Sabado</option>
                </select>


            </div>

             <div class="form-group col-xl-12 col-md-12 col-sm-12">
              <button type="submit" class="btn btn-success">Cadastrar Aula</button>  

              <button type="reset" class="btn btn-danger">Cancelar</button>
            </div>  
        </form>

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