<?php

	//获取请求的参数
	$username = $_POST['username'];

	//数据库检测


<<<<<<< HEAD
	$pdo = new PDO('mysql:host=localhost;dbname=project;charset=utf8','root','');
=======
	$pdo = new PDO('mysql:host=localhost;dbname=xiangmu;charset=utf8','root','');
>>>>>>> 68689cf4592cadb4cf95afa4ad9de55bae8822bb


	$stmt = $pdo -> prepare('select * from users where username =  ?');

	$arr = [$username];

	$stmt->execute($arr);

	$user = $stmt -> fetch();

	if($user === false){
		echo '1';
	}else{
		echo '0';
	}
