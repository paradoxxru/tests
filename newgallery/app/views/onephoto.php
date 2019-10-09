<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type"> 
	<title>Albums</title>
	<link rel="stylesheet" type="text/css" href="assets/css/main.css">
</head>
<body>
	<div class="header">
		<?php
			include("../app/views/header/header.php");
		?>
	</div>
	<section class="gallery">
		<h1>Фото</h1>
		<div class="albums">
			<?php
				foreach ($arr_files as $key) {
					$item = new CItem();
					$item->toProperty($key);
					$item->render('one_photo');
				}

			?>
		</div>
	</section>
	<div class="footer">
		
	</div>



</body>
</html>