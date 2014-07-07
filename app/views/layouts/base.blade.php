<html>
<head>
    
    	<meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {{ HTML::style('assets/AdminLTE/css/bootstrap.min.css') }}
        <!-- font Awesome -->
        {{ HTML::style('assets/AdminLTE/css/font-awesome.min.css') }}
        <!-- Ionicons -->
        {{ HTML::style('assets/AdminLTE/css/ionicons.min.css') }}
        <!-- Morris chart -->
        <!-- {{ HTML::style('assets/AdminLTE/css/morris/morris.css') }} -->
        <!-- jvectormap -->
        <!-- {{ HTML::style('assets/AdminLTE/css/jvectormap/jquery-jvectormap-1.2.2.css') }} -->
        <!-- fullCalendar -->
        <!-- {{ HTML::style('assets/AdminLTE/css/fullcalendar/fullcalendar.css') }} -->
        <!-- Daterange picker -->
        <!-- {{ HTML::style('assets/AdminLTE/css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }} -->
        <!-- bootstrap wysihtml5 - text editor -->
        <!-- Theme style -->
        {{ HTML::style('assets/AdminLTE/css/AdminLTE.css') }}
        <!-- App style -->
        {{ HTML::style('assets/css/app.css') }}

        {{ HTML::style('assets/AdminLTE/css/dataTables/dataTables.bootstrap.css') }}

        {{ HTML::style('assets/vendor/alertify.js-0.3.11/themes/alertify.core.css') }}
        {{ HTML::style('assets/vendor/alertify.js-0.3.11/themes/alertify.default.css') }}

        @yield('stylesheets')

        <!-- jQuery 2.0.2 -->
        {{ HTML::script('assets/vendor/jquery/jquery-2.1.1.min.js') }}
        <!-- {{ HTML::script('http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js') }} -->
        <!-- jQuery UI 1.10.3 -->
        {{ HTML::script('assets/AdminLTE/js/jquery-ui-1.10.3.min.js') }}

        <!-- Bootstrap -->
        {{ HTML::script('assets/AdminLTE/js/bootstrap.min.js') }}

        <!-- jquery.mask.js -->
        {{ HTML::script('assets/vendor/jquery.mask/jquery.mask.js') }}

        {{ HTML::script('assets/vendor/alertify.js-0.3.11/lib/alertify.js') }}

        <!-- form-mask.js -->
        {{ HTML::script('assets/js/form-mask.js') }}
        {{ HTML::script('assets/vendor/jquery.md5/jquery.md5.js') }}
        {{ HTML::script('assets/js/request_for_news.js') }}

        <!-- Sparkline -->
        <!-- {{ HTML::script('assets/AdminLTE/js/plugins/sparkline/jquery.sparkline.min.js') }} -->
        <!-- jvectormap -->
        <!-- {{ HTML::script('assets/AdminLTE/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }} -->
        <!-- {{ HTML::script('assets/AdminLTE/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }} -->
        <!-- fullCalendar -->
        <!-- {{ HTML::script('assets/AdminLTE/js/plugins/fullcalendar/fullcalendar.min.js') }} -->
        <!-- jQuery Knob Chart -->
        <!-- {{ HTML::script('assets/AdminLTE/js/plugins/jqueryKnob/jquery.knob.js') }} -->
        <!-- daterangepicker -->
        <!-- {{ HTML::script('assets/AdminLTE/js/plugins/daterangepicker/daterangepicker.js') }} -->
        <!-- Bootstrap WYSIHTML5 -->
        <!-- {{ HTML::script('assets/AdminLTE/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }} -->
        <!-- iCheck -->
        {{ HTML::script('assets/AdminLTE/js/plugins/iCheck/icheck.min.js') }}
        
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <!-- {{ HTML::script('assets/AdminLTE/js/AdminLTE/dashboard.js') }} -->

        <!-- Morris.js charts -->
        <!-- {{ HTML::script('//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }} -->
        <!-- {{ HTML::script('assets/AdminLTE/js/plugins/morris/morris.min.js') }} -->

        <!-- AdminLTE App -->
        {{ HTML::script('assets/AdminLTE/js/AdminLTE/app.js') }}


        {{ HTML::script('assets/js/news_notifier.js') }}
        
        
        @yield('scripts')

    	<title>Transnatal Manager</title>
        
</head>
<body class=@yield('bg-body')>
	@yield('content')
	
</body>
</html>