<?php

	//获取请求的参数
	$username = $_POST['username'];

	//数据库检测

	$pdo = new PDO('mysql:host=localhost;dbname=project;charset=utf8','root','');

	$stmt = $pdo -> prepare('select * from shop_users where username =  ?');

	$arr = [$username];

	$stmt->execute($arr);

	$user = $stmt -> fetch();

	if($user === false){
		echo '0';
	}else{
		echo '1';
	}
