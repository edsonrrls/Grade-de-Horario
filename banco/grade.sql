-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 24-Ago-2016 às 16:42
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `cod_disc` int(5) NOT NULL,
  `nome_disc` varchar(150) COLLATE utf8_bin NOT NULL,
  `curso_disc` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`cod_disc`, `nome_disc`, `curso_disc`) VALUES
(1, 'rteyteyty', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(2, 'LaboratÃ³rio de Redes', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(3, 'Linguagem de ProgramaÃ§ao', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(4, 'Logica e ProgramaÃ§ao', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(5, 'Matematica Discreta', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(6, 'Calculo I', 'Biocombustiveis'),
(7, 'FinanÃ§as', 'EAD GestÃ£o Empresarial'),
(8, 'Empreendedorismo', 'EAD GestÃ£o Empresarial'),
(9, 'CÃ¡lculo II', 'Biocombustiveis'),
(10, 'Engenharia de Software I', 'AnÃ¡lise e Desenvolvimento de Sistemas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grade`
--

CREATE TABLE `grade` (
  `cod_grade` int(5) NOT NULL,
  `cod_prof` int(5) NOT NULL,
  `semestre` varchar(10) COLLATE utf8_bin NOT NULL,
  `ano` int(4) NOT NULL,
  `validade` varchar(20) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(100) COLLATE utf8_bin NOT NULL,
  `regime` varchar(100) COLLATE utf8_bin NOT NULL,
  `curso` varchar(150) COLLATE utf8_bin NOT NULL,
  `observacoes` text COLLATE utf8_bin
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `grade`
--

INSERT INTO `grade` (`cod_grade`, `cod_prof`, `semestre`, `ano`, `validade`, `categoria`, `regime`, `curso`, `observacoes`) VALUES
(1, 2, '1Âº', 2018, 'RJI', 'er', '2016-08-26', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(2, 2, '2 Semestre', 2017, 'Hora-Aula', 'er', '2016-08-27', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(3, 4, '1 Semestre', 2017, 'Hora-Aula', 'Associado I', '2017-01-01', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(4, 5, '1 Semestre', 2017, 'Hora-Aula', 'Associado I', '2017-01-01', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(5, 2, '1 Semestre', 2016, '2016-08-21', 'Associado I', 'Jornada', 'EAD - GestÃ£o Empresarial', NULL),
(6, 5, '2 Semestre', 2016, '2016-09-01', 'Associado I', 'Hora-Aula', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(7, 3, '2 Semestre', 2021, '2016-08-23', '55555', 'Jornada', 'Biocombustiveis', NULL),
(8, 4, '1 Semestre', 2019, '2016-08-24', 'opop', 'Hora-Aula', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL),
(9, 9, '2 Semestre', 2016, '2016-08-24', 'Aluno', 'Hora-Aula', 'AnÃ¡lise e Desenvolvimento de Sistemas', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `cod_horario` int(5) NOT NULL,
  `hora_inicio` varchar(5) COLLATE utf8_bin NOT NULL,
  `hora_termino` varchar(5) COLLATE utf8_bin NOT NULL,
  `turno` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`cod_horario`, `hora_inicio`, `hora_termino`, `turno`) VALUES
(7, '11:10', '13:00', 'ManhÃ£'),
(2, '07:00', '8:00', 'ManhÃ£'),
(3, '7:30', '8:20', 'ManhÃ£'),
(4, '8:20', '9:10', 'ManhÃ£'),
(5, '9:20', '10:10', 'ManhÃ£'),
(6, '10:10', '11:00', 'ManhÃ£'),
(8, '00:10', '01:50', 'Noite');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hora_aula`
--

CREATE TABLE `hora_aula` (
  `cod_hora_aula` int(5) NOT NULL,
  `cod_grade` int(5) NOT NULL,
  `cod_disc` int(5) NOT NULL,
  `hora_inicio` varchar(5) COLLATE utf8_bin NOT NULL,
  `hora_termino` varchar(5) COLLATE utf8_bin NOT NULL,
  `turno` varchar(10) COLLATE utf8_bin NOT NULL,
  `dia_semana` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `hora_aula`
--

INSERT INTO `hora_aula` (`cod_hora_aula`, `cod_grade`, `cod_disc`, `hora_inicio`, `hora_termino`, `turno`, `dia_semana`) VALUES
(1, 1, 1, '8:00', '9:00', 'Manhã', ''),
(2, 1, 1, '9:00', '10:00', 'Manhã', ''),
(3, 3, 5, '8:00', '9:00', 'Manhã', 'Segunda-Feira'),
(4, 1, 4, '344', '3434', 'Noite', 'Sexta-Feira'),
(5, 3, 9, '07:00', '8:00', 'Noite', 'SÃ¡bado'),
(6, 3, 9, '07:00', '8:00', 'Noite', 'SÃ¡bado'),
(7, 3, 10, '7:30', '8:20', 'ManhÃ£', 'TerÃ§a-Feira'),
(8, 1, 2, '8:00', '9:00', 'Manhã', 'Segunda-Feira'),
(9, 1, 5, '11:00', '12:00', 'Tarde', 'Segunda-Feira'),
(10, 1, 9, '8:00', '9:00', 'Manhã', 'Sexta-Feira'),
(11, 1, 5, '12:00', '13:00', 'Manhã', 'Segunda-Feira'),
(12, 1, 6, '10:00', '11:00', 'Manhã', 'Terça-Feira'),
(13, 1, 6, '14:00', '15:00', 'Tarde', 'Terça-Feira'),
(14, 1, 6, '12:00', '13:00', 'Tarde', 'Quinta-Feira'),
(15, 9, 4, '7:30', '8:20', 'ManhÃ£', 'Segunda-Feira'),
(16, 9, 7, '11:10', '13:00', 'Tarde', 'Sexta-Feira'),
(17, 9, 2, '00:10', '01:50', 'Noite', 'Quinta-Feira');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `cod_prof` int(5) NOT NULL,
  `nome_prof` varchar(150) COLLATE utf8_bin NOT NULL,
  `fone_prof` varchar(11) COLLATE utf8_bin NOT NULL,
  `email_prof` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`cod_prof`, `nome_prof`, `fone_prof`, `email_prof`) VALUES
(1, 'teste', '34566464', 'erewreerr'),
(2, 'Professor JoÃ£o', '13456789', 'edsonrrls@hotmail.com'),
(3, 'Testando ', '1899145678', 'lu_lima@terra.com.br'),
(4, 'Lucilena de Lima', '1899145678', 'lu_lima@terra.com.br'),
(5, 'Edson', '1899145678', 'edson@yahho.com'),
(6, 'Edson 2', '18991114346', 'edson@yahho.com'),
(7, 'Fernando CÃ©sar Balbino', '18991114346', 'fernando@gmail.com'),
(8, 'professor X', '455655543', 'professor_X@bol.com'),
(9, 'Edson AsÃªncio Leal', '18991114346', 'edsonasencioleal@gmail.com'),
(10, 'lÃ§lk', 'lÃ§l', 'jkj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`cod_disc`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`cod_grade`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`cod_horario`);

--
-- Indexes for table `hora_aula`
--
ALTER TABLE `hora_aula`
  ADD PRIMARY KEY (`cod_hora_aula`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`cod_prof`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `cod_disc` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `cod_grade` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `cod_horario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `hora_aula`
--
ALTER TABLE `hora_aula`
  MODIFY `cod_hora_aula` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `cod_prof` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
