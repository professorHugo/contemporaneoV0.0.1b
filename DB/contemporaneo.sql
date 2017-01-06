-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Dez-2016 às 05:59
-- Versão do servidor: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contemporaneo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_aulas`
--

CREATE TABLE `agenda_aulas` (
  `id` int(11) NOT NULL,
  `matricula_aluno` int(11) DEFAULT NULL,
  `nome_aluno` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `data` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `sala` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `prof` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `entrada` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `saida` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `materia` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL,
  `qtd_hora` float NOT NULL,
  `valor` float NOT NULL,
  `pagamento` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `agenda_aulas`
--

INSERT INTO `agenda_aulas` (`id`, `matricula_aluno`, `nome_aluno`, `data`, `sala`, `prof`, `entrada`, `saida`, `materia`, `qtd_hora`, `valor`, `pagamento`) VALUES
(1, 1, 'Hugo Christian P. Gomes', '2016-12-30', 'sala1', 'Clementino', '8', '8.5', 'Geografia', 0.5, 67.25, 'nao'),
(2, 2, 'Ariosvaldo da Silva Junior', '2016-12-30', 'sala1', 'Clementino', '8.5', '9', 'Geografia', 0.5, 67.25, 'nao'),
(3, 3, 'Rosinalva da Silva', '2016-12-30', 'sala1', 'Clementino', '9', '9.5', 'Geografia', 0.5, 67.25, 'nao'),
(4, 2, 'Ariosvaldo da Silva Junior', '2016-12-30', 'sala2', 'Clementino', '8', '8.5', 'Geografia', 0.5, 67.25, 'nao'),
(5, 4, 'Risos Cledivanderson', '2016-12-29', 'sala1', 'Clementino', '8', '8.5', 'Geografia', 0.5, 67.25, 'nao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `matricula_aluno` int(11) NOT NULL,
  `nome_aluno` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `telefone_aluno` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_mae` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `telefone_mae` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `nome_pai` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `telefone_pai` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `foto_aluno` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'img/fotos/default.png'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `alunos`
--

INSERT INTO `alunos` (`matricula_aluno`, `nome_aluno`, `telefone_aluno`, `nome_mae`, `telefone_mae`, `nome_pai`, `telefone_pai`, `foto_aluno`) VALUES
(1, 'Hugo Christian P. Gomes', '11946792419', 'Maria do Socorro Gomes Silva', '11993073728', 'Jose Pereira da Silva', '', 'img/fotos/default.png'),
(2, 'Ariosvaldo da Silva Junior', NULL, NULL, NULL, NULL, NULL, 'img/fotos/default.png'),
(3, 'Rosinalva da Silva', NULL, NULL, NULL, NULL, NULL, 'img/fotos/default.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materias_disponiveis`
--

CREATE TABLE `materias_disponiveis` (
  `id` int(11) NOT NULL,
  `materia` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `materias_disponiveis`
--

INSERT INTO `materias_disponiveis` (`id`, `materia`) VALUES
(1, 'MatemÃ¡tica'),
(2, 'PortuguÃªs'),
(3, 'HistÃ³ria'),
(4, 'Geografia'),
(5, 'CiÃªncias'),
(6, 'FÃ­sica'),
(7, 'Biologia'),
(8, 'InglÃªs'),
(9, 'QuÃ­mica'),
(10, 'Espanhol'),
(11, 'Sociologia'),
(12, 'Filosofia'),
(13, 'Artes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professores`
--

CREATE TABLE `professores` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `usuarios` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `senha_md5` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `materia` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `professores`
--

INSERT INTO `professores` (`id`, `nome`, `usuarios`, `senha`, `senha_md5`, `materia`) VALUES
(1, 'Clementino', 'clementino', 'clementino', '', 'Geografia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala1`
--

CREATE TABLE `sala1` (
  `id` int(11) NOT NULL,
  `entrada` float DEFAULT NULL,
  `saida` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `exibir_entrada` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `exibir_saida` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `sala1`
--

INSERT INTO `sala1` (`id`, `entrada`, `saida`, `status`, `exibir_entrada`, `exibir_saida`) VALUES
(1, 8, 8.5, 0, '08:00', '08:30'),
(2, 8.5, 9, 0, '08:30', '09:00'),
(3, 9, 9.5, 0, '09:00', '09:30'),
(4, 9.5, 10, 0, '09:30', '10:00'),
(5, 10, 10.5, 0, '10:00', '10:30'),
(6, 10.5, 11, 0, '10:30', '11:00'),
(7, 11, 11.5, 0, '11:00', '11:30'),
(8, 11.5, 12, 0, '11:30', '12:00'),
(9, 12, 12.5, 0, '12:00', '12:30'),
(10, 12.5, 13, 0, '12:30', '13:00'),
(11, 13, 13.5, 0, '13:00', '13:30'),
(12, 13.5, 14, 0, '13:30', '14:00'),
(13, 14, 14.5, 0, '14:00', '14:30'),
(14, 14.5, 15, 0, '14:30', '15:00'),
(15, 15, 15.5, 0, '15:00', '15:30'),
(16, 15.5, 16, 0, '15:30', '16:00'),
(17, 16, 16.5, 0, '16:00', '16:30'),
(18, 16.5, 17, 0, '16:30', '17:00'),
(19, 17, 17.5, 0, '17:00', '17:30'),
(20, 17.5, 18, 0, '17:30', '18:00'),
(21, 18, 18.5, 0, '18:00', '18:30'),
(22, 18.5, 19, 0, '18:30', '19:00'),
(23, 19, 19.5, 0, '19:00', '19:30'),
(24, 19.5, 20, 0, '19:30', '20:00'),
(25, 20, 20.5, 0, '20:00', '20:30'),
(26, 20.5, 21, 0, '20:30', '21:00'),
(27, 21, 21.5, 0, '21:00', '21:30'),
(28, 21.5, 22, 0, '21:30', '22:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala2`
--

CREATE TABLE `sala2` (
  `id` int(11) NOT NULL,
  `entrada` float DEFAULT NULL,
  `saida` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `exibir_entrada` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `exibir_saida` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `sala2`
--

INSERT INTO `sala2` (`id`, `entrada`, `saida`, `status`, `exibir_entrada`, `exibir_saida`) VALUES
(1, 8, 8.5, 0, '08:00', '08:30'),
(2, 8.5, 9, 0, '08:30', '09:00'),
(3, 9, 9.5, 0, '09:00', '09:30'),
(4, 9.5, 10, 0, '09:30', '10:00'),
(5, 10, 10.5, 0, '10:00', '10:30'),
(6, 10.5, 11, 0, '10:30', '11:00'),
(7, 11, 11.5, 0, '11:00', '11:30'),
(8, 11.5, 12, 0, '11:30', '12:00'),
(9, 12, 12.5, 0, '12:00', '12:30'),
(10, 12.5, 13, 0, '12:30', '13:00'),
(11, 13, 13.5, 0, '13:00', '13:30'),
(12, 13.5, 14, 0, '13:30', '14:00'),
(13, 14, 14.5, 0, '14:00', '14:30'),
(14, 14.5, 15, 0, '14:30', '15:00'),
(15, 15, 15.5, 0, '15:00', '15:30'),
(16, 15.5, 16, 0, '15:30', '16:00'),
(17, 16, 16.5, 0, '16:00', '16:30'),
(18, 16.5, 17, 0, '16:30', '17:00'),
(19, 17, 17.5, 0, '17:00', '17:30'),
(20, 17.5, 18, 0, '17:30', '18:00'),
(21, 18, 18.5, 0, '18:00', '18:30'),
(22, 18.5, 19, 0, '18:30', '19:00'),
(23, 19, 19.5, 0, '19:00', '19:30'),
(24, 19.5, 20, 0, '19:30', '20:00'),
(25, 20, 20.5, 0, '20:00', '20:30'),
(26, 20.5, 21, 0, '20:30', '21:00'),
(27, 21, 21.5, 0, '21:00', '21:30'),
(28, 21.5, 22, 0, '21:30', '22:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala3`
--

CREATE TABLE `sala3` (
  `id` int(11) NOT NULL,
  `entrada` float DEFAULT NULL,
  `saida` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `exibir_entrada` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `exibir_saida` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `sala3`
--

INSERT INTO `sala3` (`id`, `entrada`, `saida`, `status`, `exibir_entrada`, `exibir_saida`) VALUES
(1, 8, 8.5, 0, '08:00', '08:30'),
(2, 8.5, 9, 0, '08:30', '09:00'),
(3, 9, 9.5, 0, '09:00', '09:30'),
(4, 9.5, 10, 0, '09:30', '10:00'),
(5, 10, 10.5, 0, '10:00', '10:30'),
(6, 10.5, 11, 0, '10:30', '11:00'),
(7, 11, 11.5, 0, '11:00', '11:30'),
(8, 11.5, 12, 0, '11:30', '12:00'),
(9, 12, 12.5, 0, '12:00', '12:30'),
(10, 12.5, 13, 0, '12:30', '13:00'),
(11, 13, 13.5, 0, '13:00', '13:30'),
(12, 13.5, 14, 0, '13:30', '14:00'),
(13, 14, 14.5, 0, '14:00', '14:30'),
(14, 14.5, 15, 0, '14:30', '15:00'),
(15, 15, 15.5, 0, '15:00', '15:30'),
(16, 15.5, 16, 0, '15:30', '16:00'),
(17, 16, 16.5, 0, '16:00', '16:30'),
(18, 16.5, 17, 0, '16:30', '17:00'),
(19, 17, 17.5, 0, '17:00', '17:30'),
(20, 17.5, 18, 0, '17:30', '18:00'),
(21, 18, 18.5, 0, '18:00', '18:30'),
(22, 18.5, 19, 0, '18:30', '19:00'),
(23, 19, 19.5, 0, '19:00', '19:30'),
(24, 19.5, 20, 0, '19:30', '20:00'),
(25, 20, 20.5, 0, '20:00', '20:30'),
(26, 20.5, 21, 0, '20:30', '21:00'),
(27, 21, 21.5, 0, '21:00', '21:30'),
(28, 21.5, 22, 0, '21:30', '22:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala4`
--

CREATE TABLE `sala4` (
  `id` int(11) NOT NULL,
  `entrada` float DEFAULT NULL,
  `saida` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `exibir_entrada` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `exibir_saida` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `sala4`
--

INSERT INTO `sala4` (`id`, `entrada`, `saida`, `status`, `exibir_entrada`, `exibir_saida`) VALUES
(1, 8, 8.5, 0, '08:00', '08:30'),
(2, 8.5, 9, 0, '08:30', '09:00'),
(3, 9, 9.5, 0, '09:00', '09:30'),
(4, 9.5, 10, 0, '09:30', '10:00'),
(5, 10, 10.5, 0, '10:00', '10:30'),
(6, 10.5, 11, 0, '10:30', '11:00'),
(7, 11, 11.5, 0, '11:00', '11:30'),
(8, 11.5, 12, 0, '11:30', '12:00'),
(9, 12, 12.5, 0, '12:00', '12:30'),
(10, 12.5, 13, 0, '12:30', '13:00'),
(11, 13, 13.5, 0, '13:00', '13:30'),
(12, 13.5, 14, 0, '13:30', '14:00'),
(13, 14, 14.5, 0, '14:00', '14:30'),
(14, 14.5, 15, 0, '14:30', '15:00'),
(15, 15, 15.5, 0, '15:00', '15:30'),
(16, 15.5, 16, 0, '15:30', '16:00'),
(17, 16, 16.5, 0, '16:00', '16:30'),
(18, 16.5, 17, 0, '16:30', '17:00'),
(19, 17, 17.5, 0, '17:00', '17:30'),
(20, 17.5, 18, 0, '17:30', '18:00'),
(21, 18, 18.5, 0, '18:00', '18:30'),
(22, 18.5, 19, 0, '18:30', '19:00'),
(23, 19, 19.5, 0, '19:00', '19:30'),
(24, 19.5, 20, 0, '19:30', '20:00'),
(25, 20, 20.5, 0, '20:00', '20:30'),
(26, 20.5, 21, 0, '20:30', '21:00'),
(27, 21, 21.5, 0, '21:00', '21:30'),
(28, 21.5, 22, 0, '21:30', '22:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sala5`
--

CREATE TABLE `sala5` (
  `id` int(11) NOT NULL,
  `entrada` float DEFAULT NULL,
  `saida` float DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `exibir_entrada` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL,
  `exibir_saida` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `sala5`
--

INSERT INTO `sala5` (`id`, `entrada`, `saida`, `status`, `exibir_entrada`, `exibir_saida`) VALUES
(1, 8, 8.5, 0, '08:00', '08:30'),
(2, 8.5, 9, 0, '08:30', '09:00'),
(3, 9, 9.5, 0, '09:00', '09:30'),
(4, 9.5, 10, 0, '09:30', '10:00'),
(5, 10, 10.5, 0, '10:00', '10:30'),
(6, 10.5, 11, 0, '10:30', '11:00'),
(7, 11, 11.5, 0, '11:00', '11:30'),
(8, 11.5, 12, 0, '11:30', '12:00'),
(9, 12, 12.5, 0, '12:00', '12:30'),
(10, 12.5, 13, 0, '12:30', '13:00'),
(11, 13, 13.5, 0, '13:00', '13:30'),
(12, 13.5, 14, 0, '13:30', '14:00'),
(13, 14, 14.5, 0, '14:00', '14:30'),
(14, 14.5, 15, 0, '14:30', '15:00'),
(15, 15, 15.5, 0, '15:00', '15:30'),
(16, 15.5, 16, 0, '15:30', '16:00'),
(17, 16, 16.5, 0, '16:00', '16:30'),
(18, 16.5, 17, 0, '16:30', '17:00'),
(19, 17, 17.5, 0, '17:00', '17:30'),
(20, 17.5, 18, 0, '17:30', '18:00'),
(21, 18, 18.5, 0, '18:00', '18:30'),
(22, 18.5, 19, 0, '18:30', '19:00'),
(23, 19, 19.5, 0, '19:00', '19:30'),
(24, 19.5, 20, 0, '19:30', '20:00'),
(25, 20, 20.5, 0, '20:00', '20:30'),
(26, 20.5, 21, 0, '20:30', '21:00'),
(27, 21, 21.5, 0, '21:00', '21:30'),
(28, 21.5, 22, 0, '21:30', '22:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `salas`
--

CREATE TABLE `salas` (
  `cod_sala` int(11) NOT NULL,
  `nome_sala` varchar(255) COLLATE utf8_general_mysql500_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `salas`
--

INSERT INTO `salas` (`cod_sala`, `nome_sala`) VALUES
(1, 'sala1'),
(2, 'sala2'),
(3, 'sala3'),
(4, 'sala4'),
(5, 'sala5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `usuario_md5` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT 'Usuário com criptografia md5',
  `senha` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `senha_md5` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `departamento` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL,
  `level_acesso` int(11) NOT NULL,
  `foto` varchar(255) COLLATE utf8_general_mysql500_ci NOT NULL DEFAULT 'img/default.png'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `usuario_md5`, `senha`, `senha_md5`, `departamento`, `level_acesso`, `foto`) VALUES
(1, 'Administrador do Sistema', 'master', 'eb0a191797624dd3a48fa681d3061212', 'master', 'eb0a191797624dd3a48fa681d3061212', 'Adm Sis', 0, 'img/fotos/admin.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda_aulas`
--
ALTER TABLE `agenda_aulas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula_aluno`);

--
-- Indexes for table `materias_disponiveis`
--
ALTER TABLE `materias_disponiveis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sala1`
--
ALTER TABLE `sala1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sala2`
--
ALTER TABLE `sala2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sala3`
--
ALTER TABLE `sala3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sala4`
--
ALTER TABLE `sala4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sala5`
--
ALTER TABLE `sala5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salas`
--
ALTER TABLE `salas`
  ADD PRIMARY KEY (`cod_sala`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda_aulas`
--
ALTER TABLE `agenda_aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `materias_disponiveis`
--
ALTER TABLE `materias_disponiveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `professores`
--
ALTER TABLE `professores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
