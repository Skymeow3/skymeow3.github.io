<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:intropage.php");
} else {
?>

<html>
	<head>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/main.css" rel="stylesheet">
		<link href="css/osn.css" rel="stylesheet">
		<script src="/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<title>CRYPTO-FLOWERS - МОЙ ПРОФИЛЬ</title>
	</head>
	
	<body>
			<div class="headers"> 
				<div class="container">
					<div class="row">
						<div class="otsp">
						<div class="col-md-3">
						<a href="profile.php"><img src="img/profle.png" style="height: 30px; widht: 30px;">  ПРОФИЛЬ </img></a>
						</div>
						
						<div class="col-md-3">
						<a href="ferma.php"><img src="img/flower.png" style="height: 30px; widht: 30px;">  ФЕРМА </img></a>
						</div>
						
						<div class="col-md-3">
						<a href="static.php"><img src="img/barchart.png" style="height: 30px; widht: 30px;">  СТАТИСТИКА </img></a>
						</div>
						
						<div class="col-md-3">
						<a href="payment.php"><img src="img/money.png" style="height: 30px; widht: 30px;">  ВЫВОД СРЕДСТВ </img></a>
						</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="menue">
			Добро пожаловать, <?php echo $_SESSION['session_username'];?>
			</div>
			
			<div class="payment">
			
			</div>
			
			<div class="footere">
			
			</div>
</html>	

<?php
}
?>
