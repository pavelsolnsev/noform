{% macro form( form_id, form_class='form_inline', title_class='', button_class='', title='', button='Отправить', form_text, add_fields, exclude_fields ) %}
<form class="form {{ form_class | safe }}" action="<?= $action ?>&amp;form={{ form_id | safe }}">

	{% if title %}
	<div class="h1 {{ title_class }}">{{ title | safe }}</div>
	{% endif %}

	{% if form_text %}
	<div class="form__text">{{ form_text | safe }}</div>
	{% endif %}

	{{ form_items(exclude_fields, add_fields, button, button_class, form_id ) }}

</form><!-- form -->
{% endmacro %}


{% macro form_items(exclude_fields, add_fields, button, button_class, form_id ) %}
<div class="form__lines">
	<div class="row">
		<div class="col-lg-3">
			{% if not exclude_fields.name %}
			{{ form_item( 'name', 'text', 'Имя', true ) }}
			{% endif %}
		</div>
		<div class="col-lg-3">
			{% if not exclude_fields.phone %}
			{{ form_item( 'phone', 'text', 'Телефон', true) }}
			{% endif %}
		</div>
		<div class="col-lg-3">
			{% if not exclude_fields.email %}
			{{ form_item( 'email', 'email', 'E-mail', true ) }}
			{% endif %}
		</div>
		{% if form_id != 'form4' and form_id != 'form6' %}
		<div class="col-lg-3">
			<div class="form__line form__line_button">
				<button class="form__button button {{ button_class }} condensed" type="submit"><span>{{ button | safe }}</span></button>
			</div>
		</div>
		{% endif %}
	</div>

	<!-- form__item -->



	<div class="form__footer">
		<label for="{{ form_id }}" class="checkbox">
			<input type="checkbox" id="{{ form_id }}" name="personalDataAgree" style="display:none" checked>
			<span class="checkbox__input"></span>
			<span>Cогласен c <a href="#privacy">политикой конфиденциальности</a></span>
		</label>
	</div>
	{% if form_id == 'form4' or form_id == 'form6' %}
	<div class="form__line form__line_button text-center">
			<button class="form__button button {{ button_class }} condensed" type="submit"><span>{{ button | safe }}</span></button>
		</div>
		{% endif %}
	<!-- form__footer -->

</div><!-- form__items -->
{% endmacro %}


{% macro form_item(name, type, placeholder, required, value, options, attr) %}
<div class="form__line form__line_{{ type }} {{ 'd-none' if type == 'hidden' }}" data-name="{{ name }}">
	{% if type == 'textarea' %}

	<textarea name="{{ name }}" placeholder="{{ placeholder | safe }}" class="form__input form__input_textarea" {{ 'required' if required }} {{ attr | safe }}></textarea>

	{% elseif type == 'select' %}

	<select name="{{ name }}" class="form__input" {{ 'required' if required }} {{ attr | safe }}>
		<option value="" disabled selected>{{ placeholder | safe }}</option>
		{% for option in options %}
		<option value="{{ option.value | safe }}">{{ option.text }}</option>
		{% endfor %}
	</select>

	{% else %}

	{% if type == 'number' %}<label class="form__line-label"><span class="form__item-label-text">{{ placeholder | safe }}</span>{% endif %}
		<input name="{{ name }}" type="{{ type }}" placeholder="{{ placeholder | striptags | safe }}" value="{{ value | safe }}" class="form__input brd" {{ 'min=1' if type == 'number' }} {{ 'required' if required }} {{ attr | safe }}>
	{% if type == 'number' %}</label>{% endif %}

	{% endif %}
</div><!-- form__item -->
{% endmacro %}
