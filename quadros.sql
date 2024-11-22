-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/11/2024 às 00:18
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quadrosalas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `quadros`
--

CREATE TABLE `quadros` (
  `id` int(11) NOT NULL,
  `sala` varchar(10) DEFAULT NULL,
  `aula` varchar(100) DEFAULT NULL,
  `horario` varchar(50) DEFAULT NULL,
  `professor` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `quadros`
--

INSERT INTO `quadros` (`id`, `sala`, `aula`, `horario`, `professor`) VALUES
(2, '323', 'potuynol', '08:00 - 10:00', 'Prof. João'),
(3, NULL, NULL, '', NULL),
(4, NULL, NULL, '', NULL),
(5, NULL, NULL, '', NULL),
(6, NULL, NULL, '', NULL),
(7, NULL, NULL, '', NULL),
(8, NULL, NULL, '', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `quadros`
--
ALTER TABLE `quadros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `quadros`
--
ALTER TABLE `quadros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
