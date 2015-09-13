<?php 
session_start(); 		// セッションを使うときは宣言
if (!isset($_SESSION["user_id"])) { 
	header("Location: login.php");
} 
?> 
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<ul>
<li><a href="news_list.php">ニュース一覧</a></li>
<li><a href="input.php">ニュース入力</a></li>
</ul>
</body>
</html>
