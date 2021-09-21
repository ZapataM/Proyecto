-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2021 at 03:32 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_withus`
--

-- --------------------------------------------------------

--
-- Table structure for table `encuesta_depresion`
--

CREATE TABLE `encuesta_depresion` (
  `codUsuarios` int(15) NOT NULL,
  `tristeza` text NOT NULL,
  `llorar` text NOT NULL,
  `dormir_mal` text NOT NULL,
  `nerviosismo` text NOT NULL,
  `pesimismo` text NOT NULL,
  `inseguridad` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `encuesta_depresion`
--

INSERT INTO `encuesta_depresion` (`codUsuarios`, `tristeza`, `llorar`, `dormir_mal`, `nerviosismo`, `pesimismo`, `inseguridad`) VALUES
(6, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `encuesta_emocional`
--

CREATE TABLE `encuesta_emocional` (
  `codUsuario` int(100) NOT NULL,
  `estado_animo` text NOT NULL,
  `preocupaciones` text NOT NULL,
  `toma_decisiones` text NOT NULL,
  `concentracion` text NOT NULL,
  `emocionesysentir` text NOT NULL,
  `satisfaccion_ser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `encuesta_emocional`
--

INSERT INTO `encuesta_emocional` (`codUsuario`, `estado_animo`, `preocupaciones`, `toma_decisiones`, `concentracion`, `emocionesysentir`, `satisfaccion_ser`) VALUES
(18, 'Excelente', 'No', 'No', 'A veces', 'A veces', 'No'),
(19, 'Regular', 'No', 'No', 'A veces', 'A veces', 'Sí'),
(22, 'Regular', 'Sí', 'A veces', 'No', 'No', 'Sí'),
(23, 'Pésimo', 'Sí', 'Algunas veces', 'Sí', 'Sí', 'Sí');

-- --------------------------------------------------------

--
-- Table structure for table `formularios`
--

CREATE TABLE `formularios` (
  `codFormulario` int(5) NOT NULL,
  `N_formulario` varchar(5) NOT NULL,
  `Nom_formulario` varchar(100) NOT NULL,
  `Descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formularios`
--

INSERT INTO `formularios` (`codFormulario`, `N_formulario`, `Nom_formulario`, `Descripcion`) VALUES
(5, '4', '0', '0'),
(6, '4', 'Emmanuel', '....');

-- --------------------------------------------------------

--
-- Table structure for table `registro_usuarios`
--

CREATE TABLE `registro_usuarios` (
  `codUsuario` int(11) NOT NULL,
  `Nombres` varchar(50) NOT NULL,
  `Apellidos` varchar(50) NOT NULL,
  `Genero` varchar(10) NOT NULL,
  `numero_documento` int(12) NOT NULL,
  `FechadeNacimiento` date NOT NULL,
  `CorreoElectronico` varchar(50) NOT NULL,
  `Contrasena` varchar(40) NOT NULL,
  `codRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registro_usuarios`
--

INSERT INTO `registro_usuarios` (`codUsuario`, `Nombres`, `Apellidos`, `Genero`, `numero_documento`, `FechadeNacimiento`, `CorreoElectronico`, `Contrasena`, `codRol`) VALUES
(19, 'Emmanuel', 'Zapata Morales', 'Masculino', 1017922872, '2021-09-30', 'emmanuelzm4@gmail.com', 'emma123', 1),
(20, 'Santiago', 'Metaute Restrepo', 'Masculino', 101734234, '2021-09-09', 'sanmiriop@gmail.com', 'santi123', 2),
(21, 'Sofía', 'Álvarez Sánchez', 'Femenino', 123456787, '2011-09-14', 'sofialvarezs05@gmail.com', 'sofi123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `codRol` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`codRol`, `nombre`) VALUES
(1, 'Usuario'),
(2, 'Administrador'),
(3, 'Evaluador');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `encuesta_depresion`
--
ALTER TABLE `encuesta_depresion`
  ADD PRIMARY KEY (`codUsuarios`);

--
-- Indexes for table `encuesta_emocional`
--
ALTER TABLE `encuesta_emocional`
  ADD PRIMARY KEY (`codUsuario`);

--
-- Indexes for table `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`codFormulario`);

--
-- Indexes for table `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  ADD PRIMARY KEY (`codUsuario`),
  ADD KEY `fk_rol_usuario` (`codRol`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`codRol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `encuesta_depresion`
--
ALTER TABLE `encuesta_depresion`
  MODIFY `codUsuarios` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `encuesta_emocional`
--
ALTER TABLE `encuesta_emocional`
  MODIFY `codUsuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `formularios`
--
ALTER TABLE `formularios`
  MODIFY `codFormulario` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  MODIFY `codUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `codRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `registro_usuarios`
--
ALTER TABLE `registro_usuarios`
  ADD CONSTRAINT `fk_rol_usuario` FOREIGN KEY (`codRol`) REFERENCES `roles` (`codRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
