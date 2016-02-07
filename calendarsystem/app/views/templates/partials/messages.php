{% if flash.signedin %}
$.notify({
	title: 'تسجيل الدخول',
	message: '{{ flash.signedin }}'
},{
	type: 'pastel-warning',
	delay: 1000,
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

{% if flash.failedsignin %}
$.notify({
	title: 'خطأ',
	message: '{{ flash.failedsignin }}'
},{
	type: 'pastel-danger',
	delay: 3000,
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

{% if flash.logout %}
$.notify({
	title: 'تسجيل الخروج',
	message: '{{ flash.logout }}'
},{
	type: 'pastel-warning',
	delay: 3000,
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

{% if flash.identityerror %}
$.notify({
	title: 'خطأ في معرف الهوية',
	message: '{{ flash.identityerror }}'
},{
	type: 'pastel-warning',
	delay: 3000,
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



{% if flash.activationsuccess %}
$.notify({
	title: 'تم التفعيل',
	message: '{{ flash.activationsuccess }}'
},{
	type: 'pastel-info',
	delay: 3000,
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

{% if flash.passwordupdated %}
$.notify({
	title: 'تم التغيير',
	message: '{{ flash.passwordupdated }}'
},{
	type: 'pastel-info',
	delay: 3000,
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

{% if flash.upload_success %}
$.notify({
	title: 'تم رفع الملف',
	message: '{{ flash.upload_success }}'
},{
	type: 'pastel-info',
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

{% if flash.upload_fail %}
$.notify({
	title: 'خطأ في رفع الملف',
	message: '{{ flash.upload_fail }}'
},{
	type: 'pastel-info',
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
