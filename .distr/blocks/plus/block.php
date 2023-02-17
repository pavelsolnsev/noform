{% from './data.php' import data %}
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
				{% for item in data.items %}
					<div class="{% if loop.index == 1 or loop.index == 3 %}col-lg-5{% else %}col-lg-7{% endif %}">
						<div class="plus__block">
							<img src="img/plus/{{ item.img | safe }}" alt="">
							<div class="plus__block-nmb">{{ item.nmb | safe }}</div>
							<p>{{ item.text | safe }}</p>
						</div>
					</div>
				{% endfor %}
			</div>
		</div>
	</div>
	<div class="plus__name"><span class="text">Офис компании-<br>партнера MetaCorp</span></div>
</section>