<!DOCTYPE html>
<html lang="en">
<head>
    <!-- start: Meta -->
    <meta charset="utf-8" />
    <title>商家管理中心</title>
    <meta name="description" content="SimpliQ - Flat & Responsive Bootstrap Admin Template." />
    <meta name="author" content="?ukasz Holeczek" />
    <meta name="keyword" content="SimpliQ, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina" />
    <!-- end: Meta -->
    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- end: Mobile Specific -->
    <!-- start: CSS -->
    <link href="/business/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/business/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="/business/css/style.min.css" rel="stylesheet" />
    <link href="/business/css/style-responsive.min.css" rel="stylesheet" />
    <link href="/business/css/retina.css" rel="stylesheet" />

    <!-- end: CSS -->
    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css/ie.css" rel="stylesheet">
	<![endif]-->
    <!--[if IE 9]>
		<link id="ie9style" href="css/ie9.css" rel="stylesheet">
	<![endif]-->
    <!-- start: Favicon and Touch Icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="/business/ico/apple-touch-icon-57-precomposed.png" />
    <link rel="shortcut icon" href="/business/ico/favicon.png" />
    <!-- end: Favicon and Touch Icons -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body style="height:1200px;">
    <!-- start: Header -->
    <div class="navbar">
    	<div class="navbar-inner">
	        @section('head')
				     @include('layouts.shangjia.head')
	        @show
	    </div>
    </div>
    <!-- start: Header -->
    <div class="container-fluid-full">
        <div class="row-fluid">
            <!-- start: Main Menu -->
            @section('menu')
				@include('layouts.shangjia.menu')
            @show
            <!-- end: Main Menu -->
            <!-- start: Content -->
            <div id="content" class="span10">

                <div class="row-fluid">
                  @section('content')
                  @show
                </div>

            </div>
            <!-- end: Content -->
        </div>
        <!--/fluid-row-->


    </div>
    <!--/.fluid-container-->
    <!-- start: JavaScript-->
    <script src="/business/js/jquery-1.10.2.min.js"></script>
    <script src="/business/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/business/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="/business/js/jquery.ui.touch-punch.js"></script>
    <script src="/business/js/modernizr.js"></script>
    <script src="/business/js/bootstrap.min.js"></script>
    <script src="/business/js/jquery.cookie.js"></script>
    <script src='/business/js/fullcalendar.min.js'></script>
    <script src='/business/js/jquery.dataTables.min.js'></script>
    <script src="/business/js/excanvas.js"></script>
    <script src="/business/js/jquery.flot.js"></script>
    <script src="/business/js/jquery.flot.pie.js"></script>
    <script src="/business/js/jquery.flot.stack.js"></script>
    <script src="/business/js/jquery.flot.resize.min.js"></script>
    <script src="/business/js/jquery.flot.time.js"></script>
    <script src="/business/js/jquery.chosen.min.js"></script>
    <script src="/business/js/jquery.uniform.min.js"></script>
    <script src="/business/js/jquery.cleditor.min.js"></script>
    <script src="/business/js/jquery.noty.js"></script>
    <script src="/business/js/jquery.elfinder.min.js"></script>
    <script src="/business/js/jquery.raty.min.js"></script>
    <script src="/business/js/jquery.iphone.toggle.js"></script>
    <script src="/business/js/jquery.uploadify-3.1.min.js"></script>
    <script src="/business/js/jquery.gritter.min.js"></script>
    <script src="/business/js/jquery.imagesloaded.js"></script>
    <script src="/business/js/jquery.masonry.min.js"></script>
    <script src="/business/js/jquery.knob.modified.js"></script>
    <script src="/business/js/jquery.sparkline.min.js"></script>
    <script src="/business/js/counter.min.js"></script>
    <script src="/business/js/raphael.2.1.0.min.js"></script>
    <script src="/business/js/justgage.1.0.1.min.js"></script>
    <script src="/business/js/jquery.autosize.min.js"></script>
    <script src="/business/js/retina.js"></script>
    <script src="/business/js/jquery.placeholder.min.js"></script>
    <script src="/business/js/wizard.min.js"></script>
    <script src="/business/js/core.min.js"></script>
    <script src="/business/js/charts.min.js"></script>
    <script src="/business/js/custom.min.js"></script>
    <!-- end: JavaScript-->
</body>

</html>
