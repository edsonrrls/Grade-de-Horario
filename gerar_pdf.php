<?php
    include("conexao.php");

    include("./MPDF57/mpdf.php");

    $cod_prof = $_POST['cod_prof'];
    $cod_grade = $_POST['cod_grade'];

    $consulta = "SELECT * FROM grade JOIN professor on grade.cod_prof = professor.cod_prof WHERE grade.cod_prof ='$cod_prof' AND grade.cod_grade = '$cod_grade'";
    $con = $mysqli->query($consulta) or die($mysqli->error);

    $consulta2 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario 
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Segunda-Feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con2 = $mysqli->query($consulta2) or die($mysqli->error);

    $consulta3 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Terça-Feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con3 = $mysqli->query($consulta3) or die($mysqli->error);

    $consulta4 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Quarta-Feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con4 = $mysqli->query($consulta4) or die($mysqli->error);

    $consulta5 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Quinta-Feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con5 = $mysqli->query($consulta5) or die($mysqli->error);

    $consulta6 = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Sexta-Feira' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $con6 = $mysqli->query($consulta6) or die($mysqli->error);

    $consultasab = "SELECT h.cod_hora_aula, h.cod_grade, h.cod_disc, g.cod_prof, p.cod_prof, d.nome_disc, ho.cod_horario, ho.hora_inicio, ho.hora_termino FROM hora_aula AS h JOIN grade AS g ON h.cod_grade = g.cod_grade JOIN professor AS p ON p.cod_prof = g.cod_prof JOIN disciplina AS d ON d.cod_disc = h.cod_disc JOIN horario AS ho ON ho.cod_horario = h.cod_horario
            WHERE p.cod_prof = $cod_prof 
            AND h.dia_semana = 'Sabado' 
            AND h.cod_grade = $cod_grade ORDER BY ho.hora_inicio";
    $consab = $mysqli->query($consultasab) or die($mysqli->error);

    $mpdf = new mPDF();
    $mpdf -> SetDisplayMode("fullpage");
    $mpdf -> WriteHTML(" Informaçoes sobre a grade cadastrada:<hr/>");
    
    $html = '
<!DOCTYPE html>
<html lang="pt-br">
<head>    
    <title>Grade Horários Digital</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- CSS Customizado -->
    <style>
    body {
        color:black;
        font-size:12px;
        
    }

    .col-lg-1,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-md-1,.col-md-10,.col-md-11,.col-md-12,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-sm-1,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-xs-1,.col-xs-10,.col-xs-11,.col-xs-12,.col-xs-2,.col-xs-3,.col-xs-4,.col-xs-5,.col-xs-6,.col-xs-7,.col-xs-8,.col-xs-9{
        position:relative;min-height:0px;padding-right:0px;padding-left:0px;
    }
    .table-bordered {
        border:1px solid #0000ff!important;
    }

    </style>
</head>

<body>
    <!-- Conteúdo da página -->

            <img src="png/cabecalho.png">		
           
            <table class="table table-bordered">

                <tr>                    
                    <td><b>Código da grade</b></td>                                        
                    <td><b>Professor</b></td>   
                    <td><b>Semestre</b></td>  
                    <td><b>Ano</b></td>  
                    <td><b>Valido a partir:</b></td>  
                    <td><b>Categoria</b></td>  
                    <td><b>Regime</b></td>  
                    <td><b>Curso</b></td>  
                </tr>';
                while ($dado = $con->fetch_array()){
                $html = $html .'<tr>                    
                    <td>'.$dado["cod_grade"].'</td>
                    <td>'.$dado["nome_prof"].'</td>   
                    <td>'.$dado["semestre"].'</td>
                    <td>'.$dado["ano"].'</td>
                    <td>'.$dado["validade"].'</td>
                    <td>'.$dado["categoria"].'</td>
                    <td>'.$dado["regime"].'</td>
                    <td>'.$dado["curso"].'</td>
                </tr>';
                }

                
            $html = $html .'</table>

            <div class="col-xs-4">
                <table class="table table-bordered">
                    <tr>                    
                        <td><b><center>Segunda-Feira</center></b></td>             
                    </tr>';

                    while ($seg = $con2->fetch_array()){ 
                    $html = $html .'<tr>              
                        <td><center>'.$seg["hora_inicio"].' - '.$seg["hora_termino"].'<br> '.$seg["nome_disc"].'</center></td>
                    </tr>';
                    }
                $html = $html .'    
                </table>
            </div>    

            <div class="col-xs-4">
                <table class="table table-bordered">
                    <tr>                    
                        <td><b><center>Terça-Feira</center></b></td>             
                    </tr>';

                    while ($ter = $con3->fetch_array()){ 
                    $html = $html .'<tr>              
                        <td><center>'.$ter["hora_inicio"].' - '.$ter["hora_termino"].'<br> '.$ter["nome_disc"].'</center></td>
                    </tr>';
                    }
                $html = $html .' 
                </table>
            </div>

            <div class="col-xs-4">
                <table class="table table-bordered">
                    <tr>                    
                        <td><b><center>Quarta-Feira</center></b></td>             
                    </tr>';

                    while ($qua = $con4->fetch_array()){
                    $html = $html .'<tr>              
                        <td><center>'.$qua["hora_inicio"].' - '.$qua["hora_termino"].'<br> '.$qua["nome_disc"].'</center></td>
                    </tr>';
                    }
                $html = $html .'
                </table>
            </div>

            <div class="col-xs-4">
                <table class="table table-bordered">
                    <tr>                    
                        <td><b><center>Quinta-Feira</center></b></td>             
                    </tr>';

                    while ($qui = $con5->fetch_array()){ 
                    $html = $html .'<tr>              
                        <td><center>'.$qui["hora_inicio"].' - '.$qui["hora_termino"].'<br> '.$qui["nome_disc"].'</center></td>
                    </tr>';
                    }
                $html = $html .'
                </table>
            </div>

            <div class="col-xs-4">
                <table class="table table-bordered">
                    <tr>                    
                        <td><b><center>Sexta-Feira</center></b></td>             
                    </tr>';

                    while ($sex = $con6->fetch_array()){
                    $html = $html .'<tr>              
                        <td><center>'.$sex["hora_inicio"].' - '.$sex["hora_termino"].'<br> '.$sex["nome_disc"].'</center></td>
                    </tr>';
                    }
                $html = $html .'
                </table>
            </div>

            <div class="col-xs-4">
                <table class="table table-bordered">
                    <tr>                    
                        <td><center><b>Sábado</b></center></td>             
                    </tr>';

                    while ($sab = $consab->fetch_array()){
                    $html = $html .'<tr>              
                         <td><center>'.$sab["hora_inicio"].' - '.$sab["hora_termino"].'<br> '.$sab["nome_disc"].'</center></td>
                    </tr>';
                    }
                $html = $html .'
                </table>   
            </div>

            <div class="col-xs-6">
                <table class="table table-bordered">
                
                <tr>                               
                    <td colspan="4"><b><center>HAE - RJI - JORNADA</center></b></td>                                        
                    <td colspan="2"><b><center>Nº Horas Semanais</center></b></td>                                                             
                                         
                </tr>
                <tr>                    
                    <td colspan="5"><b>1.</b> Diretor e Vice-Diretor da Faculdade</td>                                        
                    <td colspan="2"></td>                                    
                </tr>
                <tr>                    
                    <td colspan="5"><b>2.</b> Acessoria ao CEETPS</td>                                        
                    <td colspan="2"></td>                                    
                </tr>
                <tr>                    
                    <td colspan="5"><b>3.</b> Acessoria à Diretoria da Fatec</td>                                        
                    <td colspan="2"></td>                                    
                </tr>
                <tr>                    
                    <td colspan="5"><b>4.</b> Chefia de Departamento</td>                                        
                    <td colspan="2"></td>                                    
                </tr>
                <tr>                    
                    <td colspan="5"><b>5.</b> Responsabilidade por Curso em Implantação</td>                                        
                    <td colspan="2"></td>                                    
                </tr>
                <tr>                    
                    <td colspan="5"><b>6.</b> Responsabilidade por Disciplina (2ª a 6ª feira)</td>                                        
                    <td colspan="2"></td>                                    
                </tr>
                <tr>                    
                    <td colspan="5"><b>7.</b> Coordenação de Oficinas e Laboratórios</td>                                        
                    <td colspan="2"></td>                                    
                </tr>
                <tr>                    
                    <td colspan="5"><b>8.</b> Grupo de Estudos (2ª a 6ª feira)</td>                                        
                    <td colspan="2"></td>                                    
                </tr>
                <tr>                    
                    <td colspan="5"><b>9.</b> Pesquisa Individual (2ª a 6ª feira)</td>                                        
                    <td colspan="2"></td>                                    
                </tr>

                 <tr>                    
                    <td colspan="5"><b>10.</b> Outros (2ª a 6ª feira)</td>                                        
                    <td colspan="2"></td>                                    
                </tr>
               
            </table>
        </div>

        <div class="col-xs-6">
            <table class="table table-bordered">
                
                <tr>                                    
                    <td colspan="6"><b><center>QUADRO RESUMO</center></b></td>    
                </tr>
                <tr>
                    <td colspan="4"><b><center>ATIVIDADES</center></b></td>
                    <td><b><center>Nº SEMANAL </center></b></td>
                    <td><b><center>Nº MENSAL</center></b></td>
                </tr>
                <tr>
                    <td colspan="4"><center>Hora-Aula</center></td>
                    <td><center></center></td>
                    <td><center></center></td>
                </tr>
                <tr>
                    <td colspan="4"><center>Hora-Atividade</center></td>
                    <td><center></center></td>
                    <td><center></center></td>
                </tr>
                <tr>
                    <td colspan="4"><center>H.A.E.</center></td>
                    <td><center></center></td>
                    <td><center></center></td>
                </tr>
                <tr>
                    <td colspan="4"><center>R.J.I.</center></td>
                    <td><center></center></td>
                    <td><center></center></td>
                </tr>
                <tr>
                    <td colspan="4"><center>Jornada</center></td>
                    <td><center></center></td>
                    <td><center></center></td>
                </tr>
                <tr>
                    <td colspan="4"><center>TOTAL GERAL (HORAS)</center></td>
                    <td><center></center></td>
                    <td><center></center></td>
                </tr>
            </table>
        </div>

</body>

</html>';

    $mpdf ->WriteHTML($html);
    $mpdf -> Output();
    exit();

?>