-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Ago-2022 às 05:59
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tbarduino`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbtempo`
--

CREATE TABLE `tbtempo` (
  `idtempo` int(11) NOT NULL,
  `tempo` int(11) NOT NULL,
  `tempo2` int(11) NOT NULL,
  `datahora` datetime NOT NULL DEFAULT current_timestamp(),
  `data` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbtempo`
--

INSERT INTO `tbtempo` (`idtempo`, `tempo`,`tempo2`, `datahora`, `data`) VALUES
(1, 200, '2022-08-05 00:00:00', '2022-08-05'),
(2, 2500, '2022-08-05 00:00:00', '2022-08-05'),
(3, 1000, '2022-08-05 00:40:54', '2022-08-05');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbtempo`
--
ALTER TABLE `tbtempo`
  ADD PRIMARY KEY (`idtempo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbtempo`
--
ALTER TABLE `tbtempo`
  MODIFY `idtempo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
