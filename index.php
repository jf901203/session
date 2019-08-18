<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
<?php  
 // 读取session这个文件
  session_start();
  // 如果这个状态存在
 if(isset($_SESSION['username'])){

  echo "<a href='index.php'>ssss</a>"."or"."<a href='out.php'>ssss</a>";

 }else{

echo'<form action="login.php" method="post">
 
 <p><input type="text" name="name"></p>
 <p><input type="password" name="pwd"></p>
 <input type="submit">
</form>';

 }

?>


</body>
</html>