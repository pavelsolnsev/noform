{% import "form/macro.php" as forms %}

<div id="modal-form">
	<div class="last__feedback">
		{{ forms.form('form1', button_class="btn btn--yellow p-0 w-100", button="ОТПРАВИТЬ", title="Оставь заявку и&nbsp;мы&nbsp;свяжемся с&nbsp;тобой в&nbsp;течение 15&nbsp;минут", form_text="", form_class="form-callback") }}
	</div>
</div>
