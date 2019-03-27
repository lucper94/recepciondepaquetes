# ************************************************************
# Sequel Pro SQL dump
# Version 5438
#
# https://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.24-0ubuntu0.18.04.1)
# Database: facturacion
# Generation Time: 2019-03-27 22:38:11 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table configuracion
# ------------------------------------------------------------

DROP TABLE IF EXISTS `configuracion`;

CREATE TABLE `configuracion` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `precio_contenedor` double DEFAULT NULL,
  `precio_vagon` double DEFAULT NULL,
  `porcentaje_descuento` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `configuracion` WRITE;
/*!40000 ALTER TABLE `configuracion` DISABLE KEYS */;

INSERT INTO `configuracion` (`id`, `precio_contenedor`, `precio_vagon`, `porcentaje_descuento`)
VALUES
	(1,1000,700,20);

/*!40000 ALTER TABLE `configuracion` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table detalle_factura
# ------------------------------------------------------------

DROP TABLE IF EXISTS `detalle_factura`;

CREATE TABLE `detalle_factura` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `factura_id` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `descuento` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `detalle_factura` WRITE;
/*!40000 ALTER TABLE `detalle_factura` DISABLE KEYS */;

INSERT INTO `detalle_factura` (`id`, `factura_id`, `precio`, `descuento`)
VALUES
	(1,1,700,0),
	(2,1,700,0),
	(3,1,700,0),
	(4,1,700,0),
	(5,1,700,0),
	(6,1,700,0),
	(7,1,700,0),
	(8,1,700,0),
	(9,1,700,0),
	(10,1,700,0),
	(11,2,1000,200),
	(12,2,1000,200),
	(13,2,1000,200),
	(14,2,1000,200),
	(15,2,1000,200),
	(16,2,1000,200),
	(17,2,1000,200),
	(18,2,1000,200),
	(19,2,1000,200),
	(20,2,1000,200),
	(21,2,1000,200),
	(22,2,1000,200),
	(23,2,1000,200),
	(24,2,1000,200),
	(25,2,1000,200),
	(26,2,1000,200),
	(27,2,1000,200),
	(28,2,1000,200),
	(29,2,1000,200),
	(30,2,1000,200),
	(31,2,1000,0),
	(32,2,1000,0),
	(33,2,1000,0),
	(34,2,1000,0),
	(35,2,1000,0);

/*!40000 ALTER TABLE `detalle_factura` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table facturas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `facturas`;

CREATE TABLE `facturas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_creacion` datetime DEFAULT NULL,
  `nombre_unidad` varchar(100) DEFAULT NULL,
  `medio_transporte` varchar(20) DEFAULT NULL,
  `cantidad_unidades` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `facturas` WRITE;
/*!40000 ALTER TABLE `facturas` DISABLE KEYS */;

INSERT INTO `facturas` (`id`, `fecha_creacion`, `nombre_unidad`, `medio_transporte`, `cantidad_unidades`)
VALUES
	(1,'2019-03-27 22:03:00','Ferrocarril 201','ferrocarril',10),
	(2,'2019-03-27 22:03:00','Barco 80','barco',25);

/*!40000 ALTER TABLE `facturas` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
