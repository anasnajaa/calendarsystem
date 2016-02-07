<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="/CBE/paaetsystem/favicon.ico">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Notify -->
		<script src="/CBE/paaetsystem/bower_components/bootstrap/dist/js/bootstrap-notify.min.js"></script>
		<<script type="text/javascript">
			{% include 'templates/partials/messages.php' %}
		</script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
				<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
				<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		{% if auth %}
			<!-- #User and admin page style -->
			<!-- Bootstrap Core CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<!--<link href="/CBE/paaetsystem/bower_components/bootstrap_admin/css/bootstrap.min.css" rel="stylesheet">-->
			<!-- Custom CSS -->
			<link href="/CBE/calendarsystem/bower_components/bootstrap_admin/css/sb-admin.css" rel="stylesheet">
			<!-- Custom Fonts -->
			<link href="/CBE/calendarsystem/bower_components/bootstrap_admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
			<!-- RTL and custom css -->
			<link href="/CBE/calendarsystem/bower_components/bootstrap_admin/css/sb-admin-rtl.css" rel="stylesheet" type="text/css">
			<!-- Morris Charts CSS -->
			<link href="/CBE/calendarsystem/bower_components/bootstrap_admin/css/plugins/morris.css" rel="stylesheet" type="text/css">
			<!-- Datatabels plugin  -->
			<link href="//cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
			<link href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css">
			<link href="https://cdn.datatables.net/responsive/1.0.7/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css">
			<!-- /#end #User andadmin page style -->
			<!-- Date picker -->
			<link rel="stylesheet" type="text/css" media="all" href="/CBE/paaetsystem/bower_components/bootstrap-datepicker-range/daterangepicker.css" />
		{% else %}
			<!--Sign in page styles-->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
			<link href="/CBE/calendarsystem/bower_components/bootstrap/dist/css/signin.css" rel="stylesheet">
			<!--End sign in page styles-->
		{% endif %}
		<!-- Bootstrap Core CSS RTL-->
		<link href="/CBE/calendarsystem/bower_components/bootstrap_admin/css/bootstrap-rtl.min.css" rel="stylesheet">
		<!--Plugins styles-->
		<link href="/CBE/calendarsystem/bower_components/bootstrap/dist/css/notifytheme.css" rel="stylesheet">
		<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.0/animate.min.css" rel="stylesheet">
		<!--End Plugins styles-->
		<title>نظام تعاميم كلية التربية الأساسية | {% block title %}{% endblock %} </title>
	</head>
	<body>

		<!-- #Wrapper -->
		<div id="wrapper">
			{% include 'templates/partials/navigation.php' %}
			{% block content%}
			{% endblock %}
			{% if auth %}
			<div id="page-wrapper">
				<div class="container-fluid">
					<div class="page-header">
					</div>
					<p>مكتب نظم المعلومات بكلية التربية الأساسية</p>
				</div>
			</div>
			{% endif %}
		</div>
		<!-- /#wrapper -->



		<!--<script src="/CBE/paaetsystem/bower_components/jquery/dist/jquery.min.js"></script>-->


		{% if auth %}
			<!-- Datatabels Extensions -->
			<script src="//cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
			<script src="https://cdn.datatables.net/responsive/1.0.7/js/dataTables.responsive.min.js"></script>
			<script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script>
			<script src="//cdn.datatables.net/buttons/1.0.3/js/buttons.flash.min.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
			<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
			<script src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
			<script src="//cdn.datatables.net/buttons/1.0.3/js/buttons.html5.min.js"></script>
			<script src="//cdn.datatables.net/buttons/1.0.3/js/buttons.print.min.js"></script>
			<!-- Date picker lib -->
			<script type="text/javascript" src="/CBE/calendarsystem/bower_components/bootstrap-datepicker-range/moment.js"></script>
			<script type="text/javascript" src="/CBE/calendarsystem/bower_components/bootstrap-datepicker-range/daterangepicker.js"></script>
		{% endif %}
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>


		<!-- Datatabels and datepicker plugins -->
		<script type="text/javascript">
		$('#datetime').daterangepicker({
			"singleDatePicker": true,
      showDropdowns: true,
      "opens": "right",
      locale: {
        format: 'YYYY-MM-DD'
      }
		});

		$('#issuedate').daterangepicker({
			"singleDatePicker": true,
			showDropdowns: true,
			"opens": "right",
			locale: {
				format: 'YYYY-MM-DD'
			}
		});

			$(document).ready(function(){
				$('#DTreport').DataTable({
					responsive: true,
					dom: 'Bfrtip',
					order: [[ 2, "desc" ]],
					buttons: [
						'excel', 'print'
					],
					"language": {
						"sProcessing":   "جاري التحميل/CBE/paaetsystem.",
						"sLengthMenu":   "أظهر التعاميم _MENU_",
						"sZeroRecords":  "لم يُعثر على أية تعاميم",
						"sInfo":         "إظهار _START_ إلى _END_ من أصل _TOTAL_ تعميم",
						"sInfoEmpty":    "يعرض 0 إلى 0 من أصل 0 تعميم",
						"sInfoFiltered": "(منتقاة من مجموع _MAX_ سجل)",
						"sInfoPostFix":  "",
						"sSearch":       "البحث (تاريخ - عنوان التعميم) :",
						"sUrl":          "",
						"oPaginate": {
							"sFirst":    "الأول",
							"sPrevious": "السابق",
							"sNext":     "التالي",
							"sLast":     "الأخير"
						}
					}
				});
			});



		</script>
	</body>
</html>
