{% from './data.php' import data %}
<section class="faq padded">
	<div class="faq__bg1"></div>
	<div class="faq__bg2"></div>
	<div class="container pr">
		<h2 class="h1 text-center">Популярные вопросы</h2>
		{% for item in data.items %}
			<div class="faq__line {% if loop.index == 1 %} on {% endif %}">
				<h3 class="faq__ask">{{ item.title | safe }}</h3>
				<ul class="faq__answer" style="{% if loop.index == 1 %}display:block{% endif %}">{{ item.text | safe }}</ul>
			</div>
		{% endfor %}
		<div class="text-center">
			<a href="<?= $wa ?>" target="_blank" class="btn btn--yellow mt-5 pl-4 pr-4 d-inline-flex"><img src="img/header/whats.svg" alt="" class="mr-2"><span>Задать любой вопрос</span></a>
		</div>
	</div>
</section>