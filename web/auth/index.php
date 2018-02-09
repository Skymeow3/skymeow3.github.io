<?php
session_start();
?>
<?php require_once("includes/connection.php"); ?>
<?php
if(isset($_SESSION["session_username"])){
header("Location: intropage.php");
}

if(isset($_POST["login"])){

if(!empty($_POST['username']) && !empty($_POST['password'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $query =mysql_query("SELECT * FROM usertbl WHERE username='".$username."' AND password='".$password."'");

    $numrows=mysql_num_rows($query);
    if($numrows!=0)

    {
    while($row=mysql_fetch_assoc($query))
    {
    $dbusername=$row['username'];
    $dbpassword=$row['password'];
    }

    if($username == $dbusername && $password == $dbpassword)

    {


    $_SESSION['session_username']=$username;
    header("Location: intropage.php");
    }
    } else {

 $message =  "Ошибка при вводе логина или пароля";
    }

} else {
    $message = "Проверьте, заполнены ли все поля!";
	header( 'Refresh: 3; url=http://p477133.ihc.xyz/web/auth/' );
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
			<form name="loginform" action="" method="POST">
			<center>
			<br><br>
			<input type="text" name="username" style="background-color: transparent; outline: none; border-radius: 7px; text-align: center; padding: 10 55 10 55;" required placeholder="Логин"></input>
			<br><br>
			<input type="password" name="password" style="background-color: transparent; outline: none; border-radius: 7px; text-align: center; padding: 10 55 10 55;" required placeholder="Пароль"> </input>
			<br><br>
			<button type="sumbit" name="login" style="background-color: transparent; outline: none; border-radius: 7px; text-align: center; padding: 7 30 7 30;">ВОЙТИ</button>
			</center>
			</form>
			</div>
			<div class="rules">
			<br><br>
			<center><?php if (!empty($message)) {echo "<p class=\"error\">" . "". $message . "</p>";} ?></center>
			</div>
		</div>	
</html>
	

	