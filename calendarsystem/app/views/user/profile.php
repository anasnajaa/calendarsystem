{% extends 'templates/default.php' %}

{% block title %}{{ user.getFullNameOrUsername }}{% endblock %}

{% block content %}
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <!-- Nav tabs start -->
      <div>
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">المعلومات الشخصية</a></li>
          <li role="presentation" ><a href="#perm" aria-controls="perm" role="tab" data-toggle="tab">الصلاحيات</a></li>
        </ul>
        <!-- Tab panes -->
        <!-- Tab Home -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="home">
            <div class="col-md-9">
              <div class="row">
                </br>
              </div>
              <div class="row">
                  <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">إسم المستخدم</div>
                      <div class="panel-body">
                        <h4>{{ user.username }}</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">البريد الاكتروني</div>
                      <div class="panel-body">
                        <h4>{{ user.email }}</h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading"> رقم الهاتف</div>
                      <div class="panel-body">
                        <h4>
                        {% if user.phone %}
                        {% else %}
                        لا يوجد رقم هاتف
                        {% endif %}
                      </h4>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">تغيير كلمة السر</div>
                      <div class="panel-body">
                        <h4><a href="{{ urlFor('password.change') }}">تغيير</a></h4>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        <!-- /tab home -->
        <!-- tab permessions -->
          <div role="tabpanel" class="tab-pane" id="perm">
            <div class="col-md-9">
              <div class="row">
                </br>
              </div>
              <div class="row">
                  <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">الصلاحيات</div>
                      <div class="panel-body">
                        <h4>{{ user.username }}</h4>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- /tab permissions -->
        </div>
        <!-- tab pane -->
      </div>
      <!-- div ends -->
    </div>
    <!-- ./row -->
  </div>
  <!-- /.container -->
</div>
{% endblock %}
