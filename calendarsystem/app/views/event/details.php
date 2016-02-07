{% extends 'templates/default.php' %}

{% block title %}{{ event.id }}{% endblock %}

{% block content %}

<link href="/CBE/calendarsystem/bower_components/bootstrap-fileinput-master/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="/CBE/calendarsystem/bower_components/bootstrap-fileinput-master/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
<script src="/CBE/calendarsystem/bower_components/bootstrap-fileinput-master/js/fileinput.min.js"></script>
<script src="/CBE/calendarsystem/bower_components/bootstrap-fileinput-master/js/fileinput_locale_ar.js"></script>
<!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <!-- Nav tabs start -->
      <div>
          <form class="form-horizontal" action="{{ urlFor('event.details.post')  }}" enctype="multipart/form-data" method="post" autocomplete="off" >
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">بيانات التعميم</a></li>
          <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">مرفق التعميم</a></li>
        </ul>
  <!-- Tab panes -->

        <div class="tab-content">
          <div role="tabpanel" class="tab-pane active" id="home">
            <div class="col-md-9">
              <div class="row">
                </br>
              </div>
              <div class="row">
                  <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">عنوان التعميم</div>
                      <div class="panel-body">
                        {% if event.title %}
                          <input type="text" class="form-control input-lg" id="title" name="title" autofocus placeholder="الاسم " value="{{ event.title }}">
                        {% else %}
                          <h4>لا يوجد</h4>
                        {% endif %}
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">التاريخ الذي نشر به التعميم</div>
                      <div class="panel-body">
                        {% if event.datetime %}
                          <input type="text" id="datetime" name="datetime" class="form-control input-lg" value="{{ event.datetime }}">
                        {% else %}
                          <h4>لا يوجد</h4>
                        {% endif %}
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">تاريخ انشاء التعميم</div>
                      <div class="panel-body">
                        {% if event.created_at %}
                          <h4>{{ event.created_at|slice(0, 10) }}</h4>
                        {% else %}
                          <h4>لا يوجد</h4>
                        {% endif %}
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-4 col-lg-4 col-md-4">
                    <div class="panel panel-info">
                      <div class="panel-heading">تاريخ آخر تعديل تم على التعميم</div>
                      <div class="panel-body">
                        {% if event.updated_at %}
                          <h4>{{ event.updated_at }}</h4>
                        {% else %}
                          <h4>لا يوجد</h4>
                        {% endif %}
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <!-- Tab panel home -->
          <div role="tabpanel" class="tab-pane" id="profile">
            <div class="col-md-9">
              <div class="row">
                </br>
              </div>
              <div class="row">
                <div class="col-sm-4 col-lg-4 col-md-4">
                  <div class="panel panel-success">
                    <div class="panel-heading">المرفق</div>
                    <div class="panel-body">
                      {% if event.url %}
                        <h4><a href="{{ event.url }}">معاينة</a></h4>
                      {% else %}
                        <h4>لا يوجد</h4>
                      {% endif %}
                    </div>
                    <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
                    <input type="hidden" name="id" value="{{ event.id }}">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Tab panel profile -->
        </div>
        <!-- tab content -->
      </div>
      <button type="submit" class="btn btn-lg btn-primary">نشر</button>
      </form>
      <!-- div ends -->
    </div>
    <!-- ./row -->
  </div>
  <!-- /.container -->
</div>
<script type="text/javascript">
{% if upload_status is defined %}
  {% if upload_status == true %}
    $.notify({
    	title: 'تم رفع الملف',
    	message: '{{ upload_message }}'
    },{
    	type: 'pastel-info',
    	delay: 2000,
    	placement: {
    	from: "top",
    	align: "left"
    },
    	allow_dismiss: true,
    	template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
    		'<span data-notify="title">{1}</span>' +
    		'<span data-notify="message">{2}</span>' +
    	'</div>'
    });
  {% else %}
    $.notify({
      title: 'خطأ أثناء الرفع',
      message: '{{ upload_message }}'
    },{
      type: 'pastel-danger',
      delay: 4000,
      placement: {
      from: "top",
      align: "left"
    },
      allow_dismiss: true,
      template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
        '<span data-notify="title">{1}</span>' +
        '<span data-notify="message">{2}</span>' +
      '</div>'
    });
    {% endif %}
{% endif %}

// with plugin options
  $("#fileToUpload").fileinput({
    browseClass: "btn btn-primary btn-block",
    showCaption: false,
    showRemove: false,
    showUpload: false,
    language: "ar",
    allowedFileExtensions: ["jpg", "png", "pdf"],
  });

  $('#datetime').daterangepicker({
      "singleDatePicker": true,
      showDropdowns: true,

      "opens": "left",
      locale: {
        format: 'YYYY-MM-DD'
      }
  });
</script>
{% endblock %}
