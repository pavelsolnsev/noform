{% from './data.php' import data %}
<section class="people padded">
	<div class="people__circle"></div>
	<div class="people__circle2"></div>
	<div class="container pr">
		<h2 class="h1 text-center">Учись со звездами. Обучайся у экспертов</h2>
		<div class="row">
			{% for item in data.items %}
				{% if loop.index == 1 %}
					<div class="col-lg-12">
						<h3 class="people__h3">Наши <span>студенты</span></h3>
					</div>
				{% endif %}
				{% if loop.index == 3 %}
					<div class="col-lg-12">
						<h3 class="people__h3">Наши <span>лица</span></h3>
					</div>
				{% endif %}
				{% if loop.index == 5 %}
					<div class="col-lg-12">
						<h3 class="people__h3">Наши <span>преподаватели</span></h3>
					</div>
				{% endif %}

				{% if loop.index == 7 %}
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
				{% endif %}
				<div class="col-lg-6 people__el-wrap people__el--{{loop.index}}">
					<div class="people__el-bg"></div>
					<div class="people__el">
						{% if item.img2 %}
							<img src="img/people/{{ item.img2 | safe }}" alt="" class="people__el-img2">
						{% endif %}
						<img src="img/people/{{ item.img | safe }}" alt="" class="people__el-img">
						<div class="people__el-title">{{ item.title | safe }}</div>
						<p>{{ item.text | safe }}</p>
					</div>
				</div>
			{% endfor %}
		</div>
	</div>
</section>