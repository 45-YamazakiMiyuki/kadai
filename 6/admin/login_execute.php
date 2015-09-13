<?php
$user_id = $_POST["user_id"];
$password = $_POST["password"];

if($user_id ==  "admin" AND $password == "password"){
	session_start(); 		// セッションを使うときは宣言
	$_SESSION["user_id"] = "admin"; 
	$_SESSION["password"] = "password"; 
	echo "ログインに成功しました。";
	echo "<a href=index.php>トップページへ</a>";
} else {
	echo "ログインに失敗しました。";
}
?>
<html>
<head>
</head>
<body>
</body>
</html>

