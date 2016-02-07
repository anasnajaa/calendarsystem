{% extends 'templates/default.php' %}

{% block title %}
{% if auth %}
الصفحة الرئيسية
{% else %}
تسجيل الدخول
{% endif %}
{% endblock %}

{% block content %}
  {% if auth %}
    <div id="page-wrapper">
      <div class="container-fluid">
        {% if auth.isAdmin %}
        <!-- TODO: Add admin actions -->
        <!-- /End Admin specific panels-->
        {% else %}
        <!-- other Page Heading -->
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header">
              نظام التعاميم الرسمية  <small>كلية التربية الأساسية</small>
            </h1>
            <ol class="breadcrumb">
              <li class="active">
                <i class="fa fa-dashboard"></i> القائمة الرئيسية
              </li>
            </ol>
          </div>
        </div>
        <!-- /End other Page Heading -->
        <!-- First Row -->
        <div class="row">
          <!-- Normal user panels -->
          <div class="col-lg-4 col-md-4">
            <a href="{{ urlFor('event.add') }}">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-plus fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">اضافة</div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>
                  <span class="pull-right">اضافة تعميم لقاعدة البيانات</span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-4">
            <a href="{{ urlFor('event.manage') }}">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-list-alt fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">إدارة التعاميم</div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>
                  <span class="pull-right">إدارة التعاميم المنشورة في النظام</span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-4">
            <a href="{{ urlFor('event.preview') }}">
              <div class="panel panel-primary">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-xs-3">
                      <i class="fa fa-th fa-3x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                      <div class="huge">التقويم</div>
                    </div>
                  </div>
                </div>
                <div class="panel-footer">
                  <span class="pull-left"><i class="fa fa-arrow-circle-left"></i></span>
                  <span class="pull-right">معاينة التقويم للتحقق من النشر</span>
                  <div class="clearfix"></div>
                </div>
              </div>
            </a>
          </div>
          <!-- /Normal user panels -->
        </div>
        <!-- /End First Row -->
        <!-- Second Row-->
        <div class="row">
          <!-- user panels (reports) -->
        </div>
        {% endif %}
      </div>
      <!-- /.container-fluid -->
    </div>
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
