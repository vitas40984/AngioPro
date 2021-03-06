<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<title>Angio Pro - операционный журнал для рентгенэндоваскулярной хирургии</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/comon.css">
	<link rel="stylesheet" href="css/protList.css">
</head>
<body>
	<header>
		<h1 style="margin-left: 20%; color:#000033; font-size: 50pt; margin-top: 0">A n g i o &nbsp; P R O <i>t o c o l</i></h1>
		<p style="margin-top: -45px; margin-left: 10px"><i><b>Он-лайн операционный журнал для рентгенэндоваскулярной хирургии</b></i></p>
	</header>
	<main>
		<div style="text-align: center;">
			<h2>Протоколы</h2>
			<a href="#">Сегодня</a>
			<a href="#">Вчера</a>
			<a href="#">Неделя</a>
			<a href="#">Месяц</a>
			<a href="#">Год</a>
			<a href="#">За период</a>
			
		</div>
		<ul type="none">
			<?php foreach ($prot as $p) ?>
				<li><?$p['operDate']?> <a href="patient.html"><?$p['fio']?></a></li>
			<?php endforeach ?>
		</ul>
	</main>
	<footer>
		<p><small><i>&copy; авторские права защищены согласно п.4 ст.1259 ГК РФ</i></small></p>
	</footer>
	<script src="js/ADS-butApear.js"></script>
</body>
</html>