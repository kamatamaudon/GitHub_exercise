<?php
	$link = mysqli_connect('localhost', 'root', '');
	if (!$link) {}
		die('接続失敗！<br>'.mysql_error());
	} else {
		echo '接続成功！';
		mysql_set_charset($link, "utf8");
		echo '文字コードは'。mysqli_character_set_name($link).'です。';
	}
?>