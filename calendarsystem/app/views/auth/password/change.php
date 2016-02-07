{% extends 'templates/default.php' %}

{% block title %}Change Password{% endblock %}

{% block content %}
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
			<div class="col-lg-6">
				<form class="form-horizontal" action="{{ urlFor('password.change.post')  }}" method="post" autocomplete="off" >
					<h2 class="form-signin-heading">إعادة تعيين كلمة المرور</h2>
					<div class="form-group">
						<label for="password_old" class="col-sm-5 control-label">كلمة المرور الحالية</label>
						<div class="col-sm-7">
							<input type="password" name="password_old" id="password_old" class="form-control" placeholder="Old Password"  autofocus>
							{% if errors.has('password_old') %}
								{{ errors.first('password_old') }}
							{% endif %}
						</div>
					</div>
					<div class="form-group">
						<label for="password" class="col-sm-5 control-label">كلمة المرور الجديدية</label>
						<div class="col-sm-7">
							<input type="password" name="password" id="password" class="form-control" placeholder="New Password" >
							{% if errors.has('password') %}
								{{ errors.first('password') }}
							{% endif %}
						</div>
					</div>
					<div class="form-group">
						<label for="password_confirm" class="col-sm-5 control-label">تأكيد كلمة المرور الجديدة</label>
						<div class="col-sm-7">
							<input type="password" name="password_confirm" id="password_confirm" class="form-control" placeholder="Confirm new password" >
							{% if errors.has('password_confirm') %}
								{{ errors.first('password_confirm') }}
							{% endif %}
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-3">
							<button type="submit" class="btn btn-default">تغيير</button>
						</div>
					</div>
					 <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
				</form>
			</div>
		</div><!-- /.container -->
	</div>
</div>
{% endblock %}
