<?php
/* Defaults */
$title = 'Университет Синергия | Факультет игровой индустрии и киберспорта - Колледж/Бакалавриат/Магистратура/Курсы' . (isset($subtitle) ? ' | ' . $subtitle : '');
$description = isset($description) ? $description : 'Начни карьеру в индустрии киберспорта и освой самые перспективные и высокооплачиваемые профессии. Мы трудоустраиваем студентов уже со 2-ого курса.';
$share_image = 'img/common/share.png';
$gtm = get_gtm() ?? '';

$phone = '';
$wa = 'https://api.whatsapp.com/send/?phone=79032824203&text&app_absent=0';
$tg = 'https://t.me/mr_andrefate';
$email = '';

$unit = 'uncertain';
$type = 'univer';
$land = 'cybersport';
$link = 'thanks/';
$grcampaign = '';
$graccount = '';
$grtag = '';
$quote_id = '';

$body_class = '';


/* Versions */
switch ($version) {
	case 'v2':

		break;
	case 'ibt':
		$wa = 'https://api.whatsapp.com/send/?phone=79772621274&text&app_absent=0';
		$tg = 'https://t.me/VeIDone';
		break;
	case 'faculties':
		$wa = 'https://api.whatsapp.com/send/?phone=79772621274&text&app_absent=0';
		$tg = 'https://t.me/VeIDone';
		break;
	case 'synergy.ru':
		$wa = '';
		$tg = '';
		break;
} // $version


/* Partners */
switch ($partner) {
} // $partner


/* Postprocess */
$phone_link = get_phone_link($phone);
$email_link = get_email_link($email);

$action = implode(array(
	'https://syn.su/lander.php?r=land/index',
	'&unit=', $unit,
	'&type=', $type,
	'&land=', $land,
	'&lang=', $lang,
	'&version=', $version,
	'&partner=', $partner,
	'&graccount=', $graccount,
	'&grcampaign=', $grcampaign,
	'&grtag=', $grtag,
	'&quote_id=', $quote_id,
	'&link=', urlencode($link),
	'&ignore-thanksall=1'
));
