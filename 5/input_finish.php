<head>
<meta charset="utf-8">

<title></title>
</head>
<body>
アンケートにご協力ありがとうございました。</br>
<a href="index.php">トップページへ</a>
</body>
<?php
	$name = $_POST["name"];
	$email = $_POST["email"];
	$age = $_POST["age"];
	$sex = $_POST["sex"];
	$hobby = $_POST["hobby"];
	for($i=0; $i<sizeof($hobby); $i++){
		if($i == 0){
			$hobby_list = "${hobby[$i]}";
		} else {
			$hobby_list = $hobby_list."/"."${hobby[$i]}";
		}
	}


	$file = fopen("data/data.csv","a");	// ファイル読み込み
	flock($file, LOCK_EX);			// ファイルロック
	fputs($file, $name . ",");
	fputs($file, $email . ",");
	fputs($file, $age . ",");
	fputs($file, $sex . ",");
	fputs($file,$hobby_list . PHP_EOL);
	flock($file, LOCK_UN);			// ファイルロック解除
	fclose($file);
?>