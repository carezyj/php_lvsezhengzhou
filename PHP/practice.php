<?php
echo $var;
echo "<br />";
$var="大家来学PHP";
echo $var;
echo "<br />";
echo $m1 = memory_get_usage();//获取当前PHP消耗的内存 
echo "<br />";
 $var_string='123';
echo $m2 = memory_get_usage()-$m1;//字符串消耗的内存
echo "<br />";
 $n=123;
echo $m3 = memory_get_usage()-$m1-$m2; //整型消耗的内存
echo "<br />";
 $f=123.00;
echo $m4 = memory_get_usage()-$m1-$m2-$m3; //浮点型消耗的内存
echo "<br />";
 $var_array=array("123");
echo $m5 = memory_get_usage()-$m1-$m2-$m3-$m4;//数组消耗的内存
echo "<br />";
 unset($var);//释放var
error_reporting(0); //禁止显示PHP警告提示
 $m;
 var_dump($var);//NULL
	echo "<br />";
 $var1=null;
 var_dump($var1);//NULL
	echo "<br />";
 $var2=NULL;
 var_dump( $var2);//NULL
 echo "<br />";
 $var3 = "节日快乐！";
 unset($var3);
 var_dump($var3);//NULL
	echo "<br />";

$p="PII";
define("PI",3.14);//定义常量，比较直观
define($p,3.14);//定义常量，比较灵活
echo PI;
echo "<br />";
echo PII;
echo "<br />";

echo __FILE__;//程序文件名
echo "<br />";
echo __LINE__;//程序文件行数
echo "<br />";
echo PHP_VERSION;//当前解析器的版本号
echo "<br />";
echo PHP_OS;//当前PHP版本的操作系统名称
echo "<br />";

echo defined("PI");//判定常量是否被定义过
echo "<br />";
echo defined("PII");//返回1说明被定义过
echo "<br />";

$english = 110; //英语成绩
$math= 118; //数学成绩
$biological = 80; //生物成绩
$physical = 90; //物理成绩
$sum=$english+$math+$biological+$physical;
$avg=$sum/4;
$x=$math-$english;
$x2=$english*$english;
echo "总分:".$sum."<br />";
echo "平均分:".$avg."<br />";
echo "数学比英语高的分数:".$x."<br />";
echo "英语成绩的平方:".$x2."<br />";

//php中的赋值运算符
 $a = "我在慕课网学习PHP！";
	$b=$a;//新建一个内存，把右边的值赋值进来
	$c=&$a;//引用赋值，公用同一块内存
	$a = "我天天在慕课网学习PHP！";
	echo $b."<br />";
	echo $c."<br />";
	$a="我变了";
	echo $b."<br />";//不随$a变化
	echo $c."<br />";//随$a变化
 unset($a,$b,$c);
	//php中的比较运算符
 $a = 1;
	$b = "1";
	var_dump($a==$b);//true，a等于b
	echo "<br />";
	var_dump($a===$b);//false，a等于b，类型不同
	echo "<br />";
	var_dump($a!=$b);//false，a不等于b返回true
	echo "<br />";
	var_dump($a<>$b);//false，a不等于b返回true
	echo "<br />";
	var_dump($a!==$b);//true,a不等于b或类型不同返回true
	echo "<br />";
	var_dump($a<$b);//false，a小于b返回true
	echo "<br />";
   
	$c = 5;
	echo "<br />";
	var_dump($a<$c);//true
	echo "<br />";
	var_dump($a>$c);//false
	echo "<br />";
	var_dump($a<=$c);//true
	echo "<br />";
	var_dump($a>=$c);//false
	echo "<br />";
	var_dump($a>=$b);//true
	echo "<br />";
//php中的逻辑运算符
 $a = TRUE; //A同意
	$b = TRUE; //B同意
	$c = FALSE; //C反对
	$d = FALSE; //D反对
	//咱顺便复习下三元运算符
	echo ($a and $b)?"通过":"不通过";
	echo "<br />";
	echo ($a or $c)?"通过":"不通过";
	echo "<br />";
	echo ($a xor $c xor $d)?"通过":"不通过";
	echo "<br />";
	echo !$c?"通过":"不通过";
	echo "<br />";
	echo $a && $d?"通过":"不通过";
	echo "<br />";
	echo $b || $c || $d?"通过":"不通过";
	echo "<br />";
 unset($a,$b,$c);
	//php中的字符串连接运算符
	$a = "张先生";
	$tip=$a.",欢迎您在慕课网学习PHP";
 $b = "东边日出西边雨";	
 $b.=",道是无晴却有晴";    
	$c = "东边日出西边雨";	
 $c=$c.",道是无晴却有晴";
    
	echo  $tip."<br />";
	echo  $b."<br />";
	echo  $c."<br />";
//	
//	ini_set('track_errors', 1);
// $conn=@mysqlS_connect("localhost","username","password");
// echo "出错了，错误原因是：".$php_errormsg;
//	
	//PHP中的算术运算符
	$maxLine = 4; //每排人数
	$no = 25;//学生编号
 $line=ceil($no/$maxLine);//向上舍入为最接近的整数
	$row=$no%$maxLine?$no%$maxLine:$maxLine;
	echo "编号<b>".$no."</b>的座位在第<b>".$line."</b>排第<b>".$row."</b>个位置"."<br />";
	
	//条件结构if..else..
	date_default_timezone_set('Asia/ShangHai');
 $today = date('m-d',time());//获取当天日期
	$birthday = "12-12";//生日
	$money = 238;//消费金额
	$discount = 0.8;//八折优惠
	if($today==$birthday){
	    $money=$money*$discount;
	}else{
	    $moeny=$money*1;
	}
	echo $money."<br />";
	
	//条件结构之if..else if...else...
	date_default_timezone_set('asia/shanghai');
$week = date("w");//获取当天星期几
$info = "";//提示信息
 if($week==1){
    $info = "上午有课";
}else if($week==3){
	$info = "下午有课";	 
}else{
	$info = "今天没课";
}
echo $info."<br />"; //输出提示信息

//PHP条件结构之switch..case..
$num = rand(1,5);//获取1至50的随机数
$info = "";//提示信息
switch($num){
  case 1:
		$info = "恭喜你！中了一等奖！";
		break;
	case 2:
		$info = "恭喜你！中了二等奖！";
		break;
 	case 3:
		$info = "恭喜你！中了三等奖！";
		break;
	default:
		$info = "很遗憾！你没有中奖！";
    }
 echo $info."<br />"; //输出是否中奖
 unset($num);
	
	//PHP中循环结构之while循环语句
	$sum = 12;//小宠物当前的饥饿程度
echo "我饿啦:-(";
echo "<br />";
while($sum<100){//小宠物的饥饿程度到100，表示小宠物吃饱啦,不用继续喂了，没吃饱继续喂食
    echo "我还没吃饱呢！";
    $num = rand(30,50);//随机数，模拟喂食小宠物的小面包
	$sum = $sum + $num; //小宠物吃小面包
	echo "<br />";
}
echo "终于吃饱啦^_^"."<br />";
	
//php中循环结构之do while循环语句
$i =  1 ; //从第1圈开始跑
do{  //跑10圈
    echo "在跑第".$i."圈。";
	$i++;
}while($i<=10);

//PHP中循环结构之for循环
for($i=1,$sum=0;$i<=100;$i++){
    $sum = $sum + $i; //	累加求和
}
echo "<br />"."for语句的运行结果：".$sum."<br />" ;

//php循环结构之foreach循环语句(任务一)
$students = array(
'2010'=>'令狐冲',
'2011'=>'林平之',
'2012'=>'曲洋',
'2013'=>'任盈盈',
'2014'=>'向问天',
'2015'=>'任我行',
'2016'=>'冲虚',
'2017'=>'方正',
'2018'=>'岳不群',
'2019'=>'宁中则',
);//10个学生的学号和姓名，用数组存储

//使用循环结构遍历数组,获取学号和姓名  
foreach($students as $v)
{ 
    echo $v;//输出（打印）姓名
	echo "<br />";
}
//使用循环结构遍历数组，获取学号和姓名
foreach($students as $key=>$v)
{ 
    echo $key.":".$v;//输出（打印）学号：姓名
	echo "<br />";
}

//PHP中结构嵌套之循环嵌套
 $students = array(
'2010'=>array('令狐冲',"59"),
'2011'=>array('林平之',"44"),
'2012'=>array('曲洋',"89"),
'2013'=>array('任盈盈',"92"),
'2014'=>array('向问天',"93"),
'2015'=>array('任我行',"87"),
'2016'=>array('冲虚',"58"),
'2017'=>array('方正',"74"),
'2018'=>array('岳不群',"91"),
'2019'=>array('宁中则',"90"),
);//10个学生的学号、姓名、分数，用数组存储
 
foreach($students as $key=>$val)
{ //使用循环结构遍历数组,获取学号,=>数组成员访问符号
     echo $key; //输出学号
	 echo ":";
	 //循环输出姓名和分数
foreach($val as $v)	 
	{  //->对象成员访问符号
		echo $v; 
	 }
	 echo "<br />";
}