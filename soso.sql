-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-04 18:38:21
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soso`
--

-- --------------------------------------------------------

--
-- 表的结构 `s_admin_users`
--

CREATE TABLE IF NOT EXISTS `s_admin_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(60) NOT NULL DEFAULT '' COMMENT '用户名',
  `user_pass` varchar(64) NOT NULL DEFAULT '' COMMENT '登录密码',
  `user_nicename` varchar(50) NOT NULL DEFAULT '' COMMENT '用户昵称',
  `avatar` varchar(255) DEFAULT NULL COMMENT '用户头像',
  `sex` smallint(1) DEFAULT '0' COMMENT '性别；0：保密，1：男；2：女',
  `last_login_ip` varchar(16) DEFAULT NULL COMMENT '最后登录ip',
  `last_login_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' COMMENT '最后登录时间',
  `create_time` datetime NOT NULL DEFAULT '2000-01-01 00:00:00' COMMENT '注册时间',
  `user_status` int(11) NOT NULL DEFAULT '1' COMMENT '用户状态 0：禁用； 1：正常',
  `user_type` smallint(1) DEFAULT '1' COMMENT '用户类型，1:admin',
  PRIMARY KEY (`id`),
  KEY `user_login_key` (`user_login`),
  KEY `user_nicename` (`user_nicename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `s_company`
--

CREATE TABLE IF NOT EXISTS `s_company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '公司名称',
  `email` varchar(50) NOT NULL COMMENT '公司邮箱',
  `corporation` varchar(200) NOT NULL COMMENT '法人姓名',
  `phone` varchar(50) NOT NULL COMMENT '手机号',
  `address` varchar(200) NOT NULL COMMENT '地址',
  `create_time` varchar(100) NOT NULL COMMENT '创建时间',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '状态 1待审核 2已通过 3拒绝 4已停用',
  `password` varchar(250) NOT NULL COMMENT '密码',
  `nature` int(11) NOT NULL COMMENT '1民营 2国营',
  `certificateNum` varchar(100) NOT NULL COMMENT '工商证号',
  `sex` int(11) NOT NULL COMMENT '1男 2女',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户注册公司' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `s_company`
--

INSERT INTO `s_company` (`id`, `name`, `email`, `corporation`, `phone`, `address`, `create_time`, `status`, `password`, `nature`, `certificateNum`, `sex`) VALUES
(11, '北京So简历科技有限公司', '18311161659@163.com', '杨泽旺', '18311161659', '北京市昌平区', '1509724645', 1, 'e10adc3949ba59abbe56e057f20f883e', 1, '', 0),
(12, '闫艳阳科技有限公司', '1442370080@qq.com', '闫艳阳', '18311161659', '北京市昌平区', '1509724645', 1, 'e10adc3949ba59abbe56e057f20f883e', 1, '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `s_department`
--

CREATE TABLE IF NOT EXISTS `s_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL COMMENT '部门名称',
  `companyId` int(11) NOT NULL COMMENT '所属公司id',
  `createTime` varchar(200) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='部门表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `s_employee`
--

CREATE TABLE IF NOT EXISTS `s_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL COMMENT '员工姓名',
  `entryTime` varchar(200) NOT NULL COMMENT '入职时间',
  `department` int(11) NOT NULL COMMENT '所属部门',
  `position` varchar(200) NOT NULL COMMENT '职位',
  `companyId` int(11) NOT NULL COMMENT '所属公司ID',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='员工表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `s_login`
--

CREATE TABLE IF NOT EXISTS `s_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `loginIp` varchar(50) NOT NULL COMMENT '登录ip',
  `loginTime` varchar(100) NOT NULL COMMENT '登录时间',
  `userId` int(11) NOT NULL COMMENT '用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='用户登录表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `s_login`
--

INSERT INTO `s_login` (`id`, `loginIp`, `loginTime`, `userId`) VALUES
(1, '127.0.0.1', '1509724176', 1),
(2, '127.0.0.1', '1509803160', 1),
(3, '127.0.0.1', '1509804003', 1);

-- --------------------------------------------------------

--
-- 表的结构 `s_user`
--

CREATE TABLE IF NOT EXISTS `s_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `phone` varchar(50) NOT NULL COMMENT '手机号',
  `name` varchar(50) DEFAULT NULL COMMENT '用户姓名',
  `isAdmin` int(11) NOT NULL DEFAULT '1' COMMENT '管理员 1、否 2、是',
  `createTime` int(10) NOT NULL,
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `password` varchar(100) NOT NULL COMMENT '用户登录密码',
  PRIMARY KEY (`id`),
  KEY `phone` (`phone`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=27 ;

--
-- 转存表中的数据 `s_user`
--

INSERT INTO `s_user` (`id`, `phone`, `name`, `isAdmin`, `createTime`, `email`, `password`) VALUES
(1, '18311161659', 'yyy', 1, 1502717492, '', 'e10adc3949ba59abbe56e057f20f883e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
