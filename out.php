<?php 	

// 读取服务器session文件
session_start();
// 销毁服务器session文件保存的内容
session_destroy();

header("location:index.php")

?>