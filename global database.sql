-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.20 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for globaldb
DROP DATABASE IF EXISTS `globaldb`;
CREATE DATABASE IF NOT EXISTS `globaldb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `globaldb`;


-- Dumping structure for table globaldb.groups
DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table globaldb.groups: ~0 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Dumping structure for table globaldb.promotions
DROP TABLE IF EXISTS `promotions`;
CREATE TABLE IF NOT EXISTS `promotions` (
  `promotion_id` int(11) NOT NULL AUTO_INCREMENT,
  `promotion_name` varchar(50) NOT NULL DEFAULT '0',
  `promotion_desc` varchar(50) NOT NULL DEFAULT '0',
  `promotion_other_details` varchar(50) NOT NULL DEFAULT '0',
  `create_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`promotion_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globaldb.promotions: ~0 rows (approximately)
/*!40000 ALTER TABLE `promotions` DISABLE KEYS */;
/*!40000 ALTER TABLE `promotions` ENABLE KEYS */;


-- Dumping structure for table globaldb.property_contact
DROP TABLE IF EXISTS `property_contact`;
CREATE TABLE IF NOT EXISTS `property_contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(50) NOT NULL DEFAULT '0',
  `contact_no` varchar(50) NOT NULL DEFAULT '0',
  `contact_address` varchar(50) NOT NULL DEFAULT '0',
  `contact_other` varchar(50) NOT NULL DEFAULT '0',
  `property_id` int(11) NOT NULL DEFAULT '0',
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globaldb.property_contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `property_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `property_contact` ENABLE KEYS */;


-- Dumping structure for table globaldb.property_distance
DROP TABLE IF EXISTS `property_distance`;
CREATE TABLE IF NOT EXISTS `property_distance` (
  `distance_id` int(11) NOT NULL AUTO_INCREMENT,
  `hospital_dis` varchar(50) NOT NULL DEFAULT '0',
  `school_dis` varchar(50) NOT NULL DEFAULT '0',
  `railway_dis` varchar(50) NOT NULL DEFAULT '0',
  `airport_dis` varchar(50) NOT NULL DEFAULT '0',
  `city_center` varchar(50) NOT NULL DEFAULT '0',
  `bus_depot` varchar(50) NOT NULL DEFAULT '0',
  `location_desc` varchar(500) NOT NULL DEFAULT '0',
  `property_id` int(11) NOT NULL DEFAULT '0',
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`distance_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table globaldb.property_distance: ~0 rows (approximately)
/*!40000 ALTER TABLE `property_distance` DISABLE KEYS */;
REPLACE INTO `property_distance` (`distance_id`, `hospital_dis`, `school_dis`, `railway_dis`, `airport_dis`, `city_center`, `bus_depot`, `location_desc`, `property_id`, `create_date`) VALUES
	(1, '1 K/m', '1 K/m', '2  K/m', '4 K/m', '1 K/m', '0.2 K/m', 'good location', 1, '2014-11-21');
/*!40000 ALTER TABLE `property_distance` ENABLE KEYS */;


-- Dumping structure for table globaldb.property_features
DROP TABLE IF EXISTS `property_features`;
CREATE TABLE IF NOT EXISTS `property_features` (
  `feature_id` int(11) NOT NULL AUTO_INCREMENT,
  `in_vastu` varchar(50) NOT NULL DEFAULT '0',
  `in_intercom` varchar(50) NOT NULL DEFAULT '0',
  `ex_gym` varchar(50) NOT NULL DEFAULT '0',
  `ex_security` varchar(50) NOT NULL DEFAULT '0',
  `ex_swimming` varchar(50) NOT NULL DEFAULT '0',
  `ex_lift` varchar(50) NOT NULL DEFAULT '0',
  `ex_parking` varchar(50) NOT NULL DEFAULT '0',
  `ex_powerbackup` varchar(50) NOT NULL DEFAULT '0',
  `property_id` int(11) NOT NULL DEFAULT '0',
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`feature_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table globaldb.property_features: ~0 rows (approximately)
/*!40000 ALTER TABLE `property_features` DISABLE KEYS */;
REPLACE INTO `property_features` (`feature_id`, `in_vastu`, `in_intercom`, `ex_gym`, `ex_security`, `ex_swimming`, `ex_lift`, `ex_parking`, `ex_powerbackup`, `property_id`, `create_date`) VALUES
	(1, 'Yes', 'Yes', 'No', 'Yes', 'No', 'Yes', 'Yes', 'No', 1, '2014-11-21');
/*!40000 ALTER TABLE `property_features` ENABLE KEYS */;


-- Dumping structure for table globaldb.property_master
DROP TABLE IF EXISTS `property_master`;
CREATE TABLE IF NOT EXISTS `property_master` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_name` varchar(50) NOT NULL DEFAULT '0',
  `property_address` varchar(500) NOT NULL DEFAULT '0',
  `property_desc` varchar(500) NOT NULL DEFAULT '0',
  `property_price` int(11) unsigned NOT NULL DEFAULT '0',
  `area` varchar(50) NOT NULL DEFAULT '0',
  `bedrooms` int(11) NOT NULL DEFAULT '0',
  `bathrooms` int(11) NOT NULL DEFAULT '0',
  `featured_property` varchar(50) NOT NULL DEFAULT '0',
  `floorno` varchar(50) NOT NULL DEFAULT '0',
  `balconies` varchar(50) NOT NULL DEFAULT '0',
  `building_floors` varchar(50) NOT NULL DEFAULT '0',
  `location` varchar(50) NOT NULL DEFAULT '0',
  `property_mode` int(11) NOT NULL DEFAULT '0',
  `property_type` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table globaldb.property_master: ~3 rows (approximately)
/*!40000 ALTER TABLE `property_master` DISABLE KEYS */;
REPLACE INTO `property_master` (`property_id`, `property_name`, `property_address`, `property_desc`, `property_price`, `area`, `bedrooms`, `bathrooms`, `featured_property`, `floorno`, `balconies`, `building_floors`, `location`, `property_mode`, `property_type`, `user_id`, `create_date`) VALUES
	(1, '2 BHK, 1405 Sq-ft Flat For Sale', 'lower parel, Lower Parel, Mumbai - South Mumbai - 400013', 'flate1', 15000, '2000', 3, 3, 'Yes', '5', '1', '1', '1', 1, 1, 15, '2014-11-21'),
	(2, '2 BHK, 1405 Sq-ft Flat For Sale', 'High Street, Tulsi Pipe Road, Mumbai., Lower Parel, Mumbai - South Mumbai - 400011', 'flate2', 25000, '3000', 2, 2, 'Yes', '3', '2', '2', '1', 1, 1, 15, '2014-11-21'),
	(3, '4 BHK Multistorey Apartment in Prabhadevi ', 'Tata Press Lane, Prabhadevi, Mumbai - South Mumbai - 400025', 'flate3', 25001, '3001', 3, 3, 'Yes', '1', '1', '2', '1', 1, 1, 15, '2014-11-21');
/*!40000 ALTER TABLE `property_master` ENABLE KEYS */;


-- Dumping structure for table globaldb.property_mode
DROP TABLE IF EXISTS `property_mode`;
CREATE TABLE IF NOT EXISTS `property_mode` (
  `mode_id` int(11) NOT NULL AUTO_INCREMENT,
  `mode_name` varchar(50) NOT NULL DEFAULT '0',
  `mode_desc` varchar(50) NOT NULL DEFAULT '0',
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`mode_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table globaldb.property_mode: ~2 rows (approximately)
/*!40000 ALTER TABLE `property_mode` DISABLE KEYS */;
REPLACE INTO `property_mode` (`mode_id`, `mode_name`, `mode_desc`, `create_date`) VALUES
	(1, 'Sell', 'SEll', '2014-11-21'),
	(2, 'Rent', 'Rent', '2014-11-21');
/*!40000 ALTER TABLE `property_mode` ENABLE KEYS */;


-- Dumping structure for table globaldb.property_type
DROP TABLE IF EXISTS `property_type`;
CREATE TABLE IF NOT EXISTS `property_type` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(50) NOT NULL DEFAULT '0',
  `type_desc` varchar(200) NOT NULL DEFAULT '0',
  `other` varchar(200) NOT NULL DEFAULT '0',
  `create_date` date DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table globaldb.property_type: ~2 rows (approximately)
/*!40000 ALTER TABLE `property_type` DISABLE KEYS */;
REPLACE INTO `property_type` (`type_id`, `type_name`, `type_desc`, `other`, `create_date`) VALUES
	(1, 'Flat', 'Flat', '0', '2014-11-21'),
	(2, 'Project', 'Project', '0', '2014-11-21'),
	(3, 'Bunglow', 'Bunglow', '0', '2014-11-21');
/*!40000 ALTER TABLE `property_type` ENABLE KEYS */;


-- Dumping structure for table globaldb.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT '0',
  `password` varchar(50) DEFAULT '0',
  `group` int(11) DEFAULT '0',
  `email` varchar(50) DEFAULT '0',
  `mobileno` varchar(15) DEFAULT '0',
  `address` varchar(150) DEFAULT '0',
  `last_login` varchar(50) DEFAULT '0',
  `login_hash` varchar(50) DEFAULT '0',
  `profile_fields` varchar(50) DEFAULT '0',
  `created_at` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table globaldb.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
