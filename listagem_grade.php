<?php
    include("conexao.php");

    $consulta = "SELECT * FROM grade JOIN professor on grade.cod_prof = professor.cod_prof";
    $con = $mysqli->query($consulta) or die($mysqli->error);
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
              <b>Relação de grades horárias cadastradas:</b>
            </div>
		
			  
            <table class="table">
                <tr>                    
                    <td><b>Código</b></td>                                        
                    <td><b>Professor</b></td>   
                    <td><b>Semestre</b></td>  
                    <td><b>Ano</b></td>  
                    <td><b>Valido a partir</b></td>  
                    <td><b>Categoria</b></td>  
                    <td><b>Regime</b></td>  
                    <td><b>Curso</b></td>  
                    <td></td>
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
                    <td>
                        <form name="form1" method="post" action="gerar_pdf.php">
                            <input type="hidden" name="cod_prof" value=<?php echo $dado["cod_prof"]; ?>>
                            <input type="hidden" name="cod_grade" value=<?php echo $dado["cod_grade"]; ?>>
                            <button type="submit" class="btn btn-xs btn-default">Visualizar</button>  
                        </form>
                    </td>
                </tr>
                <?php }?>
            </table>

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