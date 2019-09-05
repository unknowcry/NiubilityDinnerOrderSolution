/*
Navicat MySQL Data Transfer

Source Server         : zymysql
Source Server Version : 50727
Source Host           : 127.0.0.1:3306
Source Database       : order_db

Target Server Type    : MYSQL
Target Server Version : 50727
File Encoding         : 65001

Date: 2019-09-05 09:27:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for dish
-- ----------------------------
DROP TABLE IF EXISTS `dish`;
CREATE TABLE `dish` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `restaurantID` int(10) DEFAULT NULL,
  `dishTitle` varchar(255) DEFAULT NULL,
  `dishAvailable` int(3) DEFAULT NULL,
  `price` double(6,3) DEFAULT NULL,
  `showPictureFileName` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `restaurant` (`restaurantID`),
  CONSTRAINT `restaurant` FOREIGN KEY (`restaurantID`) REFERENCES `restaurant` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for indent
-- ----------------------------
DROP TABLE IF EXISTS `indent`;
CREATE TABLE `indent` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `time` datetime DEFAULT CURRENT_TIMESTAMP,
  `customerID` int(10) NOT NULL,
  `content` varchar(1024) DEFAULT NULL,
  `price` double(6,3) DEFAULT NULL,
  `status` int(3) DEFAULT NULL,
  `appraise` text,
  PRIMARY KEY (`id`),
  KEY `customer` (`customerID`),
  CONSTRAINT `customer` FOREIGN KEY (`customerID`) REFERENCES `customer` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for restaurant
-- ----------------------------
DROP TABLE IF EXISTS `restaurant`;
CREATE TABLE `restaurant` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `userName` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  `phoneNumber` varchar(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `restaurantName` varchar(255) DEFAULT NULL,
  `introduction` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
DROP TRIGGER IF EXISTS `tri_delete_customer`;
DELIMITER ;;
CREATE TRIGGER `tri_delete_customer` BEFORE DELETE ON `customer` FOR EACH ROW begin
delete from indent where customerID = old.id;
end
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `tri_delete_restaurant`;
DELIMITER ;;
CREATE TRIGGER `tri_delete_restaurant` BEFORE DELETE ON `restaurant` FOR EACH ROW begin
delete from dish where restaurantID = old.id;
end
;;
DELIMITER ;
