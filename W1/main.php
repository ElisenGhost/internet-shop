<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" href="slick/slick-theme.css">
	<link rel="stylesheet" href="slick/slick.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link  href="style/css/css.css" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,400&display=swap" rel="stylesheet">
</head>

<body>
	<header class="header cont">
		<div class="left" onclick="location.href='main.php';">
			<div class="logo"><img class="icon" src="style/img/cm.png"></div>
			<div class="name">
				<div class="naz">Forza<br></div>
				<div class="com">Объектив на любой вкус</div>
			</div>
		</div>
		<div class="option">
			<div class="jof">
				<div class="peop" onclick="location.href='aut.php';">
					<img src="style/img/ds.png">
				</div>
				<div class="aut" onclick="location.href='aut.php';"><?php if (empty($_SESSION["username"])) : ?>Войти<?php else : echo $_SESSION["username"] ?><?php endif; ?></div>
				<div class="out" onclick="location.href='inc/out.php';"><?php if (isset($_SESSION["username"])) : ?>Выйти<?php endif; ?></div>
			</div>
			<div class="jof">
				<div class="corz">
					<img src="style/img/gd.png">
				</div>
				<div class="pok">Корзина <?php if (isset($_SESSION['i'])) echo "+" . $_SESSION['i']; ?> <?php if(empty($_SESSION['i'])) echo " "; ?></div>
			</div>
		</div>
	</header>
	<menu>
		<ul class="mn">
			<li><a class="nav" href="main.php">Акции</a></li>
			<li><a class="nav" href="main.php">Доставка и оплата</a></li>
			<li><a class="nav" href="main.php">Контакты</a></li>
			<li><a class="nav" href="main.php">Отзывы</a></li>
			<li><a class="nav" href="main.php">Самовывоз</a></li>
		</ul>
	</menu>
	<slider>
		<div class="container_slider_css">
			<img class="photo_slider_css" src="https://p4.wallpaperbetter.com/wallpaper/73/934/535/wisteria-flowers-beautiful-nature-wallpaper-preview.jpg" alt="">
			<img class="photo_slider_css" src="https://funart.pro/uploads/posts/2021-03/1617048969_52-p-oboi-krasivie-peizazhi-prirodi-56.jpg" alt="">
			<img class="photo_slider_css" src="https://interier-foto.ru/wp-content/uploads/pejzazh-s-vodoj-3.jpg" alt="">
			<img class="photo_slider_css" src="http://storge.pic2.me/c/1360x800/559/584c6bc09073b.jpg" alt="">
		</div>
	</slider>
	<content>
		<h1>Каталог товаров</h1>
		<div class="cons">
			<div>
				
				<img onclick="location.href='tovars/phot1.php';" class="cons_sl" src="style/img/Ni1.jpg">
				<section onclick="location.href='tovars/phot1.php';" class="price"><p>Nicon I-200<br>500$</section>
				<form action="inc/corz.php" method="POST">
					<input type="hidden" name="tovar_id" value="1" id="1">
					<button class="btn"  type="submit">Купить</button>
				</form>
			</div>
			<div>
				<img onclick="location.href='tovars/phot2.php';" class="cons_sl" src="style/img/lu1.jpg">
				<section onclick="location.href='tovars/phot2.php';" class="price"><p>Lumix O-877<br>700$</section>
				<form action="inc/corz.php" method="POST">
					<input type="hidden" name="tovar_id" value="2" id="2">
					<button class="btn" type="submit">Купить</button>
				</form>
			</div>
			<div>
				
				<img onclick="location.href='tovars/phot3.php';" class="cons_sl" src="style/img/xa.jpg">
				<section onclick="location.href='tovars/phot3.php';"  class="price"><p>Canon M-790<br>350$</section>
				<form action="inc/corz.php" method="POST">
					<input type="hidden" name="tovar_id" value="3" id="3">
					<button class="btn" type="submit">Купить</button>
				</form>
			</div>
			<div>
				<img onclick="location.href='tovars/phot4.php';" class="cons_sl" src="style/img/Son1.jpg">
				<section onclick="location.href='tovars/phot4.php';" class="price"><p>Sony L-340<br>600$</section>
				<form action="inc/corz.php" method="POST">
					<input type="hidden" name="tovar_id" value="4" id="4">
					<button class="btn" type="submit">Купить</button>
				</form>
			</div>
			<div>
				<img onclick="location.href='tovars/phot5.php';" class="cons_sl" src="style/img/g1s.jpg">
				<section onclick="location.href='tovars/phot5.php';" class="price"><p>Canon D-322<br>350$</section>
				<form action="inc/corz.php" method="POST">
					<input type="hidden" name="tovar_id" value="5" id="5">
					<button class="btn" type="submit">Купить</button>
				</form>
			</div>
			<div>
				<img onclick="location.href='tovars/phot6.php';" class="cons_sl" src="style/img/or.jpg">
				<section onclick="location.href='tovars/phot6.php';" class="price"><p>Nikon J-100<br>500$</section>
				<form action="inc/corz.php" method="POST">
					<input type="hidden" name="_id" value="6" id="6">
					<button class="btn" type="submit">Купить</button>
				</form>
			</div>
		</div>
	</content>
	<script src="style/js/jquery.js"></script>
	<script src="slick/slick.js"></script>
	<script src="slick/slick.min.js"></script>
	<script src="style/js/script.js"></script>

	<footer">
		<div id="square">
		  <div class="footer cns">
			<div class="right">
				<div class="option_footer">
					<div class="jof">
						<div class="peop" onclick="location.href='aut.php';">
							<img src="style/img/ds.png">
						</div>
						<div class="aut" onclick="location.href='aut.php';"><?php if (empty($_SESSION["username"])) : ?>Войти<?php else : echo $_SESSION["username"] ?><?php endif; ?></div>
						<div class="out" onclick="location.href='inc/out.php';"><?php if (isset($_SESSION["username"])) : ?>Выйти<?php endif; ?></div>
					</div>
					<div class="jof">
						<div class="corz">
							<img class="icon_foot" src="style/img/gd.png">
						</div>
						<div class="pok" onclick="">Корзина <?php if (isset($_SESSION['i'])) echo "+" . $_SESSION['i']; ?> <?php if(empty($_SESSION['i'])) echo " "; ?></div>
					</div>
				</div>
				<div class="dfg">
					<div class="logo"><img class="icon" src="style/img/phon.png"></div>
						<div class="mumb">
							<div class="nom"><a class="tell" href="tel:+74997777777 ">+7(499)777-77-77</a><br> <a class="tell" href="tel:+74997777777">+7(499)777-77-77</a></div>
							<div class="sva">Обратная связь</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>

</html>