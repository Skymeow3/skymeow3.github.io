<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:index.php");
} else {
?>

<html>
	<head>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/main.css" rel="stylesheet">
		<link href="css/osn.css" rel="stylesheet">
		<script src="/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<title>CRYPTO-FLOWERS</title>
	</head>
	
	<body>
			
			
			<div class="menue">
				<span>
				Добро пожаловать, <?php echo $_SESSION['session_username'];?>
				<p style="font-size: 12px;">Вы успешно авторизовались на проекте <b>CRYPTO-FLOWERS!</b><br>Для начала игры вы должны ознакомится с <u><a href="#">правилами</a></u> и подтвердить свою личность.</p>
				<br><br>
				<p style="font-size: 14px;">Пожалуйста, заполните поля ниже и подтвердите свою личность</p>			
				</span>
			</div>
			
			<div class="payment">
			<form>
			<input type="text" required placeholder="Ф.И.О."> </input>
			<br><br>
			<input type="text" required placeholder="Страна"> </input>
			<br><br>
			<input type="text" required placeholder="Область"> </input>
			<br><br>
			<input type="text" required placeholder="Город"> </input>
			<br><br>
			<input type="text" required placeholder="Адрес"> </input>
			<br><br>
			<input type="text" required placeholder="Индекс"> </input>
			<br><br>
			<input type="text" required placeholder="Дата рождения"> </input>
			<br><br>
			<input type="text" required placeholder="Индекс"> </input>
			<br><br>
			<button type="sumbit">СОХРАНИТЬ</button>
			</form>
			</div>
			
			<div class="footere">
			
			</div>
</html>	

<?php
}
?>
