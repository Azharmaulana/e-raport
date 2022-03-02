<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>{{ $title }}</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/admin-home/vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/admin-home/vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/admin-home/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/admin-home/src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/admin-home/vendors/styles/style.css') }}">

	{{-- Table admin --}}
	{{-- <link rel="stylesheet" href="{{ asset('assets/vendors/admin-home/css/table-admin.css') }}"> --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>
<body>
	{{-- <div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src=""z alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div> --}}

    {{-- heeader --}}
    {{-- end header --}}

    {{-- right sidebar --}}
        @include('partials.right-sidebar')
    {{-- end right sidebar --}}

    {{-- left sidebar --}}
        @include('partials.left-sidebar')
    {{-- end left sidebar --}}

    {{-- Main Area --}}
	<div class="main-container">
        @yield('main')
	</div>
    {{-- end main --}}

	<!-- js -->
	<script src="{{ asset('assets/vendors/admin-home/vendors/scripts/core.js') }}"></script>
	<script src="{{ asset('assets/vendors/admin-home/vendors/scripts/script.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/admin-home/vendors/scripts/process.js') }}"></script>
	<script src="{{ asset('assets/vendors/admin-home/vendors/scripts/layout-settings.js') }}"></script>
	<script src="{{ asset('assets/vendors/admin-home/src/plugins/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/admin-home/src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/admin-home/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/admin-home/src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/admin-home/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/admin-home/vendors/scripts/dashboard.js') }}"></script>
</body>
</html>z