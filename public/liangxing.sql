/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : liangxing

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-28 16:18:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wb_article
-- ----------------------------
DROP TABLE IF EXISTS `wb_article`;
CREATE TABLE `wb_article` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `info` mediumtext,
  `icon` varchar(60) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `sort` int(20) NOT NULL DEFAULT '99',
  `lid` int(20) DEFAULT NULL,
  `lPath` varchar(255) DEFAULT NULL,
  `down` varchar(255) DEFAULT NULL,
  `show` int(50) DEFAULT NULL,
  `pageview` int(255) DEFAULT '50',
  `lang` varchar(255) DEFAULT NULL,
  `recommend` int(50) DEFAULT NULL,
  `ip` varchar(255) DEFAULT '50',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `articlecate_id` int(255) unsigned DEFAULT NULL,
  `is_delete` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for wb_articlecate
-- ----------------------------
DROP TABLE IF EXISTS `wb_articlecate`;
CREATE TABLE `wb_articlecate` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pid` int(20) NOT NULL DEFAULT '0',
  `sort` int(20) DEFAULT '88',
  `icon` varchar(50) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `is_delete` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for wb_down
-- ----------------------------
DROP TABLE IF EXISTS `wb_down`;
CREATE TABLE `wb_down` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `info` mediumtext,
  `icon` varchar(60) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `sort` int(20) NOT NULL DEFAULT '99',
  `lid` int(20) DEFAULT NULL,
  `lPath` varchar(255) DEFAULT NULL,
  `down` varchar(255) DEFAULT NULL,
  `show` int(50) DEFAULT NULL,
  `pageview` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `recommend` int(50) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `downcate_id` int(255) unsigned DEFAULT NULL,
  `is_delete` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for wb_downcate
-- ----------------------------
DROP TABLE IF EXISTS `wb_downcate`;
CREATE TABLE `wb_downcate` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pid` int(20) NOT NULL DEFAULT '0',
  `sort` int(20) DEFAULT '88',
  `icon` varchar(50) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `is_delete` int(255) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for wb_gbook
-- ----------------------------
DROP TABLE IF EXISTS `wb_gbook`;
CREATE TABLE `wb_gbook` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `xingming` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wb_image
-- ----------------------------
DROP TABLE IF EXISTS `wb_image`;
CREATE TABLE `wb_image` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `info` mediumtext,
  `icon` varchar(60) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `sort` int(20) NOT NULL DEFAULT '99',
  `lid` int(20) DEFAULT NULL,
  `lPath` varchar(255) DEFAULT NULL,
  `down` varchar(255) DEFAULT NULL,
  `show` int(50) DEFAULT NULL,
  `pageview` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `recommend` int(50) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `imagecate_id` int(255) unsigned DEFAULT NULL,
  `is_delete` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for wb_imagecate
-- ----------------------------
DROP TABLE IF EXISTS `wb_imagecate`;
CREATE TABLE `wb_imagecate` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pid` int(20) NOT NULL DEFAULT '0',
  `sort` int(20) DEFAULT '88',
  `icon` varchar(50) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for wb_log
-- ----------------------------
DROP TABLE IF EXISTS `wb_log`;
CREATE TABLE `wb_log` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) DEFAULT NULL,
  `curd` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wb_others
-- ----------------------------
DROP TABLE IF EXISTS `wb_others`;
CREATE TABLE `wb_others` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wb_page
-- ----------------------------
DROP TABLE IF EXISTS `wb_page`;
CREATE TABLE `wb_page` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `info` mediumtext,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wb_product
-- ----------------------------
DROP TABLE IF EXISTS `wb_product`;
CREATE TABLE `wb_product` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `info` mediumtext,
  `icon` varchar(60) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `sort` int(20) NOT NULL DEFAULT '99',
  `lid` int(20) DEFAULT NULL,
  `lPath` varchar(255) DEFAULT NULL,
  `down` varchar(255) DEFAULT NULL,
  `show` int(50) DEFAULT NULL,
  `pageview` varchar(255) DEFAULT NULL,
  `lang` varchar(255) DEFAULT NULL,
  `recommend` int(50) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `productcate_id` int(255) unsigned DEFAULT NULL,
  `imgmore` varchar(255) DEFAULT NULL,
  `p_jintai` varchar(255) DEFAULT NULL,
  `gaishu` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for wb_productcate
-- ----------------------------
DROP TABLE IF EXISTS `wb_productcate`;
CREATE TABLE `wb_productcate` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `pid` int(20) NOT NULL DEFAULT '0',
  `sort` int(20) DEFAULT '88',
  `icon` varchar(50) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `jingtai` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for wb_slide
-- ----------------------------
DROP TABLE IF EXISTS `wb_slide`;
CREATE TABLE `wb_slide` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `slide_name` varchar(20) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL,
  `slide_a` varchar(50) DEFAULT NULL,
  `slide_sort` int(255) DEFAULT '99',
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Table structure for wb_system
-- ----------------------------
DROP TABLE IF EXISTS `wb_system`;
CREATE TABLE `wb_system` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `tel` varchar(200) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `zipcode` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `fax` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for wb_user
-- ----------------------------
DROP TABLE IF EXISTS `wb_user`;
CREATE TABLE `wb_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `createtime` int(255) DEFAULT NULL,
  `updatetime` int(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
