<?php
$pref = $_GET["pref"];
$mise = $_GET["mise"];

    //ぐるなびAPIを関数化
	function getRestSeartch($pref,$mise) {
        require("config.php");
        $url  = "http://api.gnavi.co.jp/RestSearchAPI/20150630/?keyid=" . $key_id . "&format=json&name=". $mise . "&pref=" .$pref;
        $json_data = file_get_contents($url, true);
        $data = json_decode($json_data);
		return $data;
	}

$data = getRestSeartch($pref,$mise);
//var_dump($data);
//var_dump($data->rest[0]);
// 配列からデータを1件ずつ取得し、表示
for ($i = 0; ; $i++) {
    if (isset($data->rest[$i])){
        echo "<hr>";
        echo $data->rest[$i]->name . "<br>";
        echo $data->rest[$i]->address . "<br>";
        echo $data->rest[$i]->tel . "<br>";
    } else {
        if ($i==0){
            echo "データが存在しません。" . "<br>";
        }
        break;
    }
}
?>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<span><a href="index.php">index.php</a></span>
</body>