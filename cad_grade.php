<?php
include ("conexao.php");

$consulta = "SELECT * FROM professor";
    $con = $mysqli->query($consulta) or die($mysqli->error);
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
			  <b>Informe os dados para cadastrar a nova grade de horários:</b>
			</div>			

        <form method="POST" action="processa_cad_grade.php">
            <!-- Inicio Professor -->
            <div class="form-group col-xl-12 col-md-6 col-sm-6">
                <label for="professor">Nome do Professor:</label>

                    <select class="form-control" name="professor" required>
                        <option value="">Escolha o professor</option>
                        <?php while ($dado = $con->fetch_array()){ ?>
                        <option value="<?php echo $dado["nome_prof"]; ?>">
                            <?php echo $dado["nome_prof"]; ?>                             
                        </option>                    
                        <?php } ?>
                    </select>
            </div>
            <!-- Fim Professor -->

            <div class="form-group col-xl-12 col-md-3 col-sm-3">
            <label for="curso">Escolha o semestre:</label>
                <select class="form-control" name="semestre" required>
                    <option value="">Escolha o semestre</option>
                    <option value="1 Semestre">1º Semestre</option>
                    <option value="2 Semestre">2º Semestre</option>                       
                </select>
            </div>

           <div class="form-group col-xl-12 col-md-3 col-sm-3">
                <label for="curso">Ano:</label>

                    <select class="form-control" name="ano" required>
                        <option value="">Escolha o ano</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                        <option value="2019">2019</option>
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                    </select>

            </div>

            <div class="form-group col-xl-12 col-md-5 col-sm-5">
                <label for="curso">Regime:</label>

                    <select class="form-control" name="regime" required>
                        <option value="">Escolha o curso</option>
                        <option value="Hora-Aula">Hora-Aula</option>
                        <option value="RJI">RJI</option>
                        <option value="Jornada">Jornada</option>
                    </select>
            </div>

            <!-- Inicio Categoria -->
            <div class="form-group col-xl-12 col-md-4 col-sm-4">
                <label for="curso">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" required>
            </div>
            <!-- Fim Categoria -->

            <!-- Inicio Validade -->
            <div class="form-group col-xl-6 col-md-3 col-sm-3">
                <label for="curso">Validade a partir de:</label>
                    <input type="date" class="form-control" name="validade" required>
                
            </div>
            <!-- Fim Validade -->
            <!-- Inicio Curso -->
            <div class="form-group col-xl-6 col-md-4 col-sm-4">
                <label for="curso">Curso:</label>

                    <select class="form-control" name="curso" required>
                        <option value="">Escolha o curso</option>
                        <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                        <option value="Biocombustiveis">Biocombustiveis</option>
                        <option value="EAD - Gestão Empresarial">EAD - Gestão Empresarial</option>
                    </select>
            </div>
            <!-- Fim Curso -->

             <div class="form-group col-xl-12 col-md-12 col-sm-12">
              <button type="submit" class="btn btn-success">Cadastrar Grade</button>  

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

				<p class="footer-company-name">Grade Horários Digital &copy; 2016</p>
				
			</div>

		</footer>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>