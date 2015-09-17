<?php
if( array_key_exists( 'search',$_GET ) ) {
    //パラメータ有り
   $search = $_GET["search"];
} else {
   $search = NULL;
}
$pdo = new PDO("mysql:host=localhost;dbname=cs_academy;charset=utf8", "root", "");
//$sql = "SELECT news_id,news_title,CASE show_flg WHEN "1" THEN "表示する" ELSE "表示しない" END AS show_flg FROM news ORDER BY create_date DESC";
if (is_null($search) ) {
    $sql = "SELECT news_id,news_title, show_flg FROM news ORDER BY create_date DESC";
} else {
    $sql = "SELECT news_id,news_title, show_flg FROM news WHERE news_title LIKE '%" .$search ."%' OR news_detail LIKE '%" .$search ."%' ORDER BY create_date DESC";
}
//var_dump($sql);
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($results);
// HTML出力用の変数 $view を宣言
$view = "";

// $view に表示する文字列を追記していく
$view .= "<table>";
foreach($results as $row) {
//	var_dump($row);
	$view .= "<tr>";
	$view .= "<td><a href=update.php?news_id=" . $row["news_id"] . ">" . $row["news_id"] . "</a></td>";
	$view .=  "<td><a href=update.php?news_id=" . $row["news_id"] . ">" . $row["news_title"] . "</a></td>";
	if ($row["show_flg"] == "1") {
		$view .=  "<td><a href=update.php?news_id=" . $row["news_id"] . "> 表示する</a></td>";
	} else {
		$view .=  "<td><a href=update.php?news_id=" . $row["news_id"] . "> 表示しない</a></td>";
	}
	$view .= "</tr>";
}
// table閉じタグで終了
$view .= "</table>";
$pdo = null;
?>
<html>
<head>
</head>
<body>
<form action="news_list.php" method="get">
	部分一致検索（タイトル/本文） <input type="text" name="search" />
	<input type="submit" value="検索" />
</form>
<?php echo $view ?>
<hr>
<a href="index.php">index.php</a> 
</body>
</html>
