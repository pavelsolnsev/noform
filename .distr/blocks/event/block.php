{% from './data.php' import data %}
<section class="event padded">
	<div class="event__bg"></div>
	<div class="container pr">
		<h2 class="h1 text-center mb-2">События Факультета</h2>
		<p>Студенты факультета не только посещают, но и занимаются организацией настоящих турниров и мероприятий в сфере игровой индустрии</p>
		<div class="row">
			{% for item in data.items %}
				<div class="col-lg-3 col-md-6 mb-4">
					<div class="event__el">
						<div class="event__el-title">{{ item.title | safe }}</div>
						<div class="event__el-img" style="background-image:url(img/event/img{{loop.index}}.jpg)"></div>
						<div class="event__el-title2">{{ item.title2 | safe }}</div>
						<div class="event__el-text">{{ item.text | safe }}</div>
						<div class="mt-a">
						<a href="{{ item.video | safe }}" class="btn btn--yellow fancybox-media" data-rel="media"><span>
							<img src="img/event/arr.svg" alt="" class="mr-2">
							Смотреть видео
						</span></a>
						</div>
					</div>
				</div>
			{% endfor %}
		</div>
	</div>
</section>