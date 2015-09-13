<?php
$news_id = $_GET["news_id"];
$name;
$email;
$age;
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
$sql = "SELECT * FROM news WHERE news_id = " . $news_id;
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// var_dump($results);
foreach($results as $row) {
//	var_dump($row);
	$news_title = $row["news_title"];
	$news_detail = $row["news_detail"];
	$show_flg = $row["show_flg"];
	$author = $row["author"];
}
$pdo = null;
?>
<html>
<head>
</head>
<body>
<form action="update_execute.php" method="post">
	タイトル: <input type="text" name="news_title" value="<?php echo $news_title ?>" />
	本文: <textarea name="news_detail"><?php echo $news_detail ?></textarea>
	表示: <input type ="radio" name="show_flg" value="1" <?php if ($show_flg == '1'){echo 'checked';}?>>表示する
<input type ="radio" name="show_flg" value="0" <?php if ($show_flg == '0'){echo 'checked';}?>>表示しない
	作成者: <input type="text" name="author" value="<?php echo $author ?>" />
	<input type="hidden" name="news_id" value="<?php echo $news_id ?>" />
	<input type="submit" value="更新" />
</form>
</body>
</html>