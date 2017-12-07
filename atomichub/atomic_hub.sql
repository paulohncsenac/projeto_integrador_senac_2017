-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Dez-2017 às 20:30
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

--
-- Extraindo dados da tabela `elementos`
--

INSERT INTO `elementos` (`id_elemento`, `nome`, `label`, `numero`, `id_tipo`) VALUES
(1, 'HidrogÃªnio', 'H', 1, 1),
(2, 'HÃ©lio', 'He', 2, 3),
(3, 'LÃ­tio', 'Li', 3, 5),
(4, 'BerÃ­lio', 'Be', 4, 7),
(5, 'Boro', 'B', 5, 4),
(6, 'carbono', 'C', 6, 1),
(7, 'Nitrogenio', 'N', 7, 1),
(8, 'OxigÃªnio', 'O', 8, 1),
(9, 'FlÃºor', 'F', 9, 4),
(10, 'NeÃ´nio', 'Ne', 10, 3),
(11, 'SÃ³dio', 'Na', 11, 5),
(12, 'magnesio', 'Mg', 12, 7),
(13, 'AlumÃ­nio', 'Al', 13, 6),
(14, 'SilÃ­cio', 'Si', 14, 2),
(15, 'FÃ³sforo', 'P', 15, 1),
(16, 'Enxofre', 'S', 16, 1),
(17, 'Cloro', 'Cl', 17, 4),
(18, 'Ãrgonio', 'Ar', 18, 3),
(19, 'PotÃ¡ssio', 'K', 19, 5),
(20, 'CÃ¡lcio', 'Ca', 20, 7),
(21, 'EscÃ¢ndio', 'Es', 21, 8),
(22, 'TitÃ¢nio', 'Ti', 22, 8),
(23, 'Vanadio', 'V', 23, 8),
(24, 'CrÃ´mo', 'Cr', 24, 8),
(25, 'ManganÃªs', 'Mn', 25, 8),
(26, 'Ferro', 'Fe', 26, 8),
(27, 'Cobalto', 'Co', 27, 8),
(28, 'NÃ­quel', 'Ni', 28, 8),
(29, 'Cobre', 'Cu', 29, 8),
(30, 'Zinco', 'Zn', 30, 8),
(31, 'GÃ¡lio', 'Ga', 31, 6),
(32, 'GermÃ¢nio', 'Ge', 32, 2),
(33, 'ArsÃªnio', 'As', 33, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_de_elementos`
--

CREATE TABLE `tipos_de_elementos` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipos_de_elementos`
--

INSERT INTO `tipos_de_elementos` (`id_tipo`, `tipo`) VALUES
(1, 'nao-metais'),
(2, 'semi-metais'),
(3, 'gases-nobres'),
(4, 'halogenios'),
(5, 'metais-alcalinos'),
(6, 'metais-representativos'),
(7, 'metais-alcalino-terrosos'),
(8, 'metais-de-transicao'),
(9, 'lantanidios'),
(10, 'actinidios');

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
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tipos_de_elementos`
--
ALTER TABLE `tipos_de_elementos`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
