/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ibijus

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2020-07-27 21:55:39
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for locais
-- ----------------------------
DROP TABLE IF EXISTS `locais`;
CREATE TABLE `locais` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `cep` varchar(8) DEFAULT NULL,
  `logradouro` varchar(150) DEFAULT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `numero` varchar(6) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of locais
-- ----------------------------
