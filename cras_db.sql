-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10-Mar-2017 às 00:47
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cras_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bf_estados`
--

CREATE TABLE `bf_estados` (
  `Id` int(11) NOT NULL,
  `Tecnico` varchar(100) NOT NULL,
  `MotivoDesligamento` int(11) NOT NULL,
  `DataEntrada` date NOT NULL,
  `DataSaida` date NOT NULL,
  `TipoInstrumental` int(11) NOT NULL,
  `MotivoDemanda` int(11) NOT NULL,
  `Situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bf_usuarios`
--

CREATE TABLE `bf_usuarios` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Endereco` varchar(255) NOT NULL,
  `Bairro` varchar(100) NOT NULL,
  `Telefone` int(11) NOT NULL,
  `Cpf` int(11) NOT NULL,
  `Nis` int(11) NOT NULL,
  `Situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bf_estados`
--
ALTER TABLE `bf_estados`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bf_usuarios`
--
ALTER TABLE `bf_usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bf_estados`
--
ALTER TABLE `bf_estados`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bf_usuarios`
--
ALTER TABLE `bf_usuarios`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
