{% extends 'templates/default.php' %}

{% block title %}Recover Password{% endblock %}

{% block content %}
<div class="container-fluid">
	<div class="row">
		<form action="{{ urlFor('password.change.post')  }}" method="post" autocomplete="off" class="form-signin">
			<div class="form-group" style="text-align: center;">
				<h2 class="col-md-12">
					الرجاء ادخال البريد الالكتروني الخاص بحسابك
				</h2>
				</div>
			</br>
			<label for="identifier" class="sr-only">البريد الالكتروني</label>
		</br>
			<input type="identifier" name="identifier" id="identifier" class="form-control" placeholder="البريد الالكتروني" required autofocus>
			{% if errors.has('identifier') %}
				{{ errors.first('identifier') }}
			{% endif %}
		</br>
			<input class="btn btn-md btn-primary btn-block btn-info" type="submit" value="ارسال"></input>
			<input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
		</form>
	</div>
</br>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-3"></div>
		<div class="col-sm-1"><a class="btn btn-default" href="{{ urlFor('home') }}" role="button">الرجوع</a></div>
		<div class="col-md-3"></div>
		<div class="col-md-2"></div>
	</div>
</div> <!-- /container -->
{% endblock %}
