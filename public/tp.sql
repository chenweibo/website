/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : tp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-03-27 09:25:31
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of wb_article
-- ----------------------------
INSERT INTO `wb_article` VALUES ('1', '新闻测试', '<p>2223</p>', '', '', '99', '1', '0-1', '', '1', '14', 'cn', '0', '127.0.0.1', '', '', '1489366501', '1489814456', '1', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of wb_articlecate
-- ----------------------------
INSERT INTO `wb_articlecate` VALUES ('1', '公司新闻', '0', '88', '', '0', '1489366460', '1489366460', '127.0.0.1', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of wb_down
-- ----------------------------
INSERT INTO `wb_down` VALUES ('60', '123', '', '', null, '20', '45', '0-45', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488525437', '1488525545', '45', '0');
INSERT INTO `wb_down` VALUES ('62', '123', '', '', null, '99', '45', '0-45', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488525554', '1488525554', '45', '0');
INSERT INTO `wb_down` VALUES ('63', '5', '', '', null, '99', '45', '0-45', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488525566', '1488525566', '45', '0');
INSERT INTO `wb_down` VALUES ('64', '下载测试', '', '', null, '99', '47', '0-47', 'uploads/58bcff0651c01.jpg', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488781063', '1488781063', '47', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of wb_downcate
-- ----------------------------
INSERT INTO `wb_downcate` VALUES ('47', '资料下载', '0', '88', '', '0', '1488781049', '1488781049', '127.0.0.1', '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wb_gbook
-- ----------------------------
INSERT INTO `wb_gbook` VALUES ('1', 'QWE', '563960993@qq.com', 'QWE', 'QWE', '127.0.0.1', '1489215768', '1489215768');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of wb_image
-- ----------------------------
INSERT INTO `wb_image` VALUES ('1', '荣誉资质测', '<p>123123123123</p>', 'uploads/58bcf29678fd0.jpg', null, '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1489107261', '1', null);
INSERT INTO `wb_image` VALUES ('2', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('3', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('4', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('5', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('6', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('7', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('8', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('9', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('10', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('11', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('12', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('13', '荣誉资质测试', '', 'uploads/58bcf29678fd0.jpg', '0000-00-00 00:00:00', '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1488777881', '1488777881', '1', null);
INSERT INTO `wb_image` VALUES ('14', 'qwe', '<p>qwe</p>', '', null, '99', '1', '0-1', '', '1', '', 'cn', '0', '127.0.0.1', '', '', '1489106740', '1489106740', '1', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of wb_imagecate
-- ----------------------------
INSERT INTO `wb_imagecate` VALUES ('1', '荣誉资质', '0', '88', '', '0', '1488777805', '1488777805', '127.0.0.1');

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
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wb_log
-- ----------------------------
INSERT INTO `wb_log` VALUES ('1', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489455597', '1489455597');
INSERT INTO `wb_log` VALUES ('2', '127.0.0.1', '添加', '添加分类:测试小分类', null, '1489455610', '1489455610');
INSERT INTO `wb_log` VALUES ('3', '127.0.0.1', '添加', '添加分类:小分类2', null, '1489455618', '1489455618');
INSERT INTO `wb_log` VALUES ('4', '127.0.0.1', '添加', '添加产品:123123', null, '1489457460', '1489457460');
INSERT INTO `wb_log` VALUES ('5', '127.0.0.1', '登录', '用户:jksm尝试登录帐号或者密码错误登录失败', null, '1489471783', '1489471783');
INSERT INTO `wb_log` VALUES ('6', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489471795', '1489471795');
INSERT INTO `wb_log` VALUES ('7', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489472030', '1489472030');
INSERT INTO `wb_log` VALUES ('8', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489477567', '1489477567');
INSERT INTO `wb_log` VALUES ('9', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489477576', '1489477576');
INSERT INTO `wb_log` VALUES ('10', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489478255', '1489478255');
INSERT INTO `wb_log` VALUES ('11', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489478259', '1489478259');
INSERT INTO `wb_log` VALUES ('12', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489626076', '1489626076');
INSERT INTO `wb_log` VALUES ('13', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489627461', '1489627461');
INSERT INTO `wb_log` VALUES ('14', '127.0.0.1', '添加', '添加产品:123', null, '1489629868', '1489629868');
INSERT INTO `wb_log` VALUES ('15', '127.0.0.1', '添加', '添加产品:123', null, '1489629874', '1489629874');
INSERT INTO `wb_log` VALUES ('16', '127.0.0.1', '添加', '添加产品:123', null, '1489629877', '1489629877');
INSERT INTO `wb_log` VALUES ('17', '127.0.0.1', '添加', '添加产品:123', null, '1489629882', '1489629882');
INSERT INTO `wb_log` VALUES ('18', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489711907', '1489711907');
INSERT INTO `wb_log` VALUES ('19', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489718183', '1489718183');
INSERT INTO `wb_log` VALUES ('20', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489719912', '1489719912');
INSERT INTO `wb_log` VALUES ('21', '127.0.0.1', '登录', '用户:jksm尝试登录帐号或者密码错误登录失败', null, '1489719920', '1489719920');
INSERT INTO `wb_log` VALUES ('22', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489719926', '1489719926');
INSERT INTO `wb_log` VALUES ('23', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489719930', '1489719930');
INSERT INTO `wb_log` VALUES ('24', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489720103', '1489720103');
INSERT INTO `wb_log` VALUES ('25', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489720109', '1489720109');
INSERT INTO `wb_log` VALUES ('26', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489720250', '1489720250');
INSERT INTO `wb_log` VALUES ('27', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489720257', '1489720257');
INSERT INTO `wb_log` VALUES ('28', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489720261', '1489720261');
INSERT INTO `wb_log` VALUES ('29', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489720448', '1489720448');
INSERT INTO `wb_log` VALUES ('30', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489720454', '1489720454');
INSERT INTO `wb_log` VALUES ('31', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489720774', '1489720774');
INSERT INTO `wb_log` VALUES ('32', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489721036', '1489721036');
INSERT INTO `wb_log` VALUES ('33', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489726152', '1489726152');
INSERT INTO `wb_log` VALUES ('34', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489726164', '1489726164');
INSERT INTO `wb_log` VALUES ('35', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489726277', '1489726277');
INSERT INTO `wb_log` VALUES ('36', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489727130', '1489727130');
INSERT INTO `wb_log` VALUES ('37', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489727139', '1489727139');
INSERT INTO `wb_log` VALUES ('38', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489727247', '1489727247');
INSERT INTO `wb_log` VALUES ('39', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489727293', '1489727293');
INSERT INTO `wb_log` VALUES ('40', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489727296', '1489727296');
INSERT INTO `wb_log` VALUES ('41', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489727361', '1489727361');
INSERT INTO `wb_log` VALUES ('42', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489727405', '1489727405');
INSERT INTO `wb_log` VALUES ('43', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489727423', '1489727423');
INSERT INTO `wb_log` VALUES ('44', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489727433', '1489727433');
INSERT INTO `wb_log` VALUES ('45', '127.0.0.1', '登录', '用户: jksm尝试登录验证码错误登录失败', null, '1489727477', '1489727477');
INSERT INTO `wb_log` VALUES ('46', '127.0.0.1', '登录', '用户: jksm尝试登录帐号或者密码错误登录失败', null, '1489727482', '1489727482');
INSERT INTO `wb_log` VALUES ('47', '127.0.0.1', '登录', '用户: jksm尝试登录验证码错误登录失败', null, '1489727504', '1489727504');
INSERT INTO `wb_log` VALUES ('48', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489727517', '1489727517');
INSERT INTO `wb_log` VALUES ('49', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489727687', '1489727687');
INSERT INTO `wb_log` VALUES ('50', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489727789', '1489727789');
INSERT INTO `wb_log` VALUES ('51', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489727836', '1489727836');
INSERT INTO `wb_log` VALUES ('52', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489727860', '1489727860');
INSERT INTO `wb_log` VALUES ('53', '127.0.0.1', '登出', '用户:登出成功', null, '1489727884', '1489727884');
INSERT INTO `wb_log` VALUES ('54', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489727891', '1489727891');
INSERT INTO `wb_log` VALUES ('55', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489727895', '1489727895');
INSERT INTO `wb_log` VALUES ('56', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489727990', '1489727990');
INSERT INTO `wb_log` VALUES ('57', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489728109', '1489728109');
INSERT INTO `wb_log` VALUES ('58', '127.0.0.1', '登出', '用户:登出成功', null, '1489728157', '1489728157');
INSERT INTO `wb_log` VALUES ('59', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489728172', '1489728172');
INSERT INTO `wb_log` VALUES ('60', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489728255', '1489728255');
INSERT INTO `wb_log` VALUES ('61', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489728263', '1489728263');
INSERT INTO `wb_log` VALUES ('62', '127.0.0.1', '登录', '用户:jksm尝试登录帐号或者密码错误登录失败', null, '1489728441', '1489728441');
INSERT INTO `wb_log` VALUES ('63', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489728446', '1489728446');
INSERT INTO `wb_log` VALUES ('64', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489728453', '1489728453');
INSERT INTO `wb_log` VALUES ('65', '127.0.0.1', '登出', '用户:登出成功', null, '1489728462', '1489728462');
INSERT INTO `wb_log` VALUES ('66', '127.0.0.1', '登录', '用户:jksm尝试登录帐号或者密码错误登录失败', null, '1489728477', '1489728477');
INSERT INTO `wb_log` VALUES ('67', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489728481', '1489728481');
INSERT INTO `wb_log` VALUES ('68', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489728488', '1489728488');
INSERT INTO `wb_log` VALUES ('69', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489728513', '1489728513');
INSERT INTO `wb_log` VALUES ('70', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489728544', '1489728544');
INSERT INTO `wb_log` VALUES ('71', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489728563', '1489728563');
INSERT INTO `wb_log` VALUES ('72', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489728649', '1489728649');
INSERT INTO `wb_log` VALUES ('73', '127.0.0.1', '登录', '用户:jksm尝试登录帐号或者密码错误登录失败', null, '1489728654', '1489728654');
INSERT INTO `wb_log` VALUES ('74', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489728659', '1489728659');
INSERT INTO `wb_log` VALUES ('75', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489728675', '1489728675');
INSERT INTO `wb_log` VALUES ('76', '127.0.0.1', '登录', '用户:jksm尝试登录帐号或者密码错误登录失败', null, '1489729066', '1489729066');
INSERT INTO `wb_log` VALUES ('77', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489729073', '1489729073');
INSERT INTO `wb_log` VALUES ('78', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489729079', '1489729079');
INSERT INTO `wb_log` VALUES ('79', '127.0.0.1', '添加', '添加管理员:boge', null, '1489729088', '1489729088');
INSERT INTO `wb_log` VALUES ('80', '127.0.0.1', '更新', '更新管理员:jksm', null, '1489729094', '1489729094');
INSERT INTO `wb_log` VALUES ('81', '127.0.0.1', '登录', '用户:boge登录成功', null, '1489729120', '1489729120');
INSERT INTO `wb_log` VALUES ('82', '127.0.0.1', '登出', '用户:boge登出成功', null, '1489729187', '1489729187');
INSERT INTO `wb_log` VALUES ('83', '127.0.0.1', '登出', '用户:jksm登出成功', null, '1489729204', '1489729204');
INSERT INTO `wb_log` VALUES ('84', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489813509', '1489813509');
INSERT INTO `wb_log` VALUES ('85', '127.0.0.1', '添加', '添加产品:', null, '1489819896', '1489819896');
INSERT INTO `wb_log` VALUES ('86', '127.0.0.1', '添加', '添加产品:', null, '1489819912', '1489819912');
INSERT INTO `wb_log` VALUES ('87', '127.0.0.1', '添加', '添加产品:', null, '1489819924', '1489819924');
INSERT INTO `wb_log` VALUES ('88', '127.0.0.1', '添加', '添加产品:', null, '1489820144', '1489820144');
INSERT INTO `wb_log` VALUES ('89', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489973293', '1489973293');
INSERT INTO `wb_log` VALUES ('90', '127.0.0.1', '添加', '添加产品:测试', null, '1489973996', '1489973996');
INSERT INTO `wb_log` VALUES ('91', '127.0.0.1', '添加', '添加产品:123', null, '1489974574', '1489974574');
INSERT INTO `wb_log` VALUES ('92', '127.0.0.1', '添加', '添加产品:123123', null, '1489975780', '1489975780');
INSERT INTO `wb_log` VALUES ('93', '127.0.0.1', '更新', '更新产品:123', null, '1489978473', '1489978473');
INSERT INTO `wb_log` VALUES ('94', '127.0.0.1', '更新', '更新产品:123123', null, '1489978510', '1489978510');
INSERT INTO `wb_log` VALUES ('95', '127.0.0.1', '更新', '更新产品:123123', null, '1489978517', '1489978517');
INSERT INTO `wb_log` VALUES ('96', '127.0.0.1', '更新', '更新产品:123123', null, '1489978541', '1489978541');
INSERT INTO `wb_log` VALUES ('97', '127.0.0.1', '更新', '更新产品:123123', null, '1489978553', '1489978553');
INSERT INTO `wb_log` VALUES ('98', '127.0.0.1', '登录', '用户:jksm尝试登录验证码错误登录失败', null, '1489979923', '1489979923');
INSERT INTO `wb_log` VALUES ('99', '127.0.0.1', '登录', '用户:jksm登录成功', null, '1489979926', '1489979926');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wb_others
-- ----------------------------
INSERT INTO `wb_others` VALUES ('1', '乐清人才网(http://www.yqrc.com/),乐清人才网(http://www.yqrc.com/)', null, '1489111234', '127.0.0.1');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wb_page
-- ----------------------------
INSERT INTO `wb_page` VALUES ('1', '关于我们', '<p>关于我们描述</p>', '1488777352', '1488777374', '127.0.0.1');
INSERT INTO `wb_page` VALUES ('2', '联系我们', '<p>联系我们</p>', '1488777392', '1488777392', '127.0.0.1');
INSERT INTO `wb_page` VALUES ('3', '我们的理念', '', '1488870109', '1488870109', '127.0.0.1');
INSERT INTO `wb_page` VALUES ('4', '我们的产品', '', '1488870126', '1488870126', '127.0.0.1');
INSERT INTO `wb_page` VALUES ('5', '人才招聘', '', '1488870131', '1488870131', '127.0.0.1');
INSERT INTO `wb_page` VALUES ('6', '设备展示', '<p>1<br/></p>', '1488870145', '1488870145', '127.0.0.1');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of wb_product
-- ----------------------------

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of wb_productcate
-- ----------------------------
INSERT INTO `wb_productcate` VALUES ('1', 'ces2', '0', '88', '', '0', '1489128307', '1489216943', '127.0.0.1', null);
INSERT INTO `wb_productcate` VALUES ('2', 'ce3', '0', '88', '', '0', '1489128310', '1489128310', '127.0.0.1', null);
INSERT INTO `wb_productcate` VALUES ('3', '测试小分类', '1', '88', '', '0-1', '1489455610', '1489455610', '127.0.0.1', null);
INSERT INTO `wb_productcate` VALUES ('4', '小分类2', '1', '88', '', '0-1', '1489455618', '1489455618', '127.0.0.1', null);

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of wb_slide
-- ----------------------------
INSERT INTO `wb_slide` VALUES ('1', '1', 'uploads/58bf69aef0f38.jpg', '', '99', '1488939439', '1489111877', '127.0.0.1');
INSERT INTO `wb_slide` VALUES ('2', '2', 'uploads/58bf69b5cc3b3.jpg', '', '99', '1488939446', '1488939446', '127.0.0.1');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wb_system
-- ----------------------------
INSERT INTO `wb_system` VALUES ('1', '温州市杰派包装机械有限公司', 'uploads/58b37cdb396fd.jpg', '123456sdf', '123456789', '公司asd', '123asd', '122asd', '233', '123dsa', '123123asdf', '123', '1489123882', null, '127.0.0.1');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wb_user
-- ----------------------------
INSERT INTO `wb_user` VALUES ('4', 'jksm', 'jksm951', '1488528487', '1489729094', '127.0.0.1');
INSERT INTO `wb_user` VALUES ('5', 'boge', '123456', '1489729088', '1489729088', '127.0.0.1');
