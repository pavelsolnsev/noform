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

{# Блок для переопределения get-переменных на отдельных страницах в pages #}
{% block preversion %}{% endblock %}

<?php
include_once $ROOT . 'version.php';
?>

{# Блок для переопределения php-переменных версий на отдельных страницах в pages #}
{% block version %}{% endblock %}

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
	{% block viewport %}
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	{% endblock %}
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

	<base href="<?= $BASE_HREF ?>">

	<title><?= $title ?></title>
	<meta property="og:title" content="<?= $title ?>">
	<meta property="og:description" content="<?= $description ?>">
	<meta property="og:url" content="<?= $URL ?>">
	<meta property="og:image" content="<?= $share_image ?>?<?= date('md') ?>">
	<link rel="image_src" href="<?= $share_image ?>?<?= date('md') ?>">

	<link rel="stylesheet" href="css/libs/bootstrap.min.css">

	{% block styles %}
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	{% endblock %}

	<link href="favicon.ico" type="image/x-icon" rel="icon">
</head>

<body class="<?= $body_class ?> <?= $version ? 'version-' . $version : '' ?> <?= $partner ? 'partner-' . $partner : '' ?> <?= $version || $partner ? 'page-not-default' : 'page-default' ?> {{ PAGE_CLASS }}">

	<?php if ( $gtm ) { ?>
		<!-- Google Tag Manager (noscript) --><noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?= $gtm ?>" height="0" width="0" style="display:none;visibility:hidden;"></iframe></noscript><!-- End Google Tag Manager (noscript) -->
	<?php } ?>

	<!-- Yandex.Metrika counter -->
       <noscript><div><img src="https://mc.yandex.ru/watch/87781013" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->


	<img src="<?= $share_image ?>?<?= date('md') ?>" alt="" style="position: absolute; left: -100000px; z-index: 0">

	{% import 'form/macro.php' as form %}

	{% block blocks %}
	<div class="wrapper">
		{% block blocks_inner %}
		{% endblock %}
		<section style="display: none;" hidden>
            <a href="http://sydi.ru" style="display: none;">Synergy Digital</a>
            <form action="<?=$action?>" style="display: none;" hidden></form>
        </section>
	</div><!-- wrapper -->

	<div class="d-none">
		{% block blocks_popups %}
		{% endblock %}
	</div><!-- d-none -->
	{% endblock %}

	<div class="scroll">
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 240.835 240.835" width="20" height="20"><path d="M129.007 57.819c-4.68-4.68-12.499-4.68-17.191 0L3.555 165.803c-4.74 4.74-4.74 12.427 0 17.155 4.74 4.74 12.439 4.74 17.179 0l99.683-99.406 99.671 99.418c4.752 4.74 12.439 4.74 17.191 0 4.74-4.74 4.74-12.427 0-17.155L129.007 57.819z" fill="#FFF"></path></svg>
	</div>

	{% block js %}

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
	{% endblock %}

	{% block script %}
	<script src="js/script.js" defer="defer"></script>
	{% endblock %}

	{% block css %}
	<!-- Plugins css -->
	<script>
		(function(){
			function loadCSS(hf) {var ms=document.createElement('link');ms.rel='stylesheet';ms.href=hf;document.getElementsByTagName('head')[0].insertBefore(ms, document.getElementsByTagName('link')[0]);}
			//loadCSS('css/libs/slick.min.css');
			loadCSS('css/libs/jquery.fancybox.min.css');
		})();
	</script>
	{% endblock %}

	{% block lander %}
	<script src="https://syn.su/js/lander.js" async="async"></script>
	{% endblock %}

</body>
</html>