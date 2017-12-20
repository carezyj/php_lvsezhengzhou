<?php
// 指定允许其他域名访问  
header('Access-Control-Allow-Origin:*');  
// 响应类型  
header('Access-Control-Allow-Methods:POST');  
// 响应头设置  
header('Access-Control-Allow-Headers:x-requested-with,content-type'); 
header("Content-type: text/html; charset=utf-8");

$user=$_POST["user"];
$pass=$_POST["pass"];
echo "用户名：".$user."密码：".$pass;
?>