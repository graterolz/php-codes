CREATE DATABASE IF NOT EXISTS `jb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jb`;
--
CREATE TABLE IF NOT EXISTS `entradas` (
	`combinacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
CREATE TABLE IF NOT EXISTS `palabras` (
	`letra` varchar(1) NOT NULL,
	`codigo_letra` varchar(3) NOT NULL,
	`descripcion_letra` varchar(10) NOT NULL,
	PRIMARY KEY (`letra`,`codigo_letra`,`descripcion_letra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
INSERT INTO `palabras` (`letra`, `codigo_letra`, `descripcion_letra`) VALUES
('A', '1', 'a'),
('A', '2', 'aun'),
('B', '1', 'bien'),
('C', '1', 'como'),
('C', '2', 'creo'),
('C', '3', 'comprender'),
('D', '1', 'de'),
('D', '2', 'donde'),
('D', '3', 'dar'),
('E', '1', 'estas'),
('E', '2', 'eres'),
('E', '3', 'entiendo'),
('E', '4', 'estoy'),
('E', '5', 'entender'),
('E', '6', 'eso'),
('F', '1', 'f'),
('G', '1', 'g'),
('H', '1', 'hola'),
('I', '1', 'i'),
('J', '1', 'j'),
('K', '1', 'k'),
('L', '1', 'logro'),
('M', '1', 'm'),
('N', '1', 'no'),
('O', '1', 'o'),
('P', '1', 'poder'),
('P', '2', 'programado'),
('P', '3', 'para'),
('Q', '1', 'quien'),
('Q', '2', 'que'),
('R', '1', 'respuesta'),
('R', '2', 'responder'),
('S', '1', 'si'),
('T', '1', 'tu'),
('U', '1', 'u'),
('V', '1', 'v'),
('W', '1', 'w'),
('X', '1', 'x'),
('Y', '1', 'y'),
('Z', '1', 'z');
--
CREATE TABLE IF NOT EXISTS `salidas` (
	`combinacion` varchar(100) NOT NULL,
	`combinacion_salida` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;