<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="../favicon.ico">
		<link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<title>نظام تعاميم كلية التربية الأساسية | {% block title %}{% endblock %} </title>
    <link href="../bower_components/bootstrap/dist/css/signin.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bower_components/bootstrap/dist/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		{% include 'templates/partials/navigation.php' %}
		{% include 'templates/partials/messages.php' %}

		{% block content%}
		{% endblock %}
	</body>
</html>
