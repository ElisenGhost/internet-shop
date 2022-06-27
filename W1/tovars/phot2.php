<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="../style/css/css.css" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;1,400&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header class="header cont">
		<div class="left" onclick="location.href='../main.php';">
			<div class="logo"><img class="icon" src="../style/img/cm.png"></div>
			<div class="name">
				<div  class="naz">Forza<br></div>
				<div  class="com">Объектив на любой вкус</div>
			</div>
		</div>
		<div class="option">
			<div class="jof">
				<div class="peop">
					<img src="../style/img/ds.png">
				</div>
				<div class="aut" onclick="location.href='aut.php';"><?php if (empty($_SESSION["username"])) : ?>Войти<?php else : echo $_SESSION["username"] ?><?php endif; ?></div>
				<div class="out" onclick="location.href='../inc/out.php';"><?php if (isset($_SESSION["username"])) : ?>Выйти<?php endif; ?></div>
			</div>
			<div class="jof">
				<div class="corz">
					<img src="../style/img/gd.png">
				</div>
				<div class="pok">Корзина <?php if (isset($_SESSION['i'])) echo "+" . $_SESSION['i']; ?> <?php if(empty($_SESSION['i'])) echo " "; ?></div>
			</div>
		</div>
	</header>
	<menu>
		<ul class="mn">
			<li><a class="nav" href="../main.php">Акции</a></li>
			<li><a class="nav" href="../main.php">Доставка и оплата</a></li>
			<li><a class="nav" href="../main.php">Контакты</a></li>
			<li><a class="nav" href="../main.php">Отзывы</a></li>
			<li><a class="nav" href="../main.php">Самовывоз</a></li>
		</ul>
	</menu>
    <content>
        <table>
            <tr>
                <td class="leftcol"><img class="tovar_item" src="../style/img/lu1.jpg"></td>
                <h1>Фотоаппараты</h1>
                <td class="disp" valign="top">Lumix O-877<br>
                <p class="opis">LUMIХ S5 прeдлагаeт иcключительное качeствo изобpажения для фoто и видeo вo вceм диaпaзoне чувствительнocти, зaключенные в эpгoнoмичном кopпусe, предназначeнном для cоздaтeлeй контента, кoтoрые зaботятся о кaчеcтвe.</p>
                <p>700$</p>
                    <form action="../inc/corz.php" method="POST">
					    <input type="hidden" name="tovar_id" value="2" id="2">
					    <button class="btn"  type="submit">Купить</button>
				    </form>
                </td>
                
                
            </tr>
        </table>
        

    </content>
    <footer">
		<div id="square">
		  <div class="footer cns">
			<div class="right">
				<div class="option_footer">
					<div class="jof">
						<div class="peop">
							<img src="../style/img/ds.png">
						</div>
						<div class="aut" onclick="location.href='aut.php';"><?php if (empty($_SESSION["username"])) : ?>Войти<?php else : echo $_SESSION["username"] ?><?php endif; ?></div>
						<div class="out" onclick="location.href='inc/out.php';"><?php if (isset($_SESSION["username"])) : ?>Выйти<?php endif; ?></div>
					</div>
					<div class="jof">
						<div class="corz">
							<img class="icon_foot" src="../style/img/gd.png">
						</div>
						<div class="pok" onclick="">Корзина <?php if (isset($_SESSION['i'])) echo "+" . $_SESSION['i']; ?> <?php if(empty($_SESSION['i'])) echo " "; ?></div>
					</div>
				</div>
				<div class="dfg">
					<div class="logo"><img class="icon" src="../style/img/phon.png"></div>
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