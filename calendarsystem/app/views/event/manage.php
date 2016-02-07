{% extends 'templates/default.php' %}

{% block title %}إدارة التعاميم{% endblock %}

{% block content %}
<div id="page-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
          <h3>جميع التعاميم</h3>
        </div>
        <div class="panel-body">
          <div class="row">
          <div class="col-md-12">
            <div class="table-responsive">
              <table id="DTreport" class="table table-striped table-bordered" cellspacing="0" width="100%" style="font-size:20px">
                <thead>
                  <tr>
                    <th>عنوان التعميم</th>
                    <th>ملف التعميم</th>
                    <th>تاريخ النشر</th>
                    <th>تاريخ الإصدار</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>عنوان التعميم</th>
                    <th>ملف التعميم</th>
                    <th>تاريخ النشر</th>
                    <th>تاريخ الإصدار</th>
                    <th>تعديل</th>
                    <th>حذف</th>
                  </tr>
                </tfoot>
                <tbody>
                  {% if events is empty %}
                  <p>No publications yet.</p>
                  {% else %}
                  {% for event in events %}
                  <tr>
                    <td>
                      {% if event.title %}
                      {{ event.title }}
                      {% endif %}
                    </td>
                    <td>
                      {% if event.url %}
                      <a href="{{ event.url }}">معاينة</a>
                      {% endif %}
                    </td>
                    <td>
                      {% if event.datetime %}
                      {{ event.datetime|slice(0, 10) }}
                      {% endif %}
                    </td>
                    <td>
                      {% if event.issuedate %}
                      {{ event.datetime|slice(0, 10) }}
                      {% endif %}
                    </td>
                    <td>
                      {% if event.id %}
                      <button type="button" id="myButton" class="btn btn-primary" target="_blank" onclick="window.open('{{ urlFor('event.details', {number: event.id}) }}', '_self')">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                      </button>
                      {% endif %}
                    </td>
                    <td>
                      {% if event.id %}
                      <button type="button" id="myButton" class="btn btn-primary" onclick="myFunction('{{ urlFor('event.manage.delete', {number: event.id}) }}')">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                      </button>
                      {% endif %}
                    </td>
                  </tr>
                  {% endfor %}
                  {% endif %}
                </tbody>
              </table>
            </div>
          </div>
        </div> <!-- Row -->
      </div><!-- Panel Body -->
      </div>
    </div> <!--/row -->
  </div> <!-- /container -->
</div>
<script>
function myFunction(url1) {
  var r = confirm("هل تريد حذف التعميم؟");
  if (r == true) {
      window.location.href = url1;
  } else {

  }
}

</script>

{% endblock %}
