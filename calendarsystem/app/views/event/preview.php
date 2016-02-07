{% extends 'templates/default.php' %}

{% block title %} معاينة التعاميم {% endblock %}

{% block content %}


<div id="page-wrapper">
  <div class="container-fluid">
    <div id="row">
      <div class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">
        <div class="row">
          <div class="col-md-3">
            <h3>تقويم التعاميم المنشورة</h3>
          </div>
          <div class="col-md-7">
          </div>
          <div class="col-md-2">
            <button type="button" class="btn btn-block btn-md btn-success" onclick="refresh();">
              <span><i class="fa fa-retweet"></i></span></button>
          </div>
        </div>
        </div>
        <div class="panel-body">
          <iframe id="iframe" scrolling="auto" frameborder="0" width="100%" height="1200" src="https://pay.paaet.edu.kw/cbe/cal/"></iframe>
        </div>
        <!-- Table -->
      </div>
    </div>
  </div> <!-- /container -->
</div>

<script type="text/javascript">
  function refresh()
    {
        document.getElementById('iframe').contentWindow.location.reload();
    }
</script>
{% endblock %}
