<!-- 
Второй способ - гораздо более изящный
=================================
Пишем javascript код отдельно, вне тега <body>, а после него, внутри тега <script>
На данной странице 1 цель.
-->

<?php 

	// Определяем переменные
	$name = $_GET['name'];
	$cost;

	// Узнаем стоимость
	switch ($name) {
	    case 'Мурка':
	        $cost = '5 000 руб.';
	        break;
	    case 'Медведь':
	        $cost = '40 000 руб.';
	        break;
	}
?>

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
			<h1>Корзина</h1>
			<strong><?php echo $name ?></strong> - ваш будущий питомец! Покупаем?
			<p>Заплатите <?php echo $cost ?></p>
			<form action="done.php" id="buy">
				<input type="text" value="<?php echo $name ?>" class="hiden" name="name">
				<button type="submit">Купить</button>
			</form>
			<!-- Конец - Контент -->
		</div>
	</div>	
	<!-- Яндекс метрика именно сюда! -->
	<?php include_once("yandexmetrika.php") ?>
</body>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
	<script>
		var phoneButton = document.getElementById('buy');

		phoneButton.addEventListener('submit', function() {
		  ga('send', 'event', 'В корзине', 'Купить');		  
		});

		phoneButton.addEventListener('submit', function() {
		  yaCounter38996305.reachGoal('order');		  
		});

		
	</script>
</html>
