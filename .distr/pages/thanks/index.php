{% extends 'default.php' %}

{% set PAGE_CLASS = 'page-thanks no-gtm' %}


{% block styles %}
{{ super() }}
<link rel="stylesheet" href="css/thanks.style.css">
<link rel="stylesheet" href="css/thanks.responsive.css" media="(max-width: 1199px)">
{% endblock %}


{% block blocks_inner %}
<div class="cont">
<header>{% include 'header/block.php' %}</header>

    {% include '@thanks/main/block.php' %}
    <footer class="footer">{% include 'header/block.php' %}</footer>
</div>
{% endblock %}


{% block blocks_popups %}
{% include 'popup/block.php' %}
{% endblock %}
