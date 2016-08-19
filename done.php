<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сложный выбор</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<?php include_once("analyticstracking.php") ?>
</head>
<body>
	<div class="wrapper">
		<div class="conteiner">
			<!-- Контент -->
			<h1>Спасибо за покупку!</h1>
			<p>Ваша покупа: <?php echo $_GET['name']; ?></p>
			<!-- Конец - Контент -->
		</div>
	</div>	
	<!-- Яндекс метрика именно сюда! -->
	<?php include_once("yandexmetrika.php") ?>
</body>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</html>