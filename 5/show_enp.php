<head>
<meta charset="utf-8">
<title></title>
</head>
<body>
<?php
$fp = fopen("data/data.csv", "r");		//ファイルを開く
flock($fp, LOCK_SH);					//ファイルロック
while(!feof($fp)){
    $fileline = fgets($fp);
    print($fileline . "<br />");
}
flock($fp, LOCK_UN);                      //ロック解除
fclose($fp);                              //ファイルを閉じる
?>
</body>