-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2022 às 17:56
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `filmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ator`
--

CREATE TABLE `ator` (
  `Id_ator` int(2) NOT NULL,
  `Nome` char(40) DEFAULT NULL,
  `Nacionalidade` char(15) DEFAULT NULL,
  `DataNascimento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ator`
--

INSERT INTO `ator` (`Id_ator`, `Nome`, `Nacionalidade`, `DataNascimento`) VALUES
(1, 'Robert Downey Jr', 'EUA', '1965-04-04'),
(2, 'Chris Evans', 'EUA', '1981-07-13'),
(3, 'Mark Ruffalo', 'EUA', '1967-09-22'),
(4, 'Chris Hemsworth', 'Australiano', '1983-08-11'),
(5, 'Scarlett Johansson', 'EUA', '1984-11-22'),
(6, 'Jeremy Renner', 'EUA', '1971-01-07'),
(7, 'Tom Hiddleston', 'UK', '1981-02-09'),
(8, 'Clark Gregg', 'EUA', '1962-04-02'),
(9, 'Cobie Smulders', 'Canada', '1982-04-03'),
(10, 'Stellan Skarsgård', 'EUA', '1951-12-21'),
(11, 'Samuel L. Jackson', 'EUA', '1948-12-21'),
(12, 'Elizabeth Olsen', 'EUA', '1989-02-16'),
(13, 'Aaron Johnson', 'UK', '1990-06-13'),
(14, 'James Spader', 'EUA', '1960-02-07'),
(15, 'Paul Bettany', 'UK', '1971-05-27'),
(16, 'Don Cheadle', 'EUA', '1964-11-29'),
(17, 'Andy Serkis', 'UK', '1964-04-20'),
(18, 'Anthony Mackie', 'EUA', '1978-09-23'),
(19, 'Thomas Kretschmann', 'Alemanha', '1962-09-08'),
(20, 'Linda Cardellini', 'EUA', '1975-06-25'),
(21, 'Josh Brolin', 'EUA', '1968-02-12'),
(22, 'Idris Elba', 'EUA', '1972-09-06'),
(23, 'Hayley Atwell', 'UK', '1982-04-05'),
(24, 'Tom Holland', 'UK', '1996-06-01'),
(25, 'Chadwick Boseman', 'EUA', '1976-11-29'),
(26, 'Sebastian Stan', 'Romenia', '1982-08-13'),
(27, 'Peter Dinklage', 'EUA', '1969-06-11'),
(28, 'Benedict Wong', 'UK', '1971-07-03'),
(29, 'Pom Klementieff', 'Canada', '1986-05-03'),
(30, 'Karen Gillan', 'Escócia', '1987-11-28'),
(31, 'Dave Bautista', 'EUA', '1969-01-18'),
(32, 'Zoe Saldaña', 'EUA', '1978-06-19'),
(33, 'Vin Diesel', 'EUA', '1967-07-18'),
(34, 'Bradley Cooper', 'EUA', '1975-01-05'),
(35, 'Gwyneth Paltrow', 'EUA', '1972-09-27'),
(36, 'Benicio del Toro', 'França', '1967-02-19'),
(37, 'Stan Lee', 'EUA', '1922-12-28'),
(38, 'Chris Pratt', 'EUA', '1979-07-21'),
(39, 'Danai Gurira', 'EUA', '1978-02-14'),
(40, 'Letitia Wright', 'EUA', '1993-08-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `Id_filme` int(2) NOT NULL,
  `Titulo` char(40) DEFAULT NULL,
  `Realizador` char(20) DEFAULT NULL,
  `Argumentista` char(30) DEFAULT NULL,
  `Tipo` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`Id_filme`, `Titulo`, `Realizador`, `Argumentista`, `Tipo`) VALUES
(1, 'the Avengers', 'Joss Whedon', 'Joss Whedon', 'Super herois'),
(2, 'Avengers: age of ultron', 'Joss Whedon', 'Joss Whedon', 'Super herois'),
(3, 'Avengers: infinity war', 'Anthony and Joe Russ', 'Christopher Markus & Stephen M', 'Super herois'),
(4, 'Avengers:End Game', 'Anthony and Joe Russ', 'Christopher Markus & Stephen M', 'Super herois');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagem`
--

CREATE TABLE `personagem` (
  `Id_personagem` int(2) NOT NULL,
  `Id_ator` int(2) DEFAULT NULL,
  `Id_filme` int(2) DEFAULT NULL,
  `nome` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `personagem`
--

INSERT INTO `personagem` (`Id_personagem`, `Id_ator`, `Id_filme`, `nome`) VALUES
(1, 1, 1, 'Iron Man'),
(2, 1, 2, 'Iron Man'),
(3, 1, 3, 'Iron Man'),
(4, 1, 4, 'Iron Man'),
(5, 2, 1, 'Captain america'),
(6, 2, 2, 'Captain america'),
(7, 2, 3, 'Captain america'),
(8, 2, 4, 'Captain america'),
(9, 3, 1, 'Hulk/Bruce Banner'),
(10, 3, 2, 'Hulk/Bruce Banner'),
(11, 3, 3, 'Hulk/Bruce Banner'),
(12, 3, 4, 'Hulk/Bruce Banner'),
(13, 4, 1, 'Thor'),
(14, 4, 2, 'Thor'),
(15, 4, 3, 'Thor'),
(16, 4, 4, 'Thor'),
(17, 5, 1, 'Black Widow'),
(18, 5, 2, 'Black Widow'),
(19, 5, 3, 'Black Widow'),
(20, 5, 4, 'Black Widow'),
(21, 6, 1, 'Hawkeye'),
(22, 6, 2, 'Hawkeye'),
(23, 6, 3, 'Hawkeye'),
(24, 6, 4, 'Hawkeye'),
(25, 7, 1, 'Loki'),
(26, 7, 3, 'Loki'),
(27, 7, 4, 'Loki'),
(28, 8, 1, 'Phil Coulson'),
(29, 9, 1, 'Maria Hill'),
(30, 9, 2, 'Maria Hill'),
(31, 10, 1, 'Erik Selvig'),
(32, 11, 1, 'Nick Fury'),
(33, 11, 2, 'Nick Fury'),
(34, 11, 3, 'Nick Fury'),
(35, 11, 4, 'Nick Fury'),
(36, 12, 2, 'Wanda Maximoff'),
(37, 12, 3, 'Wanda Maximoff'),
(38, 12, 4, 'Wanda Maximoff'),
(39, 13, 2, 'Pietro Maximoff'),
(40, 14, 2, 'Ultron'),
(41, 15, 2, 'Vision'),
(42, 15, 3, 'Vision'),
(43, 15, 4, 'Vision'),
(44, 16, 3, 'James Rhodes'),
(45, 16, 4, 'James Rhodes'),
(46, 17, 2, 'Ulysses Klaw'),
(47, 18, 3, 'Sam Wilson'),
(48, 18, 4, 'Sam Wilson'),
(49, 19, 2, 'Baron Wolfgang von Strucker'),
(50, 20, 3, 'Laura Barton'),
(51, 20, 4, 'Laura Barton'),
(52, 21, 3, 'Thanos'),
(53, 21, 4, 'Thanos'),
(54, 22, 3, 'Heimdall'),
(55, 23, 4, 'Peggy Carter'),
(56, 24, 3, 'spider man'),
(57, 24, 4, 'spider man'),
(58, 25, 3, 'T\'Challa'),
(59, 25, 4, 'T\'Challa'),
(60, 26, 3, 'Bucky Barnes'),
(61, 26, 4, 'Bucky Barnes'),
(62, 27, 3, 'Eitri'),
(63, 27, 4, 'Eitri'),
(64, 28, 3, 'Wong'),
(65, 28, 4, 'Wong'),
(66, 29, 3, 'Mantis'),
(67, 29, 4, 'Mantis'),
(68, 30, 3, 'nebula'),
(69, 30, 4, 'nebula'),
(70, 31, 3, 'drax the destroyer'),
(71, 31, 4, 'drax the destroyer'),
(72, 32, 3, 'Gamora'),
(73, 32, 4, 'Gamora'),
(74, 33, 3, 'Groot'),
(75, 33, 4, 'Groot'),
(76, 34, 3, 'Rocket'),
(77, 34, 4, 'Rocket'),
(78, 35, 3, 'Pepper  Potts'),
(79, 35, 4, 'Pepper Potts'),
(80, 36, 4, 'The Colector'),
(81, 38, 3, 'Peter Quill/star lord'),
(82, 38, 4, 'Peter Quill/star lord'),
(83, 39, 3, 'Okoye'),
(84, 39, 4, 'Okoye'),
(85, 40, 3, 'Shuri'),
(86, 40, 4, 'Shuri');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ator`
--
ALTER TABLE `ator`
  ADD PRIMARY KEY (`Id_ator`);

--
-- Índices para tabela `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`Id_filme`);

--
-- Índices para tabela `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`Id_personagem`),
  ADD KEY `Id_actor` (`Id_ator`),
  ADD KEY `Id_filme` (`Id_filme`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ator`
--
ALTER TABLE `ator`
  MODIFY `Id_ator` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `filme`
--
ALTER TABLE `filme`
  MODIFY `Id_filme` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `personagem`
--
ALTER TABLE `personagem`
  MODIFY `Id_personagem` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `personagem`
--
ALTER TABLE `personagem`
  ADD CONSTRAINT `personagem_ibfk_1` FOREIGN KEY (`Id_ator`) REFERENCES `ator` (`Id_ator`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `personagem_ibfk_2` FOREIGN KEY (`Id_filme`) REFERENCES `filme` (`Id_filme`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
