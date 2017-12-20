<?php
header("Content-Type:text/html;Charset=utf-8");
echo "我不是二手科学家";

echo "<pre>";//html标签，意思是按原样输出，不做更改
//var_dump($_GET);//能打印出类型
var_dump($_POST);//打印出post请求的数据
echo "</pre>";
