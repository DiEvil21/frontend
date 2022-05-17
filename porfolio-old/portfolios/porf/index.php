<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<title>site PHP</title>
</head>
<body>
	<script>
  		AOS.init();
	</script>
	<?php require "blocks/header.php" ?>
	<?php require "blocks/test.php" ?>
	<?php require "blocks/about.php" ?>
	<?php require "blocks/test.php" ?>

	<div class="container mt-5">
		<h3 class="mb-5 text-center" data-aos="fade-right" data-aos-offset="100">Мои работы</h3>
		<p class="abouttext">
			Пока не много, но я стараюсь =)
		</p>
		<?php require "blocks/portfolio.php" ?>

  	</div>


  	<?php require "blocks/footer.php" ?>
  	
</body>
</html>