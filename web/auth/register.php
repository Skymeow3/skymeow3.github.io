<?php require_once("includes/connection.php"); ?>
<?php

if(isset($_POST["register"])){


if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
	$full_name=$_POST['full_name'];
	$email=$_POST['email'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	

		
	$query=mysql_query("SELECT * FROM usertbl WHERE username='".$username."'");
	$numrows=mysql_num_rows($query);
	
	if($numrows==0)
	{
	$sql="INSERT INTO usertbl
			(full_name, email, username,password) 
			VALUES('$full_name','$email', '$username', '$password')";

	$result=mysql_query($sql);


	if($result){
	 $message = "Аккаунт успешно создан";
	} else {
	 $message = "Failed to insert data information!";
	}

	} else {
	 $message = "Пользователь с таким логином уже существует! Попробуйте другие варианты";
	}

} else {
	 $message = "Проверьте, заполнены ли все поля";
}
}
?>


	
	<html>
	<head>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/main.css" rel="stylesheet">
		<script src="/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<title>CRYPTO-FLOWERS</title>
	</head>
	
	<body>
		<div class="container">
			<div class="logo"><a href="../index.html"><img id="maxlogo" src="/img/logo.png"/></a></div>			
			<div class="authreg">
			<form name="registerform" action="register.php" method="post">
			<center>
			<br><br>
			<input type="text" name="full_name" style="background-color: transparent; outline: none; border-radius: 7px; text-align: center; padding: 10 55 10 55;" required placeholder="Ваше имя"></input>
			<br><br>
			<input type="email" name="email" style="background-color: transparent; outline: none; border-radius: 7px; text-align: center; padding: 10 55 10 55;" required placeholder="Email"></input>
			<br><br>
			<input type="text" name="username" style="background-color: transparent; outline: none; border-radius: 7px; text-align: center; padding: 10 55 10 55;" required placeholder="Логин"></input>
			<br><br>
			<input type="password" name="password" style="background-color: transparent; outline: none; border-radius: 7px; text-align: center; padding: 10 55 10 55;" required placeholder="Пароль"> </input>
			<br><br>
			<button type="sumbit" name="register" style="background-color: transparent; outline: none; border-radius: 7px; text-align: center; padding: 7 30 7 30;">ЗАРЕГИСТРИРОВАТЬСЯ</button>
			</center>
			</form>
			</div>
			<div class="rules">
			<br><br>
			<center><?php if (!empty($message)) {echo "<p class=\"error\">" . "". $message . "</p>";} ?></center>
			</div>
		</div>	
</html>