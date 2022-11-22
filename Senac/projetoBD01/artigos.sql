-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Set-2022 às 22:46
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `artigos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `dataCad` date NOT NULL,
  `tipoUser` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `nome`, `img`, `email`, `senha`, `dataCad`, `tipoUser`) VALUES
(17, 'Tati', '632c98a28d36a.png', 'tati@gmail.com', '123456', '2022-09-22', 'adm'),
(18, 'eu', '632c9b0b96a8a.png', 'tati2@gmail.com', '12132', '2022-09-22', 'adm'),
(19, 'alguém', '632c9bb15ef7a.png', 'alguem@gmail.com', '123456', '2022-09-22', 'adm'),
(20, 'uma pessoa', '632c9c123c3f0.png', 'umapessoa@gmail.com', '123456', '2022-09-22', 'adm'),
(21, 'Tati', '632ca37eb05c8.png', 'tati@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-09-22', 'adm'),
(22, 'Outra pessoa', '632ca3b9ae43e.png', 'outra@gmail.com', 'c33367701511b4f6020ec61ded352059', '2022-09-22', 'adm'),
(23, 'jajajaja', '632ca65661a68.png', 'jajaja@gmail.com', '698dc19d489c4e4db73e28a713eab07b', '2022-09-22', 'adm'),
(24, 'Tati', '632ca6b4c706d.png', 'tati@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-09-22', 'adm'),
(25, 'teste02', '632ca6d297f60.png', 'teste@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-09-22', 'adm'),
(26, 'raul', '632ca802e8902.png', 'raul@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-09-22', 'adm'),
(27, 'Teste05', '632cacd9a1609.png', 'teste5@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-09-22', 'adm'),
(28, 'Teste 00008', '632cb94f4a94f.png', 'tati0003@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-09-22', 'adm'),
(29, 'Teste 00009', '632cb9a4e381f.png', 'teste00009@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-09-22', 'adm'),
(30, 'Teste23', '632cc8d706b04.png', 'prancheta@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2022-09-22', 'adm'),
(31, 'Teste 55', '632cc979124a6.png', 'prancheta2@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-09-22', 'adm'),
(32, 'Teste 5555555555556', '632cc9a39c7e6.png', 'prancheta03@gmail.com', '202cb962ac59075b964b07152d234b70', '2022-09-22', 'adm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
