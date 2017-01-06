-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Dez-2016 às 20:29
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
-- Estrutura da tabela `sala5`
--

CREATE TABLE `sala5` (
  `id` int(11) NOT NULL PRIMARY KEY,
  `entrada` float,
  `saida` float,
  `status` int(11) NOT NULL DEFAULT '0',
  `exibir_entrada` varchar(255),
  `exibir_saida` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci;

--
-- Extraindo dados da tabela `horarios_entrada`
--

INSERT INTO `sala5` (`id`, `entrada`, `saida`, `status`,`exibir_entrada`,`exibir_saida`) VALUES
(1, 8, 8.5, 1,"08:00","08:30"),
(2, 8.5, 9, 0,"08:30","09:00"),
(3, 9, 9.5, 0,"09:00","09:30"),
(4, 9.5, 10, 0,"09:30","10:00"),
(5, 10, 10.5, 0,"10:00","10:30"),
(6, 10.5, 11, 0,"10:30","11:00"),
(7, 11, 11.5, 0,"11:00","11:30"),
(8, 11.5, 12, 0,"11:30","12:00"),
(9, 12, 12.5, 0,"12:00","12:30"),
(10, 12.5, 13, 0,"12:30","13:00"),
(11, 13, 13.5, 0,"13:00","13:30"),
(12, 13.5, 14, 0,"13:30","14:00"),
(13, 14, 14.5, 0,"14:00","14:30"),
(14, 14.5, 15, 0,"14:30","15:00"),
(15, 15, 15.5, 0,"15:00","15:30"),
(16, 15.5, 16, 0,"15:30","16:00"),
(17, 16, 16.5, 0,"16:00","16:30"),
(18, 16.5, 17, 0,"16:30","17:00"),
(19, 17, 17.5, 0,"17:00","17:30"),
(20, 17.5, 18, 0,"17:30","18:00"),
(21, 18, 18.5, 0,"18:00","18:30"),
(22, 18.5, 19, 0,"18:30","19:00"),
(23, 19, 19.5, 0,"19:00","19:30"),
(24, 19.5, 20, 0,"19:30","20:00"),
(25, 20, 20.5, 0,"20:00","20:30"),
(26, 20.5, 21, 0,"20:30","21:00"),
(27, 21, 21.5, 0,"21:00","21:30"),
(28, 21.5, 22, 0,"21:30","22:00");

--
-- Indexes for dumped tables
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
