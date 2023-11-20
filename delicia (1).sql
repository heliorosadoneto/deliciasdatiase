-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Out-2023 às 16:26
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `delicia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(225) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `token`, `email`, `nome`, `senha`) VALUES
(2, '1', 'helio@gmail.com', 'Helio', '141474');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` bigint(20) NOT NULL,
  `un` int(255) NOT NULL,
  `produto` varchar(45) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `tipo_venda` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `un`, `produto`, `preco`, `data`, `hora`) VALUES
(150, 0, 'Salgados', 5.00, '2023-09-27', '19:26:43'),
(151, 0, 'Salgado assado', 6.00, '2023-09-27', '19:26:43'),
(152, 0, 'Salgado assado', 6.00, '2023-09-27', '19:26:43'),
(153, 0, 'Bolo de pote', 5.00, '2023-09-27', '19:26:43'),
(154, 0, 'Trufa', 3.00, '2023-09-27', '19:26:43'),
(155, 0, 'Espetinho', 8.00, '2023-09-27', '19:26:43'),
(156, 0, 'Café', 2.00, '2023-09-28', '04:05:11'),
(157, 0, 'Café', 2.00, '2023-09-28', '04:05:11'),
(158, 0, 'Cappuccino', 4.00, '2023-09-28', '04:05:11'),
(159, 0, 'Achocolatado', 5.00, '2023-09-28', '04:05:11'),
(160, 0, 'Achocolatado', 5.00, '2023-09-28', '04:05:11'),
(161, 0, 'Tridant', 2.50, '2023-09-28', '04:05:11'),
(162, 0, 'Salgados', 5.00, '2023-09-28', '00:48:51'),
(163, 0, 'Cachorro quente', 10.00, '2023-09-29', '11:49:52'),
(164, 0, 'Salgados', 5.00, '2023-09-29', '11:49:52'),
(165, 10, 'Cachorro quente', 10.00, '2023-09-29', '12:04:21'),
(166, 10, 'Cachorro quente', 100.00, '2023-09-29', '12:07:34'),
(167, 1, 'Salgados', 5.00, '2023-09-29', '12:08:12'),
(168, 4, 'Cachorro quente', 40.00, '2023-09-29', '13:15:02'),
(169, 3, 'Salgados', 15.00, '2023-09-29', '13:15:02'),
(170, 2, 'Café', 4.00, '2023-09-29', '13:15:02'),
(171, 2, 'Refrigerante', 10.00, '2023-09-29', '13:15:02');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
