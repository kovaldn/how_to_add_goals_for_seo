<!-- 
************GOOGLE ANALYTICS************
Документация
https://developers.google.com/analytics/devguides/collection/analyticsjs/events
=================================
Первый способ  
Пишем javascript код прямо внутри HTML тега 
Нам интересует момент "отправки формы", поэтому обрабатываем событие onsubmit.
Внутри вызывается функция "ga" 
=================================
ga('send', 'event', [eventCategory], [eventAction], [eventLabel], [eventValue]);
Первые 2 параментра 'send', 'event' - стандартные, их не меняем
Следущие 2 обязательные:
[eventCategory] - Категория
[eventAction] - Действие
Следующие 3 необязательные:
[eventLabel] - Ярлык 
[eventValue] - Ценность
=================================
На данной странице 2 цели.

************Яндекс МЕТРИКА************
yaCounter38996305.reachGoal('buyCat');
38996305 - номер счетчика
buyCat - идентификатор цели
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Сложный выбор</title>
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/main.css">
	<!-- По новым правила, юниверсал аналитикс вставляется именно сюда! -->
	<?php include_once("analyticstracking.php") ?>	
</head>
<body>
	<div class="wrapper">
		<div class="conteiner">
			<!-- Контент -->
			<div class="box">
				<h3>Кот</h3>
				<img src="http://placekitten.com/250/200" />
				<form action="order.php" id="cat" onsubmit="ga('send', 'event', 'Товары', 'Добавление в корзину', 'Кот', 100); yaCounter38996305.reachGoal('buyCat');" >
					<input type="text" name="name" value="Мурка" readonly>
					<button>В корзину</button>
				</form>
			</div>
			<div class="box">
				<h3>Медведь</h3>
				<img src=" http://placebear.com/g/250/200" />
				<form action="order.php" id="bear" onsubmit="ga('send', 'event', 'Товары', 'Добавление в корзину', 'Медведь', 300); yaCounter38996305.reachGoal('buyВear');">
					<input type="text" name="name" value="Медведь" readonly>
					<button>В корзину</button>
				</form>
			</div>
			<!-- Конец - Контент -->
		</div>
	</div>	
	<!-- Яндекс метрика именно сюда! -->
	<?php include_once("yandexmetrika.php") ?>
</body>
	<script src="js/jquery.js"></script>
	<script src="js/main.js"></script>
</html>