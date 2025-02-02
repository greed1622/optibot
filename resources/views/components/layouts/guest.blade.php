<!doctype html>
<html class="fixed">

<head>

    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Clinic OptiBot Management System</title>

    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="Porto Admin - Responsive HTML5 Template">
    <meta name="author" content="okler.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800|Shadows+Into+Light"
        rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/animate/animate.compat.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/magnific-popup/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/jquery-ui/jquery-ui.css') }}" />
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.theme.css" />
    <link rel="stylesheet" href="vendor/bootstrap-multiselect/css/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="vendor/morris/morris.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Head Libs -->
    <script src="vendor/modernizr/modernizr.js"></script>

</head>

<body class="bg-dark">

    {{ $slot }}


    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger intent="WELCOME" chat-title="Rain" agent-id="b74ef993-ad84-4f70-bd54-86e87ec3c1ee"
        language-code="en"></df-messenger>
    <!-- Vendor -->
    <script src="{{ asset('vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>
    <script src="{{ asset('vendor/popper/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('vendor/common/common.js') }}"></script>
    <script src="{{ asset('vendor/nanoscroller/nanoscroller.js') }}"></script>
    <script src="{{ asset('vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('vendor/jquery-placeholder/jquery.placeholder.js') }}"></script>

    <!-- Specific Page Vendor -->
    <script src="{{ asset('vendor/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('vendor/jqueryui-touch-punch/jquery.ui.touch-punch.js') }}"></script>
    <script src="{{ asset('vendor/jquery-appear/jquery.appear.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
    <script src="{{ asset('vendor/jquery.easy-pie-chart/jquery.easypiechart.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('vendor/flot.tooltip/jquery.flot.tooltip.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('vendor/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
    <script src="{{ asset('vendor/raphael/raphael.js') }}"></script>
    <script src="{{ asset('vendor/morris/morris.js') }}"></script>
    <script src="{{ asset('vendor/gauge/gauge.js') }}"></script>
    <script src="{{ asset('vendor/snap.svg/snap.svg.js') }}"></script>
    <script src="{{ asset('vendor/liquid-meter/liquid.meter.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/jquery.vmap.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>
    <script src="{{ asset('vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="js/theme.js"></script>

    <!-- Theme Custom -->
    <script src="js/custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="js/theme.init.js"></script><a class="scroll-to-top hidden-mobile" href="#"><i
            class="fas fa-chevron-up"></i></a><a class="scroll-to-top hidden-mobile" href="#"><i
            class="fas fa-chevron-up"></i></a>

    <!-- Examples -->
    <script src="js/examples/examples.dashboard.js"></script>
    <div class="flotTip" style="display: none; position: absolute;"></div>
    <div class="jqvmap-label" style="display: none;"></div>

    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/messenger-internal.min.js?v=4"></script>
</body>

</html>
