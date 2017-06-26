/*
Navicat MySQL Data Transfer

Source Server         : my-data
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : tp-cdn-push

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2017-06-26 11:22:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dh2y_access`
-- ----------------------------
DROP TABLE IF EXISTS `dh2y_access`;
CREATE TABLE `dh2y_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `module` varchar(50) DEFAULT NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh2y_access
-- ----------------------------

-- ----------------------------
-- Table structure for `dh2y_admin`
-- ----------------------------
DROP TABLE IF EXISTS `dh2y_admin`;
CREATE TABLE `dh2y_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '{1:开启,0:关闭}',
  `email` varchar(100) DEFAULT NULL,
  `create_time` int(11) NOT NULL,
  `login_time` int(11) DEFAULT NULL,
  `login_ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh2y_admin
-- ----------------------------
INSERT INTO `dh2y_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', null, '1498011222', '1498440548', '127.0.0.1');
INSERT INTO `dh2y_admin` VALUES ('6', 'test', '123456', '1', null, '1498297138', null, null);
INSERT INTO `dh2y_admin` VALUES ('7', 'test01', 'q12345', '1', null, '1498297157', null, null);
INSERT INTO `dh2y_admin` VALUES ('5', 'dh2y', '123456', '0', null, '1498297125', null, null);

-- ----------------------------
-- Table structure for `dh2y_node`
-- ----------------------------
DROP TABLE IF EXISTS `dh2y_node`;
CREATE TABLE `dh2y_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `remark` varchar(255) DEFAULT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh2y_node
-- ----------------------------

-- ----------------------------
-- Table structure for `dh2y_role`
-- ----------------------------
DROP TABLE IF EXISTS `dh2y_role`;
CREATE TABLE `dh2y_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh2y_role
-- ----------------------------
INSERT INTO `dh2y_role` VALUES ('1', '超级管理员', '0', '1', 'BOSS');

-- ----------------------------
-- Table structure for `dh2y_role_user`
-- ----------------------------
DROP TABLE IF EXISTS `dh2y_role_user`;
CREATE TABLE `dh2y_role_user` (
  `role_id` mediumint(9) unsigned DEFAULT NULL,
  `user_id` char(32) DEFAULT NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of dh2y_role_user
-- ----------------------------
