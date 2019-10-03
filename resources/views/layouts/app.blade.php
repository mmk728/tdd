<html>
    <head>
        <title>軽減税率の世界 - @yield('title')</title>

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/jquery-ui.custom.min.css">
        <link rel="stylesheet" href="assets/css/jquery.gritter.min.css">
        <link rel="stylesheet" href="assets/css/fonts.googleapis.com.css">
        <link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style">
        <link rel="stylesheet" href="assets/css/ace-skins.min.css">
        <link rel="stylesheet" href="assets/css/ace-rtl.min.css">
        <script src="assets/js/ace-extra.min.js"></script>
    </head>
    <body class="no-skin">
        <div id="navbar" class="navbar navbar-default ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="{{ action('KeisanController@index') }}" class="navbar-brand">
						<small>
                            <i class="fa fa-yen"></i>
							軽減税率の世界
						</small>
					</a>
				</div>
			</div><!-- /.navbar-container -->
        </div>
        <div class="main-container">
        <div class="row">
            <div class="col-md-12">
            @section('sidebar')
            <div id="sidebar" class="sidebar responsive ace-save-state" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
                <script type="text/javascript">
                    try{ace.settings.loadState('sidebar')}catch(e){}
                </script>
                <ul class="nav nav-list" style="top: 0px;">
                    <li class="">
                        <a href="{{ action('KeisanController@index') }}">
                            <i class="menu-icon fa fa-tachometer"></i>
                            <span class="menu-text"> TOP </span>
                        </a>

                        <b class="arrow"></b>
                    </li>
                </ul>
                <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
                    <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
                </div>
            </div>
            @show

            <div class="main-content">
                @yield('content')
            </div>
        </div>
        </div>
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui.custom.min.js"></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
        <script src="assets/js/bootbox.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>
        <script src="assets/js/jquery.gritter.min.js"></script>
        <script src="assets/js/spin.js"></script>
        <script src="assets/js/ace-elements.min.js"></script>
        <script src="assets/js/ace.min.js"></script>
    </body>
</html>
