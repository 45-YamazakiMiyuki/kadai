<?php
// keyid の設定ファイルを読み込む
require("config.php");

// APIのURLを生成
$url  = "http://api.gnavi.co.jp/master/PrefSearchAPI/20150630/?keyid=" . $key_id . "&format=json";

// URL読み込み
$json_data = file_get_contents($url, true);

// jsonをphpで扱いやすいように変更
$data = json_decode($json_data);
//var_dump($data);

// 配列に値(都道府県)を代入する
$pref_array = $data->pref;
// var_dump($pref_array);

// newsに表示用の変数を定義
$view = "";
// 配列からデータを1件ずつ取得し、表示
foreach ($pref_array as $key => $pref_value){
//var_dump($pref_value);
    $view .= '<option value=' . $pref_value->pref_code . '>' . $pref_value->pref_name . '</option>';
}

?>
<html>
<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
    <form action="search_execute.php" method="get">
        都道府県：<select name="pref">
            <?php echo $view ?>
        </select>
        <p><label>名前：<input type="text" name="mise" size="40" maxlength="20"></label></p>
        <input type="submit" name="submit" value="検索">
    </form>
<span><a href="index.php">index.php</a></span>
</body>