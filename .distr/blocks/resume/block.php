{% from './data.php' import data %}
{% from './data2.php' import data2 %}
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
							{% for item in data.items %}
								<div class="resume__el resume__el--{{loop.index}}">{{ item.title | safe }}</div>
							{% endfor %}
						</div>
						<div class="resume__ps">Образование: Факультет игровой индустрии и киберспорта. Университет Синергия</div>
					</div>
					<img src="img/resume/line2.svg" alt="" class="responsive">
				</div>
				<h3 class="resume__hh mt-4">Опыт работы</h3>
				<div class="row">
					{% for item in data2.items %}
						<div class="col-lg-6">
							<div class="resume__i">
								<div class="resume__i-nmb">{{loop.index}}</div>
								<div class="resume__i-title">{{ item.title | safe }}</div>
							</div>
						</div>
					{% endfor %}

				</div>
			</div>
		</div>
	</div>
	<img src="img/programm/border.svg" alt="" class="programm__img2">
</section>