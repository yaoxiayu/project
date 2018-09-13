<?php

	//获取请求的参数
	$username = $_POST['username'];

	//数据库检测

<<<<<<< HEAD
	$pdo = new PDO('mysql:host=localhost;dbname=nuomi;charset=utf8','root','');

=======
	$pdo = new PDO('mysql:host=localhost;dbname=xiangmu;charset=utf8','root','');
>>>>>>> 1e041ad7edde863b87f55cdd5effe3970eb5134d

	$stmt = $pdo -> prepare('select * from users where username =  ?');

	$arr = [$username];

	$stmt->execute($arr);

	$user = $stmt -> fetch();

	if($user === false){
		echo '1';
	}else{
		echo '0';
	}
