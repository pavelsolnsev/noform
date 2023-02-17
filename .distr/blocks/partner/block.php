{% from './data.php' import data %}
<section class="partner padded pb-0">
	<div class="container pr">
		<h2 class="h1 text-center">Партнеры факультета</h2>
		<div class="partner__wrap">
		<img src="img/partner/bg2.png" alt="" class="partner__img">
		<img src="img/programm/stars1.svg" alt="" class="partner__img2">
			<div class="row">
				{% for item in data.items %}
					<div class="col-lg-4 col-sm-6">
						<div class="partner__block">
							<img src="img/partner/{{ item.img | safe }}" alt="" class="responsive">
						</div>
					</div>
				{% endfor %}
			</div>
		</div>
	</div>
	<img src="img/programm/border.svg" alt="" class="programm__img2">
</section>