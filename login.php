<?php 	

// login.php是请求的地址

// 创建服务器session文件或读取服务器session文件 创建session这个文件
session_start();
header("Content-type:text/html;charset=utf-8");
$name=$_POST['name'];
$pwd=$_POST['pwd'];
$link=mysql_connect('localhost','root','root') or die(mysql_error());
$db=mysql_select_db('city',$link);
$sql="select * from user where name='$name' and pwd='$pwd'";
$res=mysql_query($sql);
$arr=mysql_fetch_assoc($res);
if($arr['name']===$name){

  // 在服务器session文件中保存session设置的内容
 $_SESSION['username']=$arr['name'];
 $_SESSION['userpwd']=$arr['pwd'];
   
  echo "<a href='index.php'>ssss</a>";

}



?>