<?php
    include("conexao.php");

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
    <link rel="icon" href="favicon.ico">

    <title>Grade de Horários</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="justified-nav.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>

  </head>

  <body>

    <div class="container">

      <div class="masthead">
        <h3 class="text-muted">Grade de Horários</h3>
        <nav>
          <ul class="nav nav-justified">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="cadastros.html">Cadastros</a></li>
            <li class="active"><a href="consultas.html">Consultas</a></li>
            <li><a href="#">Sair</a></li>
          </ul>
        </nav>
      </div>     

      <div class="row">

        <!-- Conteúdo da página -->
		<div class="container">

		<div class="panel-body col-xs-12 col-md-12">

            <div class="alert alert-success">
              <b>Informações sobre os professores cadastrados:</b>
            </div>
			  <div class="panel-heading"><b>Relação dos professores:</b></div>
			  
            <table class="table">
                <tr>
                    <td><b>Código</b></td>
                    <td><b>Nome do Professor</b></td>                    
                    <td><b>Telefone</b></td>   
                    <td><b>E-Mail</b></td>   
                </tr>
                <?php while ($dado = $con->fetch_array()){ ?>
                <tr>
                    <td><?php echo $dado["codigo_prof"]; ?></td>
                    <td><?php echo $dado["nome_prof"]; ?></td>
                    <td><?php echo $dado["fone_prof"]; ?></td>
                    <td><?php echo $dado["email_prof"]; ?></td>

                </tr>
                <?php }?>
            </table>
          </div>
		</div>
    </div>

      <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div>

    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>