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
<body class="noscroll-search">
<main class="main">
	<div class="totopblock">
		<header class="header">
			<div class="header__logotip">
				<a href="index.php"><img src="images/logo_helix.svg" alt="" /></a>
				<span>Результат  Репутация  Развитие</span>
			</div>
			<div class="header__phone">
				<span>+375 17 </span><a href="tel:+375296571000">336-99-86</a>
			</div>
			<div class="header__adress">
				г. Минск, пр-т Дзержинского, 104, блок Б, офис 1403Б.
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
				<div class="top-search show" style="display: block">
					<form action="search.php">
					<input type="text" class="form-control" value="Проектировать" />
					<input type="button" value="" class="top-search__submit" />
					<input type="submit" value="" class="top-search__submit" />
					</form>
				</div>
			</div>
		</nav>
	</div>	
	<div class="search-rezult" style="display:block">
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
	</div>
	<div class="content">
		<div class="main-slider">
			<span class="main-slider__prev"></span>
			<span class="main-slider__next"></span>
			<div class="main-slider__inside">
				<div class="main-slider__item">
					<img src="images/slider-pic.jpg" alt="" class="imgslider" />
					<div class="main-slider__content">
						<div class="main-slider__content-text">
							<p class="main-slider__content-zagl">Генеральный подряд</p>
							<p>Полный комплекс работ по реализации сложных строительных проектов. Эффективная организация процессов на всех стадиях реализации проекта.</p>
							<a href="#"class="main-slider__content-url rc3">Узнайте больше</a>
						</div>
					</div>
				</div>
				<div class="main-slider__item">
					<img src="images/proektirovanie.jpg" alt="" class="imgslider" />
					<div class="main-slider__content">
						<div class="main-slider__content-text">
							<p class="main-slider__content-zagl">Проектирование</p>
							<p>Комплексные решения в проектировании объектов любой сложности, масштаба и назначения. Партнерство с лидерами рынка и госорганами.</p>
							<a href="#"class="main-slider__content-url rc3">Узнайте больше</a>
						</div>
					</div>
				</div>
				<div class="main-slider__item">
					<img src="images/monolit.jpg" alt="" class="imgslider" />
					<div class="main-slider__content">
						<div class="main-slider__content-text">
							<p class="main-slider__content-zagl">Монолитные работы</p>
							<p>Весь спектр услуг по возведению монолитных конструкций любого назначения и конфигурации.</p>
							<a href="#"class="main-slider__content-url rc3">Узнайте больше</a>
						</div>
					</div>
				</div>
				<div class="main-slider__item">
					<img src="images/komm_interier.jpg" alt="" class="imgslider" />
					<div class="main-slider__content">
						<div class="main-slider__content-text">
							<p class="main-slider__content-zagl">Отделочные работы</p>
							<p>Безупречная реализация проектов по оформлению помещений, воплощение идей любой сложности.</p>
							<a href="#"class="main-slider__content-url rc3">Узнайте больше</a>
						</div>
					</div>
				</div>
			</div>
			<div class="main-slider__wy-our">
				<div class="main-slider__wy-our__header">почему мы</div>
				<ul>
					<li class="w1"><img src="images/wyour1.svg" height="50" alt="" />Наличие <a href="page12.php">сертификатов и аттестатов</a></li>
					<li class="w2"><img src="images/wyour2.svg" height="50" alt="" />Максимальная эффективность</li>
					<li class="w3"><img src="images/wyour3.svg" height="50" alt="" />Богатый опыт реализации и согласования проектов</li>
					<li class="w4"><img src="images/wyour4.svg" height="50" alt="" />Уникальная команда профессионалов</li>
					<li class="w5"><img src="images/wyour5.svg" height="50" alt="" />Прозрачный бизнес, открытые расчёты</li>
				</ul>
			</div>
		</div>
		<div class="main-about">
			<div class="main-about__pic"><img src="images/logotip-big.png" alt="" /></div>
			<div class="main-about__text">
				<p><strong>Компания ХЕЛИКС ПЛЮС</strong> успешно решает амбициозные задачи на всех этапах строительства. Мы реализуем полный цикл работ – от концепции и проектирования до запуска объекта в эксплуатацию.</p>
				<p>Высокое качество исполнения проектов и <a href="page06.php">признание клиентов</a> позволили нам за несколько лет вырасти из небольшой команды единомышленников до уровня компании-генерального подрядчика.</p>
				<p>Нас объединяет богатый профессиональный опыт и желание предложить рынку принципиально новый уровень строительных услуг, построенный на открытых расчетах и взаимном доверии.</p>
				<p>Наша компания старается всегда превосходить ожидания заказчика – будь то творческая концепция, масштабные строительно-монтажные работы или простая отделка помещений.</p>
			</div>
		</div>
		<div class="main-work-with-client">
			<a name="podhod" id="podhod"></a>
			<div class="main-work-with-client__inner">
				<p class="main-work-with-client__zagl1">Наш уникальный<br>подход В РАБОТЕ С КЛИЕНТАМИ</p>
				<p class="main-work-with-client__zagl2">основан на <span>трех</span><br>принципах</p>
				<ul>
					<li>
						<span  class="foto-hover">
							<p class="zagl">Результат</p>
							<p>Мы работаем на результат, которым будут довольны наши клиенты</p>
						</span>
					</li>
					<li>
						<span  class="foto-hover">
							<p class="zagl">Репутация</p>
							<p>Доверие клиентов и отличная репутация стимулируют нас реализовывать проекты на самом высоком уровне</p>
						</span>
					</li>
					<li>
						<span  class="foto-hover">
							<p class="zagl">Развитие</p>
							<p>Мы всегда находимся в поиске новых, максимально эффективных решений в сфере строительства</p>
						</span>
					</li>
				</ul>
			</div>
		</div>
		<div class="main-news">
			<h2 class="main-news__h2">Новости</h2>
			<div class="main-news__inner">
				<img src="images/news1.jpg" alt="" />
				<div class="main-news__text">
					<h3 class="main-news__h3">СМИ Перми: новый аэропорт должен строить российский генподрядчик</h3>
					<a href="page02.php"  class="main-news__podrobno">подробнее</a>
					<span class="date">11 августа 2015</span>
				</div>
			</div>
		</div>
	</div>

	<footer class="footer">
		<div class="footer__inside">
			<div class="footer__adress">
				<p>Моб: <a href="tel:+375296571000">+375 17 336-99-86</a></p>
				<p>Тел./факс: <a href="tel:+375172215203">+375 17 221-52-03</a></p>
				<p class="email"><a href="mailto:Info@helix.by">info@helix.by</a></p>
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
<div class="hidepic">
	<img src="images/in-hover.png" alt="">
	<img src="images/tw-hover.png" alt="">
	<img src="images/fb-hover.png" alt="">
	<img src="images/in-960-hover.png" alt="">
	<img src="images/tw-960-hover.png" alt="">
	<img src="images/fb-960-hover.png" alt="">
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
