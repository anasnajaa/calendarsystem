{% extends 'templates/default.php' %}

{% block title %} إضافة تعميم{% endblock %}

{% block content %}

<link href="/CBE/calendarsystem/bower_components/bootstrap-fileinput-master/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />


<div id="page-wrapper">
<div class="container-fluid">
  <div id="row">
    <div class="panel panel-default">
      <!-- Default panel contents -->
      <div class="panel-heading">
          <h3>اضافة تعميم</h3>
      </div>
      <div class="panel-body">
        <div class="col-md-12">
          <form class="form-horizontal" action="{{ urlFor('event.add.post')  }}" enctype="multipart/form-data" method="post" autocomplete="off" >
            <div class="form-group">
              <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
              <label for="name" class="col-md-2 control-label">عنوان التعميم</label>
              <div class="col-md-3">
                <input type="text" maxlength="40" class="form-control input-lg limit" id="title" name="title" autofocus placeholder="الاسم " {% if request.post('title') %} value="{{ request.post('title') }}" {% endif %}>
              </div>
              <div class="col-md-6">
                <span class="label label-primary">عدد الأحرف الباقية للعنوان <span id="counter1"></span></span>
              </div>
            </div>
            <div class="form-group">
              <label for="fileToUpload" class="col-md-2 control-label">ملف التعميم</label>
              <div class="col-md-3">
                  <input type="file" name="fileToUpload" id="fileToUpload" class="file-loading" >
              </div>
              <div class="col-md-6">
                <span class="label label-warning">يجب ألا يتجاوز حجم الملف 6 MB</span>
                <span class="label label-default">صيغة الملف يجب أن تكون (PDF, JPG, PNG)</span>
              </div>
            </div>
            <div class="form-group">
              <label for="datetime" class="col-sm-2 control-label">تاريخ نشر التعميم</label>
              <div class="col-md-3">
                <input type="text" id="datetime" name="datetime" class="form-control input-lg" {% if request.post('datetime') %} value="{{ request.post('datetime') }}" {% endif %}>
              </div>
              <div class="col-md-6">
                <span class="label label-success">التاريخ الذي تم فيه موافقة العميد على نشر التعميم</span>
              </div>
            </div>
            <div class="form-group">
              <label for="issuedate" class="col-sm-2 control-label">تاريخ إصدار التعميم</label>
              <div class="col-md-3">
                <input type="text" id="issuedate" name="issuedate" class="form-control input-lg" {% if request.post('issuedate') %} value="{{ request.post('issuedate') }}" {% endif %}>
              </div>
              <div class="col-md-6">
                <span class="label label-info">تاريخ صدور التعميم من الجهة الرسمية</span>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-2">
                <button type="submit" id="submit" disabled="true" class="btn btn-lg btn-primary">نشر</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-3">

        </div>
      </div>
      <!-- Table -->
    </div>
</div>
</div> <!-- /container -->
</div>
<script src="/CBE/calendarsystem/bower_components/bootstrap-fileinput-master/js/plugins/canvas-to-blob.min.js" type="text/javascript"></script>
<script src="/CBE/calendarsystem/bower_components/bootstrap-fileinput-master/js/fileinput.min.js"></script>
<script src="/CBE/calendarsystem/bower_components/bootstrap-fileinput-master/js/fileinput_locale_ar.js"></script>
<script src="/CBE/calendarsystem/bower_components/bootstrap-limit/bootstrap-limit.js"></script>
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
$(document).on('ready', function() {
  $("#fileToUpload").fileinput({
    browseClass: "btn btn-primary btn-block",
    maxFileSize: 6000,
    showCaption: false,
    showRemove: false,
    showUpload: false,
    language: "ar",
    allowedFileExtensions: ["jpg", "png", "pdf"],
  });
  $('input:file').change(
      function(){
          if ($(this).val()) {
              $('#submit').attr('disabled',false);
              //console.log('there is a val');
              // or, as has been pointed out elsewhere:
              // $('input:submit').removeAttr('disabled');
          } else {
            $('#submit').attr('disabled',true);
          }
      }
      );

});

$('.limit').limit({
  maxLength: 40,
  counter: '#counter1',
  removeMaxLengthAttr: true,
  threshold: 10,
  color: 'yellow'
});
</script>
{% endblock %}
