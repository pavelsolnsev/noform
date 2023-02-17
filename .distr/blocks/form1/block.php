{% import "form/macro.php" as forms %}
<section class="feedback">
	<div class="container">
		{{ forms.form('form1', button_class="btn p-0 w-100", button="ОТПРАВИТЬ", title="Зарегистрироваться") }}
	</div>
</section>
