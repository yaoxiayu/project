<?php

	//获取请求的参数
	$username = $_POST['username'];

	//数据库检测
	$pdo = new PDO('mysql:host=localhost;dbname=lamp0;charset=utf8','root','');


<<<<<<< HEAD
	$pdo = new PDO('mysql:host=localhost;dbname=xiangmu;charset=utf8','root','');

=======
>>>>>>> a163002b3d4a2187b50d6867c4660183f412c3f9

	$stmt = $pdo -> prepare('select * from users where username =  ?');

	$arr = [$username];

	$stmt->execute($arr);

	$user = $stmt -> fetch();

	if($user === false){
		echo '1';
	}else{
		echo '0';
	}
