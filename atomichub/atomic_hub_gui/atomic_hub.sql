-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Nov-2017 às 17:37
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atomic_hub`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `elementos`
--

CREATE TABLE `elementos` (
  `id_elemento` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `label` varchar(3) NOT NULL,
  `numero` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_de_elementos`
--

CREATE TABLE `tipos_de_elementos` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id_elemento`),
  ADD KEY `fk_tipo_elemento` (`id_tipo`);

--
-- Indexes for table `tipos_de_elementos`
--
ALTER TABLE `tipos_de_elementos`
  ADD PRIMARY KEY (`id_tipo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipos_de_elementos`
--
ALTER TABLE `tipos_de_elementos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `elementos`
--
ALTER TABLE `elementos`
  ADD CONSTRAINT `fk_tipo_elemento` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_de_elementos` (`id_tipo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
