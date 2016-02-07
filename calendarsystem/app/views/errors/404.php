{% extends 'templates/default.php' %}

{% block title %}404 Error!{% endblock %}

{% block content %}
<div class="jumbotron">
  <div class="container">
    <h1>404, Page not found!</h1>
    <p>The requested page either does not exist or have been moved, please double check the URL that you requested and try again.</p>
    <p><a class="btn btn-primary btn-lg" href="#" role="button">Back&raquo;</a></p>
  </div>
</div>
{% endblock %}
