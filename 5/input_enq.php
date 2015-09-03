<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<form action="input_finish.php" method="post">
	名前: <input type="text" name="name" /><br>
	E-mail: <input type="text" name="email" /><br>
	年齢: <input type="text" name="age" /><br>
	性別: <input type="radio" name="sex" value="男">男 <input type="radio" name="sex" value="女">女</br>
	<input type="hidden" name="hobby" value="">
	趣味: <input type="checkbox" name="hobby[]" value="html">html
	<input type="checkbox" name="hobby[]" value="css">css
	<input type="checkbox" name="hobby[]" value="javascript">javascript<br>
	<input type="submit" />
</form>


</body>
</html>