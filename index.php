<!DOCTYPE html>
<?php

$ROOT = $_SERVER['DOCUMENT_ROOT'] . '/';
$BASE_HREF = '//' . $_SERVER['HTTP_HOST'] . (!empty($_SERVER['DOCUMENT_URI']) ? str_replace( substr(str_replace('index.php', '', $_SERVER['DOCUMENT_URI']), 1), '', $_SERVER['REQUEST_URI'] ) : '');
$URL = '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$lang = isset($_GET['lang']) && $_GET['lang'] != '' ? urldecode( strtolower($_GET['lang']) ) : 'ru';
$version = isset($_GET['version']) ? urldecode( strtolower($_GET['version']) ) : '';
$partner = isset($_GET['partner']) ? urldecode( strtolower($_GET['partner']) ) : '';

include_once $ROOT . 'chunks/common.php';

if ( is_local_dev() ) {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}
?>




<?php
include_once $ROOT . 'version.php';
?>




<html lang="<?= $lang ?>" class="<?= is_webp() ? '' : 'no-webp' ?>">
<head>

	<?php if ( $gtm ) { ?>
		<!-- Google Tag Manager --><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','<?= $gtm ?>');</script><!-- End Google Tag Manager -->
	<?php } ?>

	<!-- Yandex.Metrika counter -->
        <script type="text/javascript" >
           (function(m,e,t,r,i,k,a){m[i]=m[i]||function()
        {(m[i].a=m[i].a||[]).push(arguments)};
           m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
           (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
           ym(87781013, "init",
        {clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true}
        );
        </script>
    <!-- /Yandex.Metrika counter -->

	<!-- Global site tag (gtag.js) - Google Ads: AW-10991557016 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-672525736"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-10991557016');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: AW-10991557016 -->


	<!-- Pixel Tik Tik -->
	<script> !function (w, d, t) { w.TiktokAnalyticsObject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enableCookie","disableCookie"],ttq.setAndDefer=function(t,e){t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setAndDefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setAndDefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var i="https://analytics.tiktok.com/i18n/pixel/events.js";ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=i,ttq._t=ttq._t||{},ttq._t[e]=+new Date,ttq._o=ttq._o||{},ttq._o[e]=n||{};var o=document.createElement("script");o.type="text/javascript",o.async=!0,o.src=i+"?sdkid="+e+"&lib="+t;var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(o,a)}; ttq.load('C6NL4V44L0UCTH07S81G'); ttq.page(); }(window, document, 'ttq'); </script>
	<!-- END--Pixel Tik Tik -->

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<base href="<?= $BASE_HREF ?>">

	<title><?= $title ?></title>
	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $description ?>">
	<meta property="og:url" content="<?= $URL ?>">
	<meta property="og:image" content="<?= $share_image ?>?<?= date('md') ?>">
	<link rel="image_src" href="<?= $share_image ?>?<?= date('md') ?>">

	<link rel="stylesheet" href="css/libs/bootstrap.min.css">

	
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css" media="(max-width: 1400px)">


	<link href="favicon.ico" type="image/x-icon" rel="icon">
</head>

<body class="<?= $body_class ?> <?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $version || $partner ? 'page-not-default' : 'page-default' ?> no-gtm page-main page-voted">

	<?php if ( $gtm ) { ?>
		<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden;"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
	<?php } ?>

	<!-- Yandex.Metrika counter -->
       <noscript><div><img src="https://mc.yandex.ru/watch/87781013" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


	<img src="<?= $share_image ?>?<?= date('md') ?>" alt="" style="position: absolute; left: -100000px; z-index: 0">

	

	
	<div class="wrapper">
		
<a href="#modal-form" class="callback w-100 p-0 d-none" data-fancybox>
	<div class="btn btn--yellow"><span>Оставить заявку</span></div>
</a>

<div class="header">
	<div class="container">
		<div class="row m-0">
			<a href="https://synergycybersport.com/" target="_blank" class="header__logo"><img src="img/header/logo.svg" alt=""></a>
			<div class="header__box">
				<nav class="header__nav nav">
			    	<ul class="nav__list">
						<li class="nav__item">
    		                <span class="nav__item-close"></span>
				        </li>
                        <li class="nav__item">
    		               <a data-href=".programm .h1" class="nav__link">Наши программы</a>
				        </li>
				        <li class="nav__item">
    		               <a data-href=".people .h1" class="nav__link">Обучайтесь у экспертов</a>
    		            </li>
    		            <li class="nav__item">
    		               <a data-href=".plus .h1" class="nav__link">Возможности для выпускников</a>
    		            </li>
						<li class="nav__item">
    		               <a data-href=".step .h1" class="nav__link">Ваше резюме</a>
    		            </li>
						<li class="nav__item">
    		               <a data-href=".where .h1" class="nav__link">Где проходит обучение</a>
    		            </li>
						<li class="nav__item">
    		               <a data-href=".partner .h1" class="nav__link">Партнеры факультета</a>
    		            </li>
						<li class="nav__item">
    		               <a data-href=".faq .h1" class="nav__link">Популярные вопросы</a>
    		            </li>
			    	</ul>
			    </nav>
				<a href="<?= $wa ?>" target="_blank" class="header__social"><img src="img/header/whats.svg" alt=""><span>WhatsApp</span></a>
				<div class="toggle-menu"><span></span></div>
			</div>
		</div>
	</div>
</div>

<section class="first">
	<img src="img/first/img.png" alt="" class="first__img">
	<div class="container pr">
		<div class="first__desc">Колледж/ Бакалавриат/ Магистратура/ Курсы</div>
		<h1>Факультет Игровой <br>Индустрии и Киберспорта</h1>
		<div class="row">
			<div class="col-lg-8">
				<p>Начни карьеру в индустрии киберспорта и освой самые перспективные и высокооплачиваемые профессии. Мы трудоустраиваем студентов уже со 2-ого курса.</p>
			</div>
		</div>
		<div>
			<div class="row m-0 col-xl-5 col-lg-7 p-0">
				<div class="col-sm-6 p-0">
					<div class="select ks-select">
						<a data-href=".programm .h1" class="ks-select__current">
							<span>Выбрать программу</span>
						</a>
					</div>
				</div>
				<div class="col-sm-6 p-0">
					<a href="#modal-form" data-fancybox class="btn btn--yellow w-100"><span>Оставить заявку</span></a>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-3">
				<div class="first__row">
					<img src="img/first/i1.svg" alt="">
					<div class="first__row-title">Государственный диплом и Европейское приложение</div>
				</div>
				<div class="first__row">
					<img src="img/first/i2.svg" alt="">
					<div class="first__row-title">Практика на реальных игровых событиях</div>
				</div>
				<div class="first__row">
					<img src="img/first/i3.svg" alt="">
					<div class="first__row-title">Отсрочка от армии на весь период обучения</div>
				</div>
			</div>
		</div>
	</div>
	<div class="first__name"><span class="text">Михаил <b>Dosia</b><br> Столяров</span></div>
	<a href="https://www.youtube.com/watch?v=GDeW6-Rg2YQ" class="first__play fancybox-media" data-rel="media">Трейлер<br> Факультета <img src="img/first/play.svg" alt=""></a>
</section>

<section class="programm padded">
	<img src="img/programm/bg.png" alt="" class="programm__img">
	<div class="container pr">
		<h2 class="h1">Наши программы</h2>
		<div class="row">
			
				<div class="col-lg-6 programm__el-wrap">
					<div class="programm__el ">
						<div class="programm__el-img" style="background-image:url(img/programm/img1.jpg)"></div>
						<div class="programm__el-desc">
							<div class="programm__el-title">Колледж<span>Коммерция в игровой индустрии и киберспорте</span></div>
							<div class="programm__el-text">
								<ul>
                  <li>От 2 до 3 лет обучения</li>
                  <li>Практика в партнерских компаниях</li>
                  <li>Организация реальных событий и турниров </li>
                  <li>Собственная киберспортивная команда </li>
                  </ul>
                  <p><b>Документ после обучения: </b></p>
                  <p>Государственный диплом о среднем <br>профессиональном образовании</p>
                  
								<div class="programm__btns">
									<a href="#modal-form" data-fancybox class="btn btn--black"><span>Оставить заявку</span></a>
									<a href="<?= $wa ?>" target="_blank" class="btn btn--yellow btn--yellow--mod"><span>Написать в WhatsApp</span></a>
								</div>
							</div>
						</div>
						
							<img src="img/programm/arr2.svg" alt="" class="programm__el-trigger">
						
					</div>
				</div>
			
				<div class="col-lg-6 programm__el-wrap">
					<div class="programm__el ">
						<div class="programm__el-img" style="background-image:url(img/programm/img2.jpg)"></div>
						<div class="programm__el-desc">
							<div class="programm__el-title">Бакалавриат <span>Менеджмент в игровой индустрии и киберспорте</span></div>
							<div class="programm__el-text">
								<ul>
                  <li>4 года обучения </li>
                  <li>Практика в партнерских компаниях </li>
                  <li>Трудоустройство по профилю </li>
                  <li>Организация реальных событий и турниров </li>
                  <li>Собственная киберспортивная команда</li>
                  </ul>
                  <p><b>Документ после обучения: </b></p>
                  <p>Государственный диплом <br>
                  о высшем образовании</p>
                  
								<div class="programm__btns">
									<a href="#modal-form" data-fancybox class="btn btn--black"><span>Оставить заявку</span></a>
									<a href="<?= $wa ?>" target="_blank" class="btn btn--yellow btn--yellow--mod"><span>Написать в WhatsApp</span></a>
								</div>
							</div>
						</div>
						
							<img src="img/programm/arr2.svg" alt="" class="programm__el-trigger">
						
					</div>
				</div>
			
				<div class="col-lg-4 programm__el-wrap">
					<div class="programm__el programm__el--mod">
						<div class="programm__el-img" style="background-image:url(img/programm/img3.png)"></div>
						<div class="programm__el-desc">
							<div class="programm__el-title">Менеджмент Киберспортивной
                  Организации<span>Онлайн-курс
                  </span></div>
							<div class="programm__el-text">
								<ul>
                  <li>60 дней живого практикума </li>
                  <li>Закрытый чат с преподавателем</li>
                  <li>Реальные знания и опыт, необходимые для работы в киберспортивной организации</li>
                  <li>Стажировка для лучших учеников</li>
                  </ul>
                  <p><b>Документ после обучения: </b></p>
                  <p>Удостоверение о повышении
                  квалификации
                  </p>
                  
								<div class="programm__btns">
									<a href="#modal-form" data-fancybox class="btn btn--black btn--black--mod"><span>Оставить заявку</span></a>
									<a href="<?= $wa ?>" target="_blank" class="btn btn--yellow btn--yellow--mod"><span>Написать в WhatsApp</span></a>
								</div>
							</div>
						</div>
						
							<img src="img/programm/arr.svg" alt="" class="programm__el-trigger">
						
					</div>
				</div>
			
				<div class="col-lg-4 programm__el-wrap">
					<div class="programm__el programm__el--mod">
						<div class="programm__el-img" style="background-image:url(img/programm/img4.jpg)"></div>
						<div class="programm__el-desc">
							<div class="programm__el-title">Разработка игр
                  на Unreal Engine <span>Онлайн-курс
                  </span></div>
							<div class="programm__el-text">
								<ul>
                  <li><b>Обучаем по технологии Blueprints</b> - специальный инструмент для визуального программирования.
                  </li>
                  <li>Трудоустройство после успешной стажировки в компанию-партнер <b>WATT GAMES</b></li>
                  </ul>
                  <p><b>Документ после обучения: </b></p>
                  <p>Удостоверение о повышении
                  квалификации</p>
                  
								<div class="programm__btns">
									<a href="#modal-form" data-fancybox class="btn btn--black btn--black--mod"><span>Оставить заявку</span></a>
									<a href="<?= $wa ?>" target="_blank" class="btn btn--yellow btn--yellow--mod"><span>Написать в WhatsApp</span></a>
								</div>
							</div>
						</div>
						
							<img src="img/programm/arr.svg" alt="" class="programm__el-trigger">
						
					</div>
				</div>
			
				<div class="col-lg-4 programm__el-wrap">
					<div class="programm__el programm__el--mod">
						<div class="programm__el-img" style="background-image:url(img/programm/img5.jpg)"></div>
						<div class="programm__el-desc">
							<div class="programm__el-title">Киберспортивный
                  Комментатор
                  <span>Онлайн-курс
                  </span></div>
							<div class="programm__el-text">
								<ul>
                  <li>Продолжительность курса: 3 месяца</li>
                  <li> 2 групповые онлайн-встречи с преподавателем </li>
                  <li>Постоянный чат в Telegram </li>
                  <li>Практика в освещении реальных киберспортивных событий</li>
                  </ul>
                  <p><b>Документ после обучения: </b></p>
                  <p>Удостоверение о повышении
                  квалификации</p>
                  
								<div class="programm__btns">
									<a href="#modal-form" data-fancybox class="btn btn--black btn--black--mod"><span>Оставить заявку</span></a>
									<a href="<?= $wa ?>" target="_blank" class="btn btn--yellow btn--yellow--mod"><span>Написать в WhatsApp</span></a>
								</div>
							</div>
						</div>
						
							<img src="img/programm/arr.svg" alt="" class="programm__el-trigger">
						
					</div>
				</div>
			
		</div>
	</div>
	<img src="img/programm/border.svg" alt="" class="programm__img2">
	<img src="img/programm/border2.svg" alt="" class="programm__img3">
	<img src="img/programm/stars1.svg" alt="" class="programm__img4">
	<img src="img/programm/stars2.svg" alt="" class="programm__img5">
</section>

<section class="people padded">
	<div class="people__circle"></div>
	<div class="people__circle2"></div>
	<div class="container pr">
		<h2 class="h1 text-center">Учись со звездами. Обучайся у экспертов</h2>
		<div class="row">
			
				
					<div class="col-lg-12">
						<h3 class="people__h3">Наши <span>студенты</span></h3>
					</div>
				
				
				

				
				<div class="col-lg-6 people__el-wrap people__el--1">
					<div class="people__el-bg"></div>
					<div class="people__el">
						
						<img src="img/people/img1.png" alt="" class="people__el-img">
						<div class="people__el-title">Monesy <br>
                  (Илья Осипов)</div>
						<p>Основной игрок команды G2 (CS:GO)</p>
					</div>
				</div>
			
				
				
				

				
				<div class="col-lg-6 people__el-wrap people__el--2">
					<div class="people__el-bg"></div>
					<div class="people__el">
						
						<img src="img/people/img2.png" alt="" class="people__el-img">
						<div class="people__el-title">Pure<br>
                  (Иван Москаленко)</div>
						<p>Ex-игрок команды Virtus.Pro (Dota 2)</p>
					</div>
				</div>
			
				
				
					<div class="col-lg-12">
						<h3 class="people__h3">Наши <span>лица</span></h3>
					</div>
				
				

				
				<div class="col-lg-6 people__el-wrap people__el--3">
					<div class="people__el-bg"></div>
					<div class="people__el">
						
						<img src="img/people/img5.png" alt="" class="people__el-img">
						<div class="people__el-title">Dosia<br>
                  (Михаил Столяров)</div>
						<p>Просто XGod.
                  Чемпион Major по CS:GO в составе Gambit</p>
					</div>
				</div>
			
				
				
				

				
				<div class="col-lg-6 people__el-wrap people__el--4">
					<div class="people__el-bg"></div>
					<div class="people__el">
						
						<img src="img/people/img6.png" alt="" class="people__el-img">
						<div class="people__el-title">TheCraggy <br>
                  (Александр Думенко)
                  </div>
						<p>Комментатор CS:GO
                  </p>
					</div>
				</div>
			
				
				
				
					<div class="col-lg-12">
						<h3 class="people__h3">Наши <span>преподаватели</span></h3>
					</div>
				

				
				<div class="col-lg-6 people__el-wrap people__el--5">
					<div class="people__el-bg"></div>
					<div class="people__el">
						
							<img src="img/people/sign.png" alt="" class="people__el-img2">
						
						<img src="img/people/img3.png" alt="" class="people__el-img">
						<div class="people__el-title">Дмитрий <br>
                  Макаров</div>
						<p>Бывший генеральный менеджер Team forZe.
                  Работал в командах ESPADA, Natus Vincere, Team Empire</p>
					</div>
				</div>
			
				
				
				

				
				<div class="col-lg-6 people__el-wrap people__el--6">
					<div class="people__el-bg"></div>
					<div class="people__el">
						
						<img src="img/people/img4.png" alt="" class="people__el-img">
						<div class="people__el-title">Георгий <br>
                  Фалеев
                  </div>
						<p>CEO Team UNIQUE,
                  работал в Vega Squadron, Virtus.Pro.
                  </p>
					</div>
				</div>
			
				
				
				

				
				<div class="col-lg-6 people__el-wrap people__el-special">
					<div class="people__el-bg"></div>
					<div class="people__el">
						<div class="people__el-header">
                            <img src="img/people/img7.png" alt="" class="people__el-img">
						    <div class="people__el-title">Скаржинская <br>Елена Николаевна</div>
						    <p>Заведующая Кафедрой <br>Киберспорта</p>
						</div>
						<div class="people__el-body">
					    	<ul class="list">
					    		<li class="list-item">Кандидат педагогических наук</li>
					    		<li class="list-item">Сертифицированный эксперт СПК в&nbsp;сфере ФКиС</li>
					    		<li class="list-item">Председатель Управляющего совета ГБОУ КиберШкола</li>
					    		<li class="list-item">Член Правления Ассоциации развития киберспорта</li>
					    		<li class="list-item">Член Совета директоров BRICSCESS</li>
					    		<li class="list-item">Награждена памятной медалью &laquo;Патриот России&raquo;</li>
					    	</ul>
					    </div>
					</div>
					<img src="img/people/arr.svg" alt="" class="people__el-trigger">
				</div>

				<div class="col-lg-6 people__el-wrap people__el-special">
					<div class="people__el-bg"></div>
					<div class="people__el">
						<div class="people__el-header">
						   <img src="img/people/img8.png" alt="" class="people__el-img">
						   <div class="people__el-title">Ходячих <br>Жанна Ивановна</div>
						   <p>Организатор ивентов <br>по киберспортивной <br>дисциплине Dota 2</p>
						</div>
						<div class="people__el-body">
					    	<ul class="list">
					    		<li class="list-item">Организатор ивентов по&nbsp;киберспортивной дисциплине Dota 2&nbsp;в Москве на&nbsp;протяжении 8&nbsp;лет</li>
					    		<li class="list-item">Организатор турниров по&nbsp;FiFA в&nbsp;Москве</li>
					    		<li class="list-item">Организатор закрытого показа фильма Mrs. Marple для представителей киберспорта в&nbsp;России</li>
					    		<li class="list-item">Руководитель отдела маркетинга со&nbsp;стажем более 6&nbsp;лет в&nbsp;рекламном агентстве полного цикла</li>
					    		<li class="list-item">Спикер во&nbsp;все различных конференциях и&nbsp;мероприятиях, организованных ФКСМ</li>
					    	</ul>
					    </div>
					</div>
					<img src="img/people/arr.svg" alt="" class="people__el-trigger">
				</div>
				
				<div class="col-lg-6 people__el-wrap people__el--7">
					<div class="people__el-bg"></div>
					<div class="people__el">
						
						<img src="img/people/img9.png" alt="" class="people__el-img">
						<div class="people__el-title">Залилов <br>Максим Айратович</div>
						<p>CEO «ZMA GROUP THETTA SECURITY LTD» Founder киберспортивных команд: RuSh3D, Begrip, Moscow Five.</p>
					</div>
				</div>
			
				
				
				

				
				<div class="col-lg-6 people__el-wrap people__el--8">
					<div class="people__el-bg"></div>
					<div class="people__el">
						
						<img src="img/people/img10.png" alt="" class="people__el-img">
						<div class="people__el-title">Талан <br>Алексей Сергеевич</div>
						<p>Основатель киберспортивной турнирной платформы click-storm.ru</p>
					</div>
				</div>
			
		</div>
	</div>
</section>

<section class="plus padded">
	<div class="container">
		<h2 class="h1">Возможности для выпускников</h2>
		<div class="row">
			<div class="col-lg-6">
				<p><b>Выпускники нашего факультета</b> - это первые дипломированные специалисты с компетенциями  в направлениях проектного управления, маркетинга, коммерции, разработки  и программирования игр, киберспортивного менеджмента</p>
			</div>
		</div>
		<div class="col-lg-9 p-0">
			<div class="row">
				
					<div class="col-lg-5">
						<div class="plus__block">
							<img src="img/plus/i1.svg" alt="">
							<div class="plus__block-nmb">3 728
                  </div>
							<p>вакансий
                  согласно hh.ru и hitmarket.net</p>
						</div>
					</div>
				
					<div class="col-lg-7">
						<div class="plus__block">
							<img src="img/plus/i2.svg" alt="">
							<div class="plus__block-nmb">93 000</div>
							<p>рублей
                  средняя зарплата специалиста, по данным hh.ru</p>
						</div>
					</div>
				
					<div class="col-lg-5">
						<div class="plus__block">
							<img src="img/plus/i3.svg" alt="">
							<div class="plus__block-nmb">> 100</div>
							<p>и более работадателей</p>
						</div>
					</div>
				
					<div class="col-lg-7">
						<div class="plus__block">
							<img src="img/plus/i4.svg" alt="">
							<div class="plus__block-nmb">12 месяцев
                  </div>
							<p>срок практико-ориентированного обучения, которое позволяет найти первую работу по профилю</p>
						</div>
					</div>
				
			</div>
		</div>
	</div>
	<div class="plus__name"><span class="text">Офис компании-<br>партнера MetaCorp</span></div>
</section>

<section class="step padded">
	<img src="img/step/img1.png" alt="" class="step__img1">
	<img src="img/step/start.svg" alt="" class="step__img2">
	<img src="img/step/loc1.svg" alt="" class="step__img3">
	<img src="img/step/loc2.svg" alt="" class="step__img4">
	<img src="img/step/finish.svg" alt="" class="step__img5">
	<img src="img/step/screpka.svg" alt="" class="step__img6">
	<img src="img/step/screpka2.svg" alt="" class="step__img7">

	<div class="step__bg1"></div>
	<div class="step__bg2"></div>
	<div class="step__bg3"></div>
	<div class="container pr">
		<h2 class="h1 text-center">Карьерная траектория</h2>
		<div class="step__els">
			
				<div class="step__el step__el--1">
					<img src="img/step/i1.svg" alt="" class="step__el-img">
					<div class="step__el-title">шаг 1</div>
					<ul>
                  <li>Расскажем, что игровая индустрия и&nbsp;киберспорт&nbsp;&mdash; это не&nbsp;только игроки и&nbsp;комментаторы, но&nbsp;ещё и&nbsp;сотни востребованных профессий, в&nbsp;которых вы&nbsp;сможете себя реализовать</li>
                  </ul>
				</div>
			
				<div class="step__el step__el--2">
					<img src="img/step/i2.svg" alt="" class="step__el-img">
					<div class="step__el-title">шаг 2</div>
					<ul>
                  <li>Получите фундаментальные знания и опыт в области управления, рекламы, продажах, разработке
                  и программирования игр</li>
                  <li>Сможете определиться, чем вы хотите заниматься, и что приносит вам больше удовольствия</li>
                  </ul>
				</div>
			
				<div class="step__el step__el--3">
					<img src="img/step/i3.svg" alt="" class="step__el-img">
					<div class="step__el-title">шаг 3</div>
					<ul>
                  <li>Отправитесь на профильную стажировку или практику
                  в выбранном вами направлении</li>
                  <li>Отработаете на практике полученные знания и получите ваш первый опыт в резюме</li>
                  </ul>
				</div>
			
				<div class="step__el step__el--4">
					<img src="img/step/i4.svg" alt="" class="step__el-img">
					<div class="step__el-title">шаг 4</div>
					<ul>
                  <li>Вместе с преподавателем подготовите вашу выпускную работу и составите резюме для трудоустройства</li>
                  <li>Защитите свою дипломную работу
                  и получите готовое резюме
                  для начала карьеры

                  </li>
                  </ul>
				</div>
			
				<div class="step__el step__el--5">
					<img src="img/step/i5.svg" alt="" class="step__el-img">
					<div class="step__el-title">шаг 5</div>
					<ul>
                  <li>Получите гарантированную помощь в подборе компании
                  для трудоустройства и начнете свой карьерный путь в игровой индустрии или киберспорте

                   </li>
                  </ul> 
				</div>
			
		</div>
	</div>
	<img src="img/step/line1.png" alt="" class="step__line1">
	<img src="img/step/line2.png" alt="" class="step__line2">
</section>


<section class="resume">
	<div class="container">
		<h2 class="h1 text-center">Ваше резюме </h2>
		<div class="pr">
			<div class="resume__block-wrap"></div>
			<div class="resume__block">
				<div class="row">
					<div class="resume__left">
						<a href="https://www.youtube.com/watch?v=3g3yzq5FVDU" class="resume__video fancybox-media" data-rel="media">
							<img src="img/resume/img.png" alt="">
							<div class="resume__video-title">История Сергея<br> за 2 минуты</div>
						</a>
						<div class="resume__name">Сергей Нам</div>
						<img src="img/resume/line1.svg" alt="" class="responsive">
						<a href="mailto:SNam@gmail.com" class="resume__row">
							<img src="img/resume/i1.svg" alt="">
							SNam@gmail.com
						</a>
						<div class="resume__row">
							<img src="img/resume/i2.svg" alt="">
							Москва
						</div>
						<a href="https://t.me/tagyzov" target="_blank" class="resume__row">
							<img src="img/resume/i3.svg" alt="">
							@tagyzov
						</a>
						<a href="tel:+79032824203" class="resume__row">
							<img src="img/resume/i3.svg" alt="">
							+7 903 282-42-03
						</a>
						<div class="resume__ps">Языки: Русский, Английский</div>
					</div>
					<div class="resume__right">
						<h3 class="resume__hh">НАВЫКИ</h3>
						<div class="resume__els">
							
								<div class="resume__el resume__el--1">проектное управление</div>
							
								<div class="resume__el resume__el--2"> разработка коммерческих предложений</div>
							
								<div class="resume__el resume__el--3">тестирование игр</div>
							
								<div class="resume__el resume__el--4">Agile</div>
							
								<div class="resume__el resume__el--5">построение контент-планов</div>
							
								<div class="resume__el resume__el--6">менеджмент киберспортивных команд</div>
							
								<div class="resume__el resume__el--7">комментирование киберспортивных матчей</div>
							
								<div class="resume__el resume__el--8">организация трансляций OBS</div>
							
								<div class="resume__el resume__el--9">vMix</div>
							
								<div class="resume__el resume__el--10">документооборот</div>
							
								<div class="resume__el resume__el--11">оформление сметы проекта</div>
							
								<div class="resume__el resume__el--12">управление бюджетами</div>
							
						</div>
						<div class="resume__ps">Образование: Факультет игровой индустрии и киберспорта. Университет Синергия</div>
					</div>
					<img src="img/resume/line2.svg" alt="" class="responsive">
				</div>
				<h3 class="resume__hh mt-4">Опыт работы</h3>
				<div class="row">
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">1</div>
								<div class="resume__i-title">ESFORCE Holding (менеджер коммерческих проектов)</div>
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">2</div>
								<div class="resume__i-title">Synergy Esports League 2 (SMM-менеджер, обсервер, комментатор)</div>
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">3</div>
								<div class="resume__i-title">“Битва за Науку” (проджект-менеджер)</div>
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">4</div>
								<div class="resume__i-title">Лига “РДШ” (администратор)</div>
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">5</div>
								<div class="resume__i-title">Менеджер киберспортивной команды по Valorant (менеджер команды)</div>
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">6</div>
								<div class="resume__i-title">Streaming Alliance прохождение профильной практики по работе со стримерами</div>
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">7</div>
								<div class="resume__i-title">Кибер-школьник (комментатор, судья)</div>
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">8</div>
								<div class="resume__i-title">Тестирование игры Direct Shot (тестировщик)</div>
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">9</div>
								<div class="resume__i-title">Стрим-фест (Проджект-менеджер, промоутер)</div>
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">10</div>
								<div class="resume__i-title">Первые студеческие киберспортивные ”Игры Будущего” (менеджер)</div>
							</div>
						</div>
					

				</div>
			</div>
		</div>
	</div>
	<img src="img/programm/border.svg" alt="" class="programm__img2">
</section>

<section class="event padded">
	<div class="event__bg"></div>
	<div class="container pr">
		<h2 class="h1 text-center mb-2">События Факультета</h2>
		<p>Студенты факультета не только посещают, но и занимаются организацией настоящих турниров и мероприятий в сфере игровой индустрии</p>
		<div class="row">
			
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="event__el">
						<div class="event__el-title">Битва за Науку</div>
						<div class="event__el-img" style="background-image:url(img/event/img1.jpg)"></div>
						<div class="event__el-title2">Winstrike Arena</div>
						<div class="event__el-text">Международный студенческий киберспортивный турнир "Битва за Науку", прошедший в декабре 2021 года.</div>
						<div class="mt-a">
						<a href="https://www.youtube.com/watch?v=u6SdevTpFLo&feature=youtu.be" class="btn btn--yellow fancybox-media" data-rel="media"><span>
							<img src="img/event/arr.svg" alt="" class="mr-2">
							Смотреть видео
						</span></a>
						</div>
					</div>
				</div>
			
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="event__el">
						<div class="event__el-title">Стрим-фест</div>
						<div class="event__el-img" style="background-image:url(img/event/img2.jpg)"></div>
						<div class="event__el-title2">Сколково</div>
						<div class="event__el-text">Участие в одном из крупнейших событий в сфере игровой индустрии</div>
						<div class="mt-a">
						<a href="https://www.youtube.com/watch?v=OXXZg7BIYPk" class="btn btn--yellow fancybox-media" data-rel="media"><span>
							<img src="img/event/arr.svg" alt="" class="mr-2">
							Смотреть видео
						</span></a>
						</div>
					</div>
				</div>
			
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="event__el">
						<div class="event__el-title">Финал "РДШ"</div>
						<div class="event__el-img" style="background-image:url(img/event/img3.jpg)"></div>
						<div class="event__el-title2">Гостиный двор
                  </div>
						<div class="event__el-text">Студентами организована работа стенда, а также проведение турнира
                  и награждение</div>
						<div class="mt-a">
						<a href="https://www.youtube.com/watch?v=ZvUObrQXpeE" class="btn btn--yellow fancybox-media" data-rel="media"><span>
							<img src="img/event/arr.svg" alt="" class="mr-2">
							Смотреть видео
						</span></a>
						</div>
					</div>
				</div>
			
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="event__el">
						<div class="event__el-title">Synergy
                  Esport League</div>
						<div class="event__el-img" style="background-image:url(img/event/img4.jpg)"></div>
						<div class="event__el-title2">Университет Синергия
                  </div>
						<div class="event__el-text">Организация собственного турнира, попавшего в Топ-3 трансляций на Twitch</div>
						<div class="mt-a">
						<a href="https://www.youtube.com/watch?v=LvSxgmL1Llk" class="btn btn--yellow fancybox-media" data-rel="media"><span>
							<img src="img/event/arr.svg" alt="" class="mr-2">
							Смотреть видео
						</span></a>
						</div>
					</div>
				</div>
			
		</div>
	</div>
</section>
<section class="where padded">
	<div class="where__bg"></div>
	<div class="container pr">
		<h2 class="h1">Где проходит обучение</h2>
		<div class="row">
			<div class="col-lg-6">
			<p>Факультет Игровой Индустрии и Киберспорта имеет в своем распоряжении самые современные аудитории, от настоящей лаборатории киберспорта до конференц-зала для встреч со спикерами и экспертами индустрии. </p>
			<p>В конце 2022 года на базе Университета Синергия откроется собственный компьютерный клуб. </p>
			</div>
		</div>
	</div>
	<img src="img/where/img.png" alt="" class="where__img">
</section>

<section class="partner padded pb-0">
	<div class="container pr">
		<h2 class="h1 text-center">Партнеры факультета</h2>
		<div class="partner__wrap">
		<img src="img/partner/bg2.png" alt="" class="partner__img">
		<img src="img/programm/stars1.svg" alt="" class="partner__img2">
			<div class="row">
				
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/img1.png" alt="" class="responsive">
						</div>
					</div>
				
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/img2.png" alt="" class="responsive">
						</div>
					</div>
				
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/img3.png" alt="" class="responsive">
						</div>
					</div>
				
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/img4.png" alt="" class="responsive">
						</div>
					</div>
				
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/img5.png" alt="" class="responsive">
						</div>
					</div>
				
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/img6.png" alt="" class="responsive">
						</div>
					</div>
				
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/img7.png" alt="" class="responsive">
						</div>
					</div>
				
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/img8.png" alt="" class="responsive">
						</div>
					</div>
				
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/img9.png" alt="" class="responsive">
						</div>
					</div>
				
			</div>
		</div>
	</div>
	<img src="img/programm/border.svg" alt="" class="programm__img2">
</section>

<section class="faq padded">
	<div class="faq__bg1"></div>
	<div class="faq__bg2"></div>
	<div class="container pr">
		<h2 class="h1 text-center">Популярные вопросы</h2>
		
			<div class="faq__line  on ">
				<h3 class="faq__ask">Трудоустройство студентов</h3>
				<ul class="faq__answer" style="display:block"><li class="faq__answer-item">Более 500 партнеров</li>
                  <li class="faq__answer-item">Помогаем подобрать подходящую вакансию</li>
                  <li class="faq__answer-item">Готовим к&nbsp;собеседованию</li>
                  <li class="faq__answer-item">Сопровождаем на&nbsp;этапе оформления</li>
                  <li class="faq__answer-item">Помогаем строить карьеру</li>
                  <li class="faq__answer-item">Развиваем необходимые компетенции</li>
                  <li class="faq__answer-item">73% студентов заработали свои первые деньги ещё в&nbsp;процессе обучения</li></ul>
			</div>
		
			<div class="faq__line ">
				<h3 class="faq__ask">Отсрочка от&nbsp;армии</h3>
				<ul class="faq__answer" style=""><li class="faq__answer-item">Отсрочка предоставляется на&nbsp;весь период обучения</li></ul>
			</div>
		
			<div class="faq__line ">
				<h3 class="faq__ask">Перевод из&nbsp;другого учебного заведения</h3>
				<ul class="faq__answer" style=""><li class="faq__answer-item">Если вы&nbsp;учитесь в&nbsp;другом вузе, но&nbsp;хотите продолжить обучение у&nbsp;нас. Обратитесь в&nbsp;приемную комиссию. Наши специалисты расскажут, какие документы необходимы для перевода и&nbsp;ответят на&nbsp;все ваши вопросы</li></ul>
			</div>
		
			<div class="faq__line ">
				<h3 class="faq__ask">Оплата обучения в&nbsp;рассрочку&nbsp;/ материнский капитал</h3>
				<ul class="faq__answer" style=""><li class="faq__answer-item item-title">Рассрочка</li>
                  <li class="faq__answer-item">Помесячная оплата</li>
                  <li class="faq__answer-item">Прозрачные условия рассрочки</li>
                  <li class="faq__answer-item">Отсутствие переплаты</li>
                  <li class="faq__answer-item">Доверие более 9000 студентов</li>
                  <li class="faq__answer-item">Помощь в&nbsp;оформлении документов</li>

                  <li class="faq__answer-item item-title it-2">Материнский капитал</li>
                  <li class="faq__answer-item">Помощь в оформлении</li>
                  <li class="faq__answer-item">Государственный контроль</li>
                  <li class="faq__answer-item">Предоставляем необходимый <br>пакет документов</li>
                  </ul>
			</div>
		
			<div class="faq__line ">
				<h3 class="faq__ask">Скидки на&nbsp;обучение</h3>
				<ul class="faq__answer" style=""><li class="faq__answer-item">Инвалидам, студентам из&nbsp;многодетных семей и&nbsp;с другими льготными категориями</li>
                  <li class="faq__answer-item">Студентам, оплатившим два и&nbsp;более семестра одновременно</li>
                  <li class="faq__answer-item">Победителям олимпиад, золотым медалистам, выпускникам колледжей&nbsp;с красным диплом</li>
                  <li class="faq__answer-item">Победителям и&nbsp;призерам крупных киберспортивных турниров</li></ul>
			</div>
		
			<div class="faq__line ">
				<h3 class="faq__ask">Проживание студентов</h3>
				<ul class="faq__answer" style=""><li class="faq__answer-item">Двухместное размещение</li>
                  <li class="faq__answer-item">Расположение недалеко от&nbsp;метро</li>
                  <li class="faq__answer-item">Охрана, пропускная система, кураторы</li>
                  <li class="faq__answer-item">Низкая стоимость</li>
                  <li class="faq__answer-item">Комфортные условия проживания</li>
                  <li class="faq__answer-item">Спортивный зал</li>
                  <li class="faq__answer-item">Отсутствие комиссий и&nbsp;переплат</li></ul>
			</div>
		
		<div class="text-center">
			<a href="<?= $wa ?>" target="_blank" class="btn btn--yellow mt-5 pl-4 pr-4 d-inline-flex"><img src="img/header/whats.svg" alt="" class="mr-2"><span>Задать любой вопрос</span></a>
		</div>
	</div>
</section>
<section class="first last">
	<img src="img/last/img.png" alt="" class="first__img">
	<div class="container pr">
		<div class="first__desc">Высшее образование/ Колледж/ Магистратура/ Курсы</div>
		<h1>Факультет Игровой <br>Индустрии и Киберспорта</h1>
		<div class="row">
			<div class="col-lg-8">
				<p>Начни карьеру в индустрии киберспорта и освой самые перспективные и высокооплачиваемые профессии. Мы трудоустраиваем студентов уже со 2-ого курса.</p>
			</div>
		</div>
		<div>
			<div class="row m-0 col-xl-5 col-lg-7 p-0">
				<div class="col-sm-6 p-0">
					<div class="select ks-select">
						<a data-href=".programm .h1" class="ks-select__current">
							<span>Выбрать программу</span>
						</a>
					</div>
				</div>
				<div class="col-sm-6 p-0">
					<a href="#modal-form" data-fancybox class="btn btn--yellow w-100"><span>Оставить заявку</span></a>
				</div>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-3">
				<div class="first__row">
					<img src="img/first/i1.svg" alt="">
					<div class="first__row-title">Государственный диплом и Европейское приложение</div>
				</div>
				<div class="first__row">
					<img src="img/first/i2.svg" alt="">
					<div class="first__row-title">Практика на реальных игровых событиях</div>
				</div>
				<div class="first__row">
					<img src="img/first/i3.svg" alt="">
					<div class="first__row-title">Отсрочка от армии на весь период обучения</div>
				</div>
			</div>
		</div>
	</div>
	<a href="https://www.youtube.com/watch?v=GDeW6-Rg2YQ" class="first__play fancybox-media" data-rel="media">Трейлер<br> Факультета <img src="img/first/play.svg" alt=""></a>
</section>
<footer class="footer"><div class="header">
		<div class="container">
			<div class="row m-0">
				<a href="https://synergycybersport.com/" target="_blank" class="header__logo"><img src="img/header/logo.svg" alt=""></a>
				<div class="header__box">
					<a href="<?= $wa ?>" class="header__social"><img src="img/header/whats.svg" alt=""><span>WhatsApp</span></a>
				    <a href="<?= $tg ?>" class="header__social"><img src="img/header/tg.svg" alt=""><span>Telegram</span></a>
				</div>
			</div>
		</div>
		<div class="header__bottom">
           <div class="container">
                <div class="header__ps">
                	<div class="header__ps-copy">© 1988 — <?= date('Y') ?> Университет «Синергия» . Все права защищены. <a href="#privacy">Пользовательское соглашение</a> </div>
                	<div>Разработано и продвигается <a href="https://synergydigital.ru/">Synergy Digital</a></div>
                </div>
           </div>
        </div>
	</div></footer>

		<section style="display: none;" hidden>
            <a href="http://sydi.ru" style="display: none;">Synergy Digital</a>
            <form action="<?=$action?>" style="display: none;" hidden></form>
        </section>
	</div><!-- wrapper -->

	<div class="d-none">
		


<div id="modal-form">
	<div class="last__feedback">
		
<form class="form form-callback" action="<?= $action ?>&amp;form=form1">

	
	<div class="h1 ">Оставь заявку и&nbsp;мы&nbsp;свяжемся с&nbsp;тобой в&nbsp;течение 15&nbsp;минут</div>
	

	

	
<div class="form__lines">
	<div class="row">
		<div class="col-lg-3">
			
			
<div class="form__line form__line_text " data-name="name">
	

	
		<input name="name" type="text" placeholder="Имя" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

			
		</div>
		<div class="col-lg-3">
			
			
<div class="form__line form__line_text " data-name="phone">
	

	
		<input name="phone" type="text" placeholder="Телефон" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

			
		</div>
		<div class="col-lg-3">
			
			
<div class="form__line form__line_email " data-name="email">
	

	
		<input name="email" type="email" placeholder="E-mail" value="" class="form__input brd"  required >
	

	
</div><!-- form__item -->

			
		</div>
		
		<div class="col-lg-3">
			<div class="form__line form__line_button">
				<button class="form__button button btn btn--yellow p-0 w-100 condensed" type="submit"><span>ОТПРАВИТЬ</span></button>
			</div>
		</div>
		
	</div>

	<!-- form__item -->



	<div class="form__footer">
		<label for="form1" class="checkbox">
			<input type="checkbox" id="form1" name="personalDataAgree" style="display:none" checked>
			<span class="checkbox__input"></span>
			<span>Cогласен c <a href="#privacy">политикой конфиденциальности</a></span>
		</label>
	</div>
	
	<!-- form__footer -->

</div><!-- form__items -->


</form><!-- form -->

	</div>
</div>


	</div><!-- d-none -->
	

	<div class="scroll">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.835 240.835" width="20" height="20"><path d="M129.007 57.819c-4.68-4.68-12.499-4.68-17.191 0L3.555 165.803c-4.74 4.74-4.74 12.427 0 17.155 4.74 4.74 12.439 4.74 17.179 0l99.683-99.406 99.671 99.418c4.752 4.74 12.439 4.74 17.191 0 4.74-4.74 4.74-12.427 0-17.155L129.007 57.819z" fill="#FFF"></path></svg>
	</div>

	

	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js" defer="defer"></script><![endif]-->
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/es5-shim/4.5.10/es5-shim.min.js" defer="defer"></script><![endif]-->
	<!--[if lte IE 9]><script src="http://phpbbex.com/oldies/oldies.js" charset="utf-8" defer="defer"></script><![endif]-->

	<!--[if lt IE 9]><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><![endif]-->
	<!--[if gte IE 9]><!--><script src="js/libs/jquery.min.js"></script><!--<![endif]-->

	<!-- <script src="js/libs/lazysizes.min.js" async=""></script> -->
	<script src="js/libs/js.cookie.min.js" defer="defer"></script>
	<!--<script src="js/libs/slick.min.js" defer="defer"></script>-->
	<script src="js/libs/jquery.fancybox.min.js" defer="defer"></script>
	<!--<script src="js/libs/inputmask.js" defer="defer"></script>-->
	

	
	<script src="js/script.js" defer="defer"></script>
	

	
	<!-- Plugins css -->
	<script>
		(function(){
			function loadCSS(hf) {var ms=document.createElement('link');ms.rel='stylesheet';ms.href=hf;document.getElementsByTagName('head')[0].insertBefore(ms, document.getElementsByTagName('link')[0]);}
			//loadCSS('css/libs/slick.min.css');
			loadCSS('css/libs/jquery.fancybox.min.css');
		})();
	</script>
	

	
	<script src="https://syn.su/js/lander.js" async="async"></script>
	

</body>
</html>