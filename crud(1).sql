-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2019 às 15:42
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `address`
--

CREATE TABLE `address` (
  `IDaddress` int(10) NOT NULL,
  `distrito` tinytext NOT NULL,
  `cidade` char(25) NOT NULL,
  `concelho` mediumtext NOT NULL,
  `rua` longtext NOT NULL,
  `cp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `address`
--

INSERT INTO `address` (`IDaddress`, `distrito`, `cidade`, `concelho`, `rua`, `cp`) VALUES
(1, 'Santarem', 'abrantes', 'abrantes', 'Rua cidade the parthenay bloco e 5 a', '2200 238');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `IDusers` int(25) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `idade` smallint(6) NOT NULL,
  `sexo` enum('F','M') DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `IDaddress` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`IDusers`, `nome`, `idade`, `sexo`, `email`, `password`, `IDaddress`) VALUES
(2, 'Paulo', 25, 'M', 'Silva', 'ITm', 1),
(3, 'hbq', 34, '', '', '', NULL),
(4, 'hbq', 34, '', '', '', NULL),
(5, 'hbq', 34, '', '', '', NULL),
(6, 'hbqhjbh', 34, '', '', '', NULL),
(7, 'hbqhjbh', 34, '', '', '', NULL),
(8, 'hbqhjbh', 34, '', '', '', NULL),
(9, 'hbqhjbh', 34, '', '', '', NULL),
(10, 'hbqhjbh', 34, '', '', '', NULL),
(11, 'amskfmsdakf', 324, '', '', '', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`IDaddress`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IDusers`),
  ADD KEY `IDaddress` (`IDaddress`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `address`
--
ALTER TABLE `address`
  MODIFY `IDaddress` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `IDusers` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`IDaddress`) REFERENCES `address` (`IDaddress`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
