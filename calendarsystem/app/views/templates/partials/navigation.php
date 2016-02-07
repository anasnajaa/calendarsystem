{% if auth %}
<!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ urlFor('home') }}">نظام تعاميم كلية التربية الأساسية </a>
    </div>
    <!-- Top Menu Items -->
    <ul class="nav navbar-right top-nav">
      <!--Profile menu-->
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ auth.getFullNameOrUserName }} <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li>
            <a href="{{ urlFor('user.profile', {username: auth.username}) }}"><i class="fa fa-fw fa-user"></i> الصفحة الشخصية</a>
          </li>
          <li class="divider"></li>
          <li>
            <a href="{{ urlFor('logout') }}"><i class="fa fa-fw fa-power-off"></i> تسجيل الخروج</a>
          </li>
        </ul>
      </li>
    </ul>
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav side-nav">
        <li>
          <a href="{{ urlFor('home') }}"><i class="fa fa-fw fa-dashboard"></i> الصفحة الرئيسية</a>
        </li>
        {% if auth.isAdmin %}
        <li>
          <a href="{{ urlFor('user.all') }}"><i class="fa fa-fw fa-edit"></i> إدارة المستخدمين</a>
        </li>
        {% endif %}
        <li>
          <a href="{{ urlFor('event.add') }}"><i class="fa fa-fw fa-plus"></i> إضافة تعميم </a>
        </li>
        <li>
          <a href="{{ urlFor('event.manage') }}"><i class="fa fa-fw fa-list-alt"></i> إدارة التعاميم </a>
        </li>
        <li>
          <a href="{{ urlFor('event.preview') }}"><i class="fa fa-fw fa-th"></i> التقويم </a>
        </li>
      </ul>
    </div>
            <!-- /.navbar-collapse -->
</nav>
{% endif %}
