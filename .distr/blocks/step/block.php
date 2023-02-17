{% from './data.php' import data %}
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
			{% for item in data.items %}
				<div class="step__el step__el--{{loop.index}}">
					<img src="img/step/i{{loop.index}}.svg" alt="" class="step__el-img">
					<div class="step__el-title">шаг {{loop.index}}</div>
					{{ item.text | safe }}
				</div>
			{% endfor %}
		</div>
	</div>
	<img src="img/step/line1.png" alt="" class="step__line1">
	<img src="img/step/line2.png" alt="" class="step__line2">
</section>