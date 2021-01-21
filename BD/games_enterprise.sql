-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jan-2021 às 19:45
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `games_enterprise`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `desenvolvedora`
--

CREATE DATABASE "games_enterprise";

CREATE TABLE `desenvolvedora` (
  `id` int(255) NOT NULL,
  `cnpj` varchar(32) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `responsavel` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `desenvolvedora`
--

INSERT INTO `desenvolvedora` (`id`, `cnpj`, `nome`, `responsavel`, `endereco`) VALUES
(2, '31.928.784/0001-46', 'Ubisoft Montreal', 'Jack Starluck', 'Canadá'),
(3, '05.344.825/0001-47', 'Rockstar North', 'Luck Sky', 'Canadá'),
(4, '16.824.371/0001-28', 'Rockstar South', 'Trevor Philips', 'Londres');

-- --------------------------------------------------------

--
-- Estrutura da tabela `game`
--

CREATE TABLE `game` (
  `id` int(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `personagemprincipal` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `sinopse` text NOT NULL,
  `desenvolvedora` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `game`
--

INSERT INTO `game` (`id`, `nome`, `personagemprincipal`, `categoria`, `sinopse`, `desenvolvedora`) VALUES
(3, 'Rainbow Six Siege', 'Jagger', 'FPS', 'Um jogo de estratégia', 2),
(4, 'GTA 5', 'Trevor', 'Ação', 'Aventura', 3),
(5, 'GTA San Andreas', 'CJ', 'Aventura', 'Jogo bacana de aventura', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `desenvolvedora`
--
ALTER TABLE `desenvolvedora`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desenvolvedora` (`desenvolvedora`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `desenvolvedora`
--
ALTER TABLE `desenvolvedora`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `game`
--
ALTER TABLE `game`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `game`
--
ALTER TABLE `game`
  ADD CONSTRAINT `fk_desenvolvedora` FOREIGN KEY (`desenvolvedora`) REFERENCES `desenvolvedora` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
