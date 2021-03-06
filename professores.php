<?php
    include("conexao.php");

    $consulta = "SELECT * FROM professor";
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
              <b>Informações sobre os professores cadastrados:</b>
            </div>
		  <!-- Default panel contents -->
			  <div class="panel-heading"><b>Relação dos professores:</b></div>
			  
            <table class="table">
                <tr>
                    <td><b>Código</b></td>
                    <td><b>Nome do Professor</b></td>                    
                    <td><b>Telefone</b></td>   
                    <td><b>E-Mail</b></td>   
                    <td colspan="2"><b>Ações</b></td>
                </tr>
                <?php while ($dado = $con->fetch_array()){ ?>
                <tr>
                    <td><?php echo $dado["cod_prof"]; ?></td>
                    <td><?php echo $dado["nome_prof"]; ?></td>
                    <td><?php echo $dado["fone_prof"]; ?></td>
                    <td><?php echo $dado["email_prof"]; ?></td>
                    <td>                        

                    <form name="formedit" method="post" action="processa_edit_prof.php">                       
                        <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal<?php echo $dado["cod_prof"]; ?>">Alterar</button>
                    </form>
                       
                        <!-- Modal -->
                          <div class="modal fade" id="myModal<?php echo $dado["cod_prof"]; ?>" role="dialog">
                            <div class="modal-dialog">
                            
                        
                              <!-- Modal content-->
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                                  <h5 class="modal-title">Alterar professor:</h5>
                                </div>
                                    
                                    <form method="POST" action="processa_edit_prof.php">
                                        <div class="form-group col-xl-12 col-sm-6 col-md-6">
                                            <label for="nome">Nome Professor:</label>
                                            <input type="text" class="form-control" name="nome" id="nome" value="<?php echo $dado["nome_prof"]; ?>" required>
                                        </div>

                                        <div class="form-group col-xl-12 col-sm-6 col-md-6">
                                            <label for="fone">Telefone:</label>
                                            <input type="Tel" class="form-control" name="fone" value="<?php echo $dado["fone_prof"]; ?>" required>
                                        </div>

                                        <div class="form-group col-xl-12 col-sm-6 col-md-6">
                                            <label for="email">E-mail Professor:</label>
                                            <input type="E-mail" class="form-control" name="email" value="<?php echo $dado["email_prof"]; ?>" required>
                                        </div>
              
                                    </form>

                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                      <button type="button" class="btn btn-success" data-dismiss="modal">Salvar</button>
                                    </div>
                             </div>
                          </div>
                         </div>

                    </td>          
                    <td>
                        <form name="formexclui" method="post" action="processa_exc_prof.php">
                            <input type="hidden" name="cod_prof" value=<?php echo $dado["cod_prof"]; ?>>
                            <button type="submit" class="btn btn-xs btn-danger">Excluir</button>  
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