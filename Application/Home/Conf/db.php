<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

return array(
    //数据库配置信息
    'DB_TYPE'       =>  'mysql', // 数据库类型
    'DB_HOST'       =>  '127.0.0.1', // 服务器地址
    'DB_NAME'       =>  'soso', // 数据库名
    'DB_USER'       =>  'root', // 用户名
    'DB_PWD'        =>  'root', // 密码
    'DB_PORT'       =>  3306, // 端口
    'DB_PARAMS'     =>  array(\PDO::ATTR_CASE => \PDO::CASE_NATURAL), // 数据库连接参数
    'DB_PREFIX'     =>  's_', // 数据库表前缀 
    'DB_CHARSET'    =>  'utf8', // 字符集
    'DB_DEBUG'      =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志
    
    //Redis 配置
    'REDIS_HOST'	=>'127.0.0.1',
    'REDIS_PORT'	=>'6379',
    'REDIS_AUTH'	=>'m9r1n1Fd',
    'REDIS_KEY'         =>'SHANHU_PAY',
);