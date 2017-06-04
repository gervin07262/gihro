<html>
	<head>
		<title>Gihro - Factura Electrónica</title>
		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
    {{ Html::style('assets-panel/vendor/bootstrap/css/bootstrap.min.css') }}

    <!-- Specific Page Vendor CSS -->
    @yield('csss')
	</head>
	<body>
    @yield('content')
    <!-- Specific Page Vendor -->
    @yield('javascripts')
	</body>
</html>
