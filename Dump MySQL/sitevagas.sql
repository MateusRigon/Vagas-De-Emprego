-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2020 às 00:36
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitevagas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `codigo` int(11) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`codigo`, `login`, `senha`) VALUES
(4, 'admin', '1234'),
(6, 'mateus', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vagas`
--

CREATE TABLE `vagas` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `descricao` varchar(1000) NOT NULL,
  `salario` varchar(40) NOT NULL,
  `cidade` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vagas`
--

INSERT INTO `vagas` (`codigo`, `titulo`, `descricao`, `salario`, `cidade`) VALUES
(97, 'Programador node', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in egestas nibh, ac laoreet nulla. Pellentesque hendrerit semper quam, non scelerisque lorem varius a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc eget bibendum sem. Duis nec purus in libero efficitur ultricies. Praesent id neque eget massa gravida tincidunt ac efficitur lorem. Mauris imperdiet consequat sollicitudin. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '2500', 'Porto Alegre'),
(98, 'Programador PHP', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in egestas nibh, ac laoreet nulla. Pellentesque hendrerit semper quam, non scelerisque lorem varius a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc eget bibendum sem. Duis nec purus in libero efficitur ultricies. Praesent id neque eget massa gravida tincidunt ac efficitur lorem. Mauris imperdiet consequat sollicitudin. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '2500', 'Porto Alegre'),
(99, 'Programador node', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam in egestas nibh, ac laoreet nulla. Pellentesque hendrerit semper quam, non scelerisque lorem varius a. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nunc eget bibendum sem. Duis nec purus in libero efficitur ultricies. Praesent id neque eget massa gravida tincidunt ac efficitur lorem. Mauris imperdiet consequat sollicitudin. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '2500', 'Esteio');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `vagas`
--
ALTER TABLE `vagas`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `vagas`
--
ALTER TABLE `vagas`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
