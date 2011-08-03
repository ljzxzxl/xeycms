<?php
$dbms='mysql'; //数据库类型 Oracle 用ODI，方便使用不同的数据库
$host='localhost'; //数据库主机名
$dbname='ljzxzxl'; //使用的数据库
$user='root'; //数据库连接用户名
$pass=''; //对应的密码
$dsn="$dbms:host=$host;dbname=$dbname";
$con=array(PDO::ATTR_PERSISTENT => true);//如果需要数据库长连接，可加上此参数

require_once ("include/pdo.mysql.class.php");


//********************************************************************
//实例化对象并执行SQL语句
?>