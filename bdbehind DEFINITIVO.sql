-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Fev-2023 às 01:36
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
-- Banco de dados: `bdbehind`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpatch`
--

CREATE TABLE `tbpatch` (
  `NomeJogo` varchar(9999) NOT NULL,
  `VersaoPatch` decimal(10,1) NOT NULL,
  `DescricaoPatch` longtext NOT NULL,
  `DataPatch` varchar(10) NOT NULL,
  `Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpatch`
--

INSERT INTO `tbpatch` (`NomeJogo`, `VersaoPatch`, `DescricaoPatch`, `DataPatch`, `Id`) VALUES
('Behind the bushes', '1.2', '- Opção de trocar entre minigun e tiro normal\r\n- Tiro da minigun agora mata todos os inimigos\r\n- Tiro da minigun melhorado:\r\n          de 0.25 para 0.5 de dano\r\n- Buffs no escudo:\r\n          Vida: de 3 para 10 de hp\r\n          Range do escudo aumentada\r\n- Nerfs no escudo: \r\n          Cooldown aumentado:  de 10seg para 30seg', '16/01/2023', 11),
('Behind the bushes', '0.1', '- Lançamento do jogo\r\n- Apenas uma arma\r\n     A arma a lazer, atira um projetil a cada click. Cada projetil da 1 de dano.\r\n- Apenas um tipo de inimigo\r\n     A moita surge dos cantos do mapa e segue o jogador e tira sua vida se chega muito perto. Tem 1 de vida.', '31/07/2022', 12),
('Behind the bushes', '0.7', '- Nova arma:\r\n        Shotgun (Mouse 2):\r\n        Uma double barrel(espingarda) como qualquer outra, dois disparos que lançam 5 projeteis cada, \r\n        Depois dos dois disparos você deve esperar um tempo de cooldown para usar a arma novamente.\r\n        Para desbloquear a shotgun você deve coletar 10 flores (dropadas quando se mata a Moita Florida).\r\n\r\n- Novo Gadget:\r\n        Escudo (tecla E):\r\n        Um escudo que surge em volta do personagem que o protege dos hits dos inimigos.\r\n        Este escudo tem uma quantidade de vida e quando a mesma acaba o escudo desaparece.\r\n        Para usar o escudo novamente basta esperar seu tempo de cooldown e apertar a tecla E.\r\n        Para desbloquear o escudo se você deve coletar 10 batatas assadas \r\n        (dropadas quando se mata a Batata utilizando um lança chamas[tecla F])', '19/09/2022', 13),
('Behind the bushes', '0.8', '- Novo sistema de desbloquear itens (Mercado tecla ESC): \r\n     Agora o jogador pode ESCOLHER qual arma vai comprar, porém, algumas precisam de outras para serem compradas \r\n     (por exemplo: o escudo q precisa de batata assada que só se consegue através do uso do lança chamas).\r\n\r\n- Nova arma:\r\n     Lança Granadas\r\n     Um canhão de mão que gera uma explosao hitkill, \r\n     ou seja onde o projétil acertar todos os inimigos nessa área morrem instantaneamente.\r\n     O Lança granadas conta com 5 munições após sua compra, seu preço é 10 batatas assadas.\r\n     O jogador poderá comprar mais munições no mercado, preço de 15 flores a cada 5 munições.\r\n     A cada tiro o jogador deverá esperar o tempo de cooldown ou reload da arma', '06/12/2022', 14);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`Id`, `NomeUsuario`, `SobrenomeUsuario`, `NickUsuario`, `EmailUsuario`, `SenhaUsuario`, `TipoUsuario`, `HighScore`) VALUES
(6, 'Gabriel', 'Bernardini', 'GabigolBr18', 'gabrielbr1809@gmail.com', '180904be', 'COMUM', 1000),
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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
