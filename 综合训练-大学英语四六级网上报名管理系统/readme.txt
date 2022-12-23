//PHP操纵mysql数据库-大学英语四六级网上报名管理系统-readme
//不赘述mysql数据库的操作，详见chap11课件
//使用说明：把每个文件中的数据库名称、数据表名称部分，改成自己设置的相应名称

创建数据库的命令如下：
CREATE DATABASE IF NOT EXISTS 数据库名称
CHARACTER SET utf8  
COLLATE utf8_general_ci; 

编写创建数据表的命令如下，包含stuID(学号)、stuName(姓名)、stuClass(班级)、examType(报考类型)、stuAddDate(报考时间)等字段信息：
CREATE TABLE IF NOT EXISTS `数据库名称` (
   `stuID` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT COMMENT '学号',  
   `stuName` VARCHAR(32) NOT NULL COMMENT '姓名', 
   `stuClass` VARCHAR(32) NOT NULL COMMENT '班级', 
   `examType` VARCHAR(32) NOT NULL COMMENT '报考类型',
   `stuAddData` VARCHAR(32) NOT NULL COMMENT '报考时间' 
) DEFAULT CHARSET=utf8; 
