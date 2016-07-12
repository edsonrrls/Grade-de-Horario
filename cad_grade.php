<?php
include ("conexao.php");

$consulta = "SELECT * FROM professor";
    $con = $mysqli->query($consulta) or die($mysqli->error);
$consulta = "SELECT * FROM disciplina";
    $con2 = $mysqli->query($consulta) or die($mysqli->error);
$consulta = "SELECT * FROM horario";
    $con3 = $mysqli->query($consulta) or die($mysqli->error);
$consulta = "SELECT * FROM horario";
    $con4 = $mysqli->query($consulta) or die($mysqli->error);
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
            <li><a href="consultas.html">Consultas</a></li>
            <li><a href="#">Sair</a></li>
          </ul>
        </nav>
      </div>     

      <div class="row">
    <!-- Conteúdo da página -->
    <div class="container">

    	<div class="panel-body col-xs-12 col-md-12">
			<div class="alert alert-success">
			  <b>Informe os dados para cadastrar a nova grade de horários:</b>
			</div>			

        <form>

            <div class="form-group col-xl-12 col-md-6 col-sm-6">
                <label for="professor">Nome do Professor:</label>

                    <select class="form-control" name="professor" required>
                        <option value="">Escolha o professor</option>
                        <?php while ($dado = $con->fetch_array()){ ?>
                        <option value="<?php echo $dado["codigo_prof"]; ?>">
                            <?php echo $dado["nome_prof"]; ?>                             
                        </option>                    
                        <?php } ?>
                    </select>
            </div>

            <div class="form-group col-xl-12 col-md-2 col-sm-2">
                <label for="turno">Turno:</label>
                    <select class="form-control" id="turno" name="turno" required>
                        <option value="">Escolha o turno</option>
                        <option value="Manhã">Manhã</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noite">Noite</option>
                    </select>
            </div>

            <div class="form-group col-xl-12 col-md-4 col-sm-4">
                <label for="dia">Dia da Semana:</label>

                    <select class="form-control" name="dia" required>
                        <option value="">Escolha o dia</option>
                        <option value="Segunda-feira">Segunda-feira</option>
                        <option value="Terça-feira">Terça-feira</option>
                        <option value="Quarta-feira">Quarta-feira</option>
                        <option value="Quinta-feira">Quinta-feira</option>
                        <option value="Sexta-feira">Sexta-feira</option>
                        <option value="Sábado">Sábado</option>
                    </select>

            </div>

            <div class="form-group col-xl-12 col-md-6 col-sm-6">
                <label for="curso">Nome do Curso:</label>

                    <select class="form-control" name="curso" required>
                        <option value="">Escolha o curso</option>
                        <option value="Biocombustiveis">Biocombustiveis</option>
                        <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                        <option value="EAD Gestão Empresarial">EAD Gestão Empresarial</option>
                    </select>
            </div>

            <div class="form-group col-xl-12 col-md-6 col-sm-6">
                <label for="disc">Nome da Disciplina:</label>

                    <select class="form-control" name="disc" required>
                        <option value="">Escolha a disciplina</option>
                        <?php while ($dado = $con2->fetch_array()){ ?>
                        <option value="<?php echo $dado["codigo_disc"]; ?>">
                            <?php echo $dado["nome_disc"]; ?>                             
                        </option>                    
                        <?php } ?>
                    </select>
            </div>

            <div class="form-group col-xl-6 col-md-2 col-sm-2">
                <label for="hora_ini">Início da Aula:</label>

                    <select class="form-control" name="hora_ini" required>
                        <option value="">Escolha o horário</option>
                        <?php while ($dado = $con3->fetch_array()){ ?>
                        <option value="<?php echo $dado["codigo_horario"]; ?>">
                            <?php echo $dado["hora_inicio"]; ?>                             
                        </option>                    
                        <?php } ?>
                    </select>
            </div>

            <div class="form-group col-xl-6 col-md-2 col-sm-2">
                <label for="hora_fim">Término da Aula:</label>

                    <select class="form-control" name="hora_fim" required>
                        <option value="">Escolha o horário</option>
                        <?php while ($dado = $con4->fetch_array()){ ?>
                        <option value="<?php echo $dado["codigo_horario"]; ?>">
                            <?php echo $dado["hora_fim"]; ?>                             
                        </option>                    
                        <?php } ?>
                    </select>
            </div>

             <div class="form-group col-xl-12 col-md-12 col-sm-12">
              <button type="submit" class="btn btn-success">Cadastrar Aula</button>  

              <button type="submit" class="btn btn-danger">Cancelar</button>
            </div>
              
            <table class="table">
                <tr>
                    <td><b>Horário</b></td>
                    <td><b>Segunda-feira</b></td>
                    <td><b>Terça-feira</b></td>                    
                    <td><b>Quarta-feira</b></td>   
                    <td><b>Quinta-feira</b></td> 
                    <td><b>Sexta-feira</b></td>
                    <td><b>Sábado</b></td>  
                </tr>
                <?php while ($dado = $con->fetch_array()){ ?>
                <tr>
                    <td><?php echo $dado["codigo_prof"]; ?></td>
                    <td><?php echo $dado["codigo_prof"]; ?></td>
                    <td><?php echo $dado["nome_prof"]; ?></td>
                    <td><?php echo $dado["fone_prof"]; ?></td>
                    <td><?php echo $dado["email_prof"]; ?></td>
                    <td><?php echo $dado["email_prof"]; ?></td>
                    <td><?php echo $dado["email_prof"]; ?></td>

                </tr>
                <?php }?>
            </table>
    
        </form>
       </div>    	
    </div>
    <!-- fim container -->

    <footer class="footer">
        <p>&copy; 2015 Company, Inc.</p>
      </footer>

    </div>

    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>