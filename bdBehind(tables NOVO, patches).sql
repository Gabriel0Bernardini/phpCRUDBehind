-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jan-2023 às 11:48
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdbehind`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpatch`
--

CREATE TABLE `tbpatch` (
  `NomeJogo` varchar(9999) NOT NULL,
  `VersaoPatch` float NOT NULL,
  `DescricaoPatch` longtext NOT NULL,
  `DataPatch` varchar(10) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbpatch`
--

INSERT INTO `tbpatch` (`NomeJogo`, `VersaoPatch`, `DescricaoPatch`, `DataPatch`, `Id`) VALUES
('', 1.23, '', '', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `Id` int(11) NOT NULL,
  `NomeUsuario` varchar(30) NOT NULL,
  `SobrenomeUsuario` varchar(50) NOT NULL,
  `NickUsuario` varchar(30) NOT NULL,
  `EmailUsuario` varchar(50) NOT NULL,
  `SenhaUsuario` varchar(30) NOT NULL,
  `TipoUsuario` char(5) NOT NULL,
  `HighScore` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`Id`, `NomeUsuario`, `SobrenomeUsuario`, `NickUsuario`, `EmailUsuario`, `SenhaUsuario`, `TipoUsuario`, `HighScore`) VALUES
(6, 'Gabriel', 'Bernardini', 'GabigolBr18', 'gabrielbr1809@gmail.com', '180904be', 'COMUM', 0),
(9, 'Rodolfo', 'Miranda', 'Wojtzz', 'wojtzz@gmail.com', '12345R', 'ADMIN', 0),
(10, 'Teste', 'Testes3', 'Test34', 'teste@teste', 'teste', 'COMUM', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbpatch`
--
ALTER TABLE `tbpatch`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbpatch`
--
ALTER TABLE `tbpatch`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
