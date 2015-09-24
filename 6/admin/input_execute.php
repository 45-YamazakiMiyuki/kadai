<?php
$news_title = $_POST["news_title"];
$news_detail = $_POST["news_detail"];
$show_flg = $_POST["show_flg"];
$author = $_POST["author"];

$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
// $sql = "INSERT INTO news (news_title, news_detail, show_flg, author, update_date, create_date) VALUES ('" . $news_title . "','" . $news_detail . "','" . $show_flg. "','" .$author ."',sysdate() ,sysdate() )";


$sql = "INSERT INTO news (news_title, news_detail, show_flg, author, update_date, create_date) VALUES (:news_title ,:news_detail,:show_flg,:author,sysdate() ,sysdate())";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':news_title', $news_title, PDO::PARAM_STR);
$stmt->bindValue(':news_detail', $news_detail, PDO::PARAM_STR);
$stmt->bindValue(':show_flg', $show_flg, PDO::PARAM_INT);
$stmt->bindValue(':author', $author, PDO::PARAM_STR);
$result = $stmt->execute();
var_dump($result);

if($result) {
	echo "データが登録できました";
	echo "<a href=news_list.php>一覧へ</a>";
} else {
	echo "データの登録に失敗しました";
}
$pdo = null;
?>
<html>
<head>
</head>
<body>
</body>
</html>

