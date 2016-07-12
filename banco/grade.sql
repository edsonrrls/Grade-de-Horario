-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Jul-2016 às 16:05
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
  `codigo_disc` int(4) NOT NULL,
  `nome_disc` varchar(150) NOT NULL,
  `nome_curso` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`codigo_disc`, `nome_disc`, `nome_curso`) VALUES
(2, 'Administração Geral', '2'),
(3, 'Teste', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(4, 'teste2', 'Biocombustiveis'),
(5, 'Calculo', 'AnÃ¡lise e Desenvolvimento de Sistemas'),
(6, 'GestÃ£o e Governancia', 'AnÃ¡lise e Desenvolvimento de Sistemas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `grade`
--

CREATE TABLE `grade` (
  `cod_grade` int(10) NOT NULL,
  `codigo_prof` int(11) NOT NULL,
  `codigo_disc` int(11) NOT NULL,
  `codigo_hora` int(11) NOT NULL,
  `curso` varchar(150) NOT NULL,
  `turno` varchar(150) NOT NULL,
  `dia_semana` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `horario`
--

CREATE TABLE `horario` (
  `codigo_hora` int(4) NOT NULL,
  `hora_inicio` varchar(5) NOT NULL,
  `hora_fim` varchar(5) NOT NULL,
  `turno` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `horario`
--

INSERT INTO `horario` (`codigo_hora`, `hora_inicio`, `hora_fim`, `turno`) VALUES
(1, '9', '34', 'Tarde'),
(2, 'yyy', 'yyyy', ''),
(3, '7:30', '8:20', 'ManhÃ£'),
(4, '8:20', '9:10', 'ManhÃ£'),
(5, '9:20', '10:10', 'ManhÃ£'),
(6, '10:10', '11:00', 'ManhÃ£'),
(7, '11:10', '12:00', 'ManhÃ£'),
(8, '12:00', '12:50', 'ManhÃ£');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `codigo_prof` int(4) NOT NULL,
  `nome_prof` varchar(255) NOT NULL,
  `fone_prof` int(12) NOT NULL,
  `email_prof` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`codigo_prof`, `nome_prof`, `fone_prof`, `email_prof`) VALUES
(1, 'Alexandre Marcelino da Silva, Me', 1836365252, ''),
(2, 'Lucilena de Lima, Me', 1836365252, ''),
(3, 'Célia Regina Nugoli Estevam, Dra', 1836365252, ''),
(4, 'Euclides Teixeira Neto, Esp', 1836365252, ''),
(5, 'Fernando Cesar Balbino, Me', 1836365252, ''),
(6, 'Edital Futebol Clube', 99889, 'edsonrrls@hotmail.com'),
(7, 'a', 56, 'wtrwt@dgg'),
(8, 'a', 56, 'wtrwt@dgg'),
(9, 'sdgfgfrdh', 99889, 'wtrwt@dgg'),
(10, 'prof', 1111111111, '2342424@yoyy'),
(11, 'manoÃ©l', 634656, 'fdsgdg@dsgdg'),
(12, 'CÃ©lia Regina Nugoli Estevam, Dra', 1836365252, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`codigo_disc`),
  ADD KEY `codigo_curso` (`nome_curso`);

--
-- Indexes for table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`cod_grade`);

--
-- Indexes for table `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`codigo_hora`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`codigo_prof`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `codigo_disc` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `grade`
--
ALTER TABLE `grade`
  MODIFY `cod_grade` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `horario`
--
ALTER TABLE `horario`
  MODIFY `codigo_hora` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `codigo_prof` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
