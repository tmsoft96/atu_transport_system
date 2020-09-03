/*
Navicat MySQL Data Transfer
 
Source Server         : localhost
Source Server Version : 50731
Source Host           : localhost:3306
Source Database       : login_system

Target Server Type    : MYSQL
Target Server Version : 50731
File Encoding         : 65001
 
Date: 2020-09-03 18:22:46
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `tbluser`
-- ----------------------------
DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE `tbluser` (
  `id` varchar(255) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '$2y$10$LY21oTVmJIZYJeldryrPgeB6WkGd.tJ5anqGH24S62pxFe4OoDFOi',
  `auth_confirm` varchar(150) DEFAULT '12345',
  `picture` varchar(255) DEFAULT NULL,
  `deleted` char(1) DEFAULT '0',
  `createuser` varchar(50) NOT NULL,
  `createdate` date NOT NULL,
  `modifyuser` varchar(50) DEFAULT NULL,
  `modifydate` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `transid` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tbluser
-- ----------------------------
INSERT INTO `tbluser` VALUES ('202003051435', 'Millennium', 'Development', 'Authority', 'F', '12345', 'atu@gmail.com', 'ADMIN', 'ep@gmail.com', '$2y$10$7OeCx2tvqzGbDNlIdSOYr.WNQM3NLB22nUTZzGVYBujU1fbS4PoX.', 'mida@2020', null, '0', 'barbara@gitplus.app', '2020-03-05', 'barbara@gitplus.app', '2020-03-05');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
