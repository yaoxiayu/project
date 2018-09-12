<?php

	//获取请求的参数
	$username = $_POST['username'];

	//数据库检测
<<<<<<< HEAD
	$pdo = new PDO('mysql:host=localhost;dbname=project;charset=utf8','root','');
=======

	$pdo = new PDO('mysql:host=localhost;dbname=lamp0;charset=utf8','root','');
>>>>>>> aa3b7596a810d0f1b63c11b9a7a1b62c50ce6315

	$stmt = $pdo -> prepare('select * from users where username =  ?');

	$arr = [$username];

	$stmt->execute($arr);

	$user = $stmt -> fetch();

	if($user === false){
		echo '1';
	}else{
		echo '0';
	}
