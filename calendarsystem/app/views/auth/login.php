{% extends 'templates/default.php' %}

{% block title %}تسجيل الدخول{% endblock %}

{% block content %}

{% if auth %}

{% else %}

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<img class="center-block img-responsive" src="/CBE/paaetsystem/res/images/logo.png">
			<div class="form-group" style="text-align: center;">
				<h1 class="amiri">الهيئة العامة للتعليم التطبيقي والتدريب</h1>
				<h1 class="amiri">كلية التربية الأساسية</h1>
			</div>
		</div>
	</div>
	<form action="{{ urlFor('login.post')  }}" method="post" autocomplete="off" class="form-signin">
		<div class="form-group" style="text-align: center;">
			<h2 class="col-md-12 lateef" style="border-bottom: 3px solid #189e49; border-top: 3px solid #189e49;">نظام التعاميم الرسمية</h2>
		</div>
		</br>
		<label for="identifier" class="sr-only">إسم المستخدم</label>
		<input type="identifier" name="identifier" id="identifier" class="form-control" placeholder="إسم المستخدم" required autofocus>
		{% if errors.has('identifier') %}
			{{ errors.first('identifier') }}
		{% endif %}
		</br>
		<label for="password" class="sr-only">كلمة المرور</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="كلمة المرور" required>
		{% if errors.has('password') %}
			{{ errors.first('password') }}
		{% endif %}
		<div class="checkbox">
			<input name="remember" type="checkbox" value="remember" id="remember">
		</br>
			<label for="remember"> تذكرني</label>
			<a href="{{ urlFor('password.recover') }}">نسيتَ كلمة المرور؟</a>
		</div>
		<button type="submit" class="btn btn-primary btn-md btn-warning">تسجيل الدخول</button>
		<input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
	</form>
</div> <!-- /container -->

{% endif %}
{% endblock %}
