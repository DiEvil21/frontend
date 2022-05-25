<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
	<script src="js/scroll.js"></script>
	<title>Ось | Образовательная среда</title>
</head>
<body>
	<script>
  		AOS.init();
	</script>
	<?php require "blocks/header.php" ?>
	<div class="mesto" data-aos="fade-left">	</div>
	<?php require "blocks/about.php" ?>
	<hr>
	<div class="container mt-5" data-aos="fade-left">
		<?php require "blocks/test.php" ?>
	</div>
	<hr>
	<div class="container mt-5">
		<?php require "blocks/test2.php" ?>
	
	<hr>
		<div class="command" data-aos="fade-left">
			<h2 class="center pt-5">Наша команда</h2>
			<div class="container mt-5 p-6">
		  		<?php require "blocks/people.php" ?>
		  	</div>
	  	</div>
  	</div>
	<hr>	
	<div class="container mt-5" >
		<h3 class="mb-5 text-center" id="contacts" data-aos="fade-bottom">О нас</h3>
		<p class="about-text" data-aos="fade-bottom">
			Наша миссия - облегчить связь студентов и преподавателей при помощи приложения. А так как мы сами студенты, то точно знаем чего Вы хотите!		</p>
		<?php require "blocks/portfolio.php" ?>

  	</div>

  	<?php require "blocks/footer.php" ?>
  	
</body>
</html>