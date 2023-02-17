{% extends 'default.php' %}

{% set PAGE_CLASS = 'no-gtm page-main page-voted' %}


{% block styles %}
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/responsive.css" media="(max-width: 1400px)">
{% endblock %}


{% block blocks_inner %}
{% include 'header/block.php' %}
{% include 'first/block.php' %}
{% include 'programm/block.php' %}
{% include 'people/block.php' %}
{% include 'plus/block.php' %}
{% include 'step/block.php' %}
{% include 'resume/block.php' %}
{% include 'event/block.php' %}
{% include 'where/block.php' %}
{% include 'partner/block.php' %}
{% include 'faq/block.php' %}
{% include 'last/block.php' %}
<footer class="footer">{% include 'footer/block.php' %}</footer>
{% endblock %}


{% block blocks_popups %}
{% include 'popup/block.php' %}
{% endblock %}

