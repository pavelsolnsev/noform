{% from './data.php' import data %}
<section class="programm padded">
	<img src="img/programm/bg.png" alt="" class="programm__img">
	<div class="container pr">
		<h2 class="h1">Наши программы</h2>
		<div class="row">
			{% for item in data.items %}
				<div class="{% if loop.index > 2 %}col-lg-4{% else %}col-lg-6{% endif %} programm__el-wrap">
					<div class="programm__el {% if loop.index > 2 %}programm__el--mod{% endif %}">
						<div class="programm__el-img" style="background-image:url(img/programm/{{ item.img | safe }})"></div>
						<div class="programm__el-desc">
							<div class="programm__el-title">{{ item.title | safe }}</div>
							<div class="programm__el-text">
								{{ item.text | safe }}
								<div class="programm__btns">
									<a href="#modal-form" data-fancybox class="btn btn--black{% if loop.index > 2 %} btn--black--mod{% endif %}"><span>Оставить заявку</span></a>
									<a href="<?= $wa ?>" target="_blank" class="btn btn--yellow btn--yellow--mod"><span>Написать в WhatsApp</span></a>
								</div>
							</div>
						</div>
						{% if loop.index > 2 %}
							<img src="img/programm/arr.svg" alt="" class="programm__el-trigger">
						{% else %}
							<img src="img/programm/arr2.svg" alt="" class="programm__el-trigger">
						{% endif %}
					</div>
				</div>
			{% endfor %}
		</div>
	</div>
	<img src="img/programm/border.svg" alt="" class="programm__img2">
	<img src="img/programm/border2.svg" alt="" class="programm__img3">
	<img src="img/programm/stars1.svg" alt="" class="programm__img4">
	<img src="img/programm/stars2.svg" alt="" class="programm__img5">
</section>