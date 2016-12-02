<!DOCTYPE html>
<html >
<head>
	<meta charset="utf-8" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if IE]><script src="js/rounded-corners-min.js"></script><![endif]-->
	<title>Untitled Document</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link rel="stylesheet" href="css/jquery.modal.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
<?php 
	require_once './module/mobile_detect.php';
	$detect = new Mobile_Detect;

	if ($detect->isTablet()) {
		echo '<meta name="viewport" content="width=1024px">';
	} else {
		echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		echo '<link rel="stylesheet" href="style-mobile.css" type="text/css" />';
	}
?>
	<!--[if IE]><link rel="stylesheet" href="styleie.css" type="text/css" /><![endif]-->
</head>
<body>
<main class="main">
	<div class="totopblock">
		<header class="header">
			<div class="header__logotip">
				<a href="index.php"><img src="images/logo_helix.svg" alt="" /></a>
				<span>Результат  Репутация  Развитие</span>
			</div>
			<div class="header__phone">
				<span>+375 29 </span><a href="tel:+375296571000">657-10-00</a>
			</div>
			<div class="header__adress">
				г. Минск, пр-т Дзержинского, 104, блок Б, офис 1403Б
			</div>
			<a class="header__order-call rc3" href="#call-order"  rel="modal">Заказать звонок</a>
			<span class="header-menu-bt"></span>
			<span class="header-search-bt"></span>
		</header>
		<div class="top-menu--bg"></div>
		<nav class="top-menu">
			<div class="top-menu--title">МЕНЮ</div>
			<span class="top-menu--close"></span>
			<div class="top-menu__inside">
				<ul>
					<li><a href="page01.php">Новости</a></li>
					<li><a href="page03.php">Деятельность</a></li>
					<li><a href="page09.php">Проекты</a></li>
					<li><a href="page12.php">Аттестаты</a></li>
					<li><a href="page08.php">Партнерство</a></li>
					<li><a href="page06.php">Клиенты</a></li>
					<li><a href="page11.php">вакансии</a></li>
					<li><a href="page05.php">Контакты</a></li>
				</ul>
				<div class="top-search">
					<form action="search.php">
					<input type="text" class="form-control" />
					<input type="button" value="" class="top-search__submit" />
					<input type="submit" value="" class="top-search__submit" />
					</form>
				</div>
			</div>
		</nav>
	</div>
	<div class="search-rezult">
		<span class="search-close"></span>
		<ul>
			<li>
				<a href="#">
					<span class="number">1.</span>
					<div class="img"><img src="images/search1.jpg" alt="" /></div>
					<div class="text">
						<p>СМИ Перми: новый аэропорт должен <span class="red">проектировать</span> российский генподрядчик</p>
						клиенты
					</div>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="number">2.</span>
					<div class="img"><img src="images/search1.jpg" alt="" /></div>
					<div class="text">
						<p>СМИ Перми: новый аэропорт должен <span class="red">проектировать</span> российский генподрядчик</p>
						клиенты
					</div>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="number">3.</span>
					<div class="img"><img src="images/search1.jpg" alt="" /></div>
					<div class="text">
						<p>СМИ Перми: новый аэропорт должен <span class="red">проектировать</span> российский генподрядчик</p>
						клиенты
					</div>
				</a>
			</li>
		</ul>
	</div>	<div class="content">
		<div class="show-news-all">
			<h1 class="show-news-all-h1">Новости</h1>
			<div class="show-news-year">
				<a href="#">2015</a>
				<a href="#" class="active">2014</a>
			</div>
			<div class="show-news-row">
				<div class="show-news-row__img"><a href="page02.php"><img src="images/news-1.jpg" alt=""></a></div>
				<div class="show-news-row__text">
					<div class="show-news-row__date">11 августа 2015</div>
					<div class="show-news-row__head"><a href="page02.php">СМИ Перми: новый аэропорт должен строить российский генподрядчик</a></div>
					Важным аспектом строительства аэропорта является необходимость использовать архитектурные проекты с яркими фасадными решениями и качественной внутренней отделкой. Проект интерьера нового аэропорта Перми, согласно результатам конкурса
					<div><a href="page02.php" class="main-news__podrobno">подробнее</a></div>
				</div>
			</div>
			<div class="show-news-row">
				<div class="show-news-row__img"><a href="page02.php"><img src="images/news-2.jpg" alt=""></a></div>
				<div class="show-news-row__text">
					<div class="show-news-row__date">11 августа 2015</div>
					<div class="show-news-row__head"><a href="page02.php">Беларусь готова на китайскую гимнастику ради удвоения экспорта</a></div>
					Важным аспектом строительства аэропорта является необходимость использовать архитектурные проекты с яркими фасадными решениями и качественной внутренней отделкой. Проект интерьера нового аэропорта Перми, согласно результатам конкурса
					<div><a href="page02.php" class="main-news__podrobno">подробнее</a></div>
				</div>
			</div>
			<div class="show-news-row">
				<div class="show-news-row__img"><a href="page02.php"><img src="images/news-3.jpg" alt=""></a></div>
				<div class="show-news-row__text">
					<div class="show-news-row__date">11 августа 2015</div>
					<div class="show-news-row__head"><a href="page02.php">США ввели санкции против оборонных предприятий России</a></div>
					По неофициальной информации, «Бел Фуд Сервис» связывают с владельцами «Торгового центра «Ждановичи». Компания действительно зарегистрирована по тому же адресу.
					<div><a href="page02.php" class="main-news__podrobno">подробнее</a></div>
				</div>
			</div>
			<div class="show-news-row">
				<div class="show-news-row__img"><a href="page02.php"><img src="images/news-4.jpg" alt=""></a></div>
				<div class="show-news-row__text">
					<div class="show-news-row__date">11 августа 2015</div>
					<div class="show-news-row__head"><a href="page02.php">Президент призвал носить белорусское и отдыхать дома</a></div>
					Президент Беларуси Александр Лукашенко считает, что если белорусы будут отдавать предпочтение отечественной продукции, то вопрос с валютой не будет стоять остро. Такое мнение он высказал сегодня во время общения с представителями трудового коллектива.
					<div><a href="page02.php" class="main-news__podrobno">подробнее</a></div>
				</div>
			</div>
		</div>
		<div>
			<span class="button-more rc2">больше новостей</span>
		</div>
		<div class="work-with-client">
			<ul>
				<li><a href="index.php#podhod" title="">
					<span>
						<p class="zagl">Результат</p>
						<p>Мы работаем на результат, которым будутдовольны наши клиенты</p>
					</span></a>
				</li>
				<li><a href="index.php#podhod" title="">
					<span>
						<p class="zagl rep">Репутация</p>
						<p>Доверие клиентов и отличная репутация стимулируют нас реализовывать проекты на самом высоком уровне</p>
					</span></a>
				</li>
				<li><a href="index.php#podhod" title="">
					<span>
						<p class="zagl raz">Развитие</p>
						<p>Мы всегда находимся в поиске новых, максимально эффективных решений в сфере строительства</p>
					</span></a>
				</li>
			</ul>
		</div>

	</div>

	<footer class="footer">
		<div class="footer__inside">
			<div class="footer__adress">
				<p>Моб: <a href="tel:+375296571000">+375 29 657-10-00</a></p>
				<p>Тел./факс: <a href="tel:+375172215203">+375 17 336-99-86</a></p>
				<p class="email"><a href="mailto:info@helix.by">info@helix.by</a></p>
			</div>
			<div class="footer__develop">
				<div class="footer__copyright__socseti"><a href="#" class="soc-face"><span></span></a><a href="#" class="soc-in"><span></span></a><a href="#" class="soc-twit"><span></span></a></div>
			</div>
			<div class="footer__copyright">
				&copy; Helix Plus
			</div>
		</div>
	</footer>
	<script src="js/modernizr.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script src="js/mapagoogle.js"></script>
	<script src="js/jquery.modal.js"></script>
	<script src="js/main.js"></script>

</main>
<div id="call-order" class="modal">
	<a href="#" class="close-modal" rel="modal:close"></a>
	<div class="modal__head">ЗАКАЗАТЬ ЗВОНОК</div>
	<div class="modal__form-row">
		<input type="text" class="modal__form-inptxt" placeholder="Ваше имя" />
		<label>имя</label>
	</div>
	<div class="modal__form-row">
		<input type="tel" class="modal__form-inptxt" placeholder="Ваш номер телефона" />
		<label>телефон</label>
	</div>
	<div class="tcent"><span class="button-more">ОТПРАВИТЬ</span></div>
</div>
<div class="hidepic">
	<img src="images/in-hover.png" alt="">
	<img src="images/tw-hover.png" alt="">
	<img src="images/fb-hover.png" alt="">
	<img src="images/in-960-hover.png" alt="">
	<img src="images/tw-960-hover.png" alt="">
	<img src="images/fb-960-hover.png" alt="">
</div>
</body>
</html>
