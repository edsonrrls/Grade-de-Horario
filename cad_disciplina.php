<?php
include ("conexao.php");
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
            <li class="active"><a href="cadastros.html">Cadastros</a></li>
            <li><a href="#">Consultas</a></li>
            <li><a href="#">Sair</a></li>
          </ul>
        </nav>
      </div>     

      <div class="row">
        <!-- Conteúdo da página -->
        <div class="container">

            <div class="panel-body col-xs-12 col-md-12">
                <div class="alert alert-success">
                  <b>Informe os dados para cadastrar a disciplina:</b>
                </div>          

            <form method="POST" action="processa_cad_disciplina.php">
                <div class="form-group col-xl-12 col-sm-6 col-md-6">
                    <label for="disc">Nome da Disciplina:</label>
                    <input type="text" class="form-control" id="disc" name="disc" required>
                </div>
                <div class="form-group col-xl-12 col-sm-6 col-md-6">
                    <label for="curso">Nome do Curso:</label>

                        <select class="form-control" id="curso" name="curso" required>
                            <option value="">Escolha o curso</option>
                            <option value="Biocombustiveis">Biocombustiveis</option>
                            <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                            <option value="EAD Gestão Empresarial">EAD Gestão Empresarial</option>
                        </select>

                </div>

                <div class="form-group col-xl-12 col-md-12">
                  <button type="submit" class="btn btn-success">Cadastrar</button>  

                  <button type="submit" class="btn btn-danger">Cancelar</button>
                </div>
                  
            </form>

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
