<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
		<title> لوحة التحكم </title>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Tajawal:wght@500&display=swap');
        </style>
		<!--Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

		<!--Icons css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/css/icons.css') }}">

		<!--Style css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/css/style.css') }}">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/toggle-menu/sidemenu.css') }}">
		<!-- Icon Picker -->
		<link rel="stylesheet" href="{{ asset('dashboard/dist/fontawesome-5.11.2/css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('dashboard/dist/iconpicker-1.5.0.css') }}" />

		<!--Chartist css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/chartist/chartist.css') }}">
		<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/chartist/chartist-plugin-tooltip.css') }}">
        <!-- fontawesome 5.3.1 --> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"/>
        {{-- <link rel="stylesheet" href="/IconPicker/dist/fontawesome-5.11.2/css/all.min.css"> --}}
        <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/icon-picker/fontawesome-iconpicker.min.css') }}">
        <!-- toaster plubin -->
        <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/toastr/build/toastr.css') }}"  >
		<!--Full calendar css-->
		<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/fullcalendar/stylesheet1.css') }}">
		<link rel="stylesheet" href="{{ asset('ar-font.css') }}">
        <!-- Ck Editor 4.14 -->
        <script src="https://cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
	</head>

                @include('admin.layout.nav')

                @include('admin.layout.sidbar')

                @yield('content')



				<footer class="main-footer">
					<div class="text-center">
						Copyright &copy; {{ date('Y') }} . Design By<a href="https://semicolon-solution.net/"> semicolon</a>
					</div>
				</footer>
                @yield('modal')
			</div>
		</div>

		<!--Jquery.min js-->
		{{-- <script src="{{ asset('dashboard/assets/js/jquery.min.js') }}"></script> --}}
        <script src="//code.jquery.com/jquery-2.2.1.min.js"></script>
		<!--popper js-->
		<script src="{{ asset('dashboard/assets/js/popper.js') }}"></script>

		<!--Tooltip js-->
		<script src="{{ asset('dashboard/assets/js/tooltip.js') }}"></script>

		<!--Bootstrap.min js-->
		<script src="{{ asset('dashboard/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="{{ asset('dashboard/assets/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>

		<!--Scroll-up-bar.min js-->
		<script src="{{ asset('dashboard/assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>

		<!--Sidemenu js-->
		<script src="{{ asset('dashboard/assets/plugins/toggle-menu/sidemenu.js') }}"></script>

		<!--Chart.min js-->
		<script src="{{ asset('dashboard/assets/js/chart.min.js') }}"></script>
		{{-- Icon Picker --}}
		<script src="{{ asset('dashboard/dist/iconpicker-1.5.0.js') }}"></script>
		{{-- <script src="{{ asset('dashboard/dist/iconpicker-1.5.0.json') }}"></script> --}}
		<!--Othercharts js-->
		<script src="{{ asset('dashboard/assets/plugins/othercharts/jquery.knob.js') }}"></script>
		<script src="{{ asset('dashboard/assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

		<!--Morris js-->
		<script src="{{ asset('dashboard/assets/plugins/morris/morris.min.js') }}"></script>
		<script src="{{ asset('dashboard/assets/plugins/morris/raphael.min.js') }}"></script>

		<!--mCustomScrollbar js-->
		<script src="{{ asset('dashboard/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

		<!--Min Calendar -->
		<script src="{{ asset('dashboard/assets/plugins/fullcalendar/calendar.min.js') }}"></script>

		<!--Scripts js-->
		<script src="{{ asset('dashboard/assets/js/apexcharts.js') }}"></script>
		<script src="{{ asset('dashboard/assets/js/scripts.js') }}"></script>
		<script src="{{ asset('dashboard/assets/js/dashboard.js') }}"></script>

		<!-- ECharts -->
		<script src="{{ asset('dashboard/assets/plugins/echarts/echarts.js') }}"></script>

		<!--OtherCharts js-->
		<script src="{{ asset('dashboard/assets/js/othercharts.js') }}"></script>
        <script src="{{ asset('dashboard/assets/plugins/toastr/toastr.js') }}"></script>

        @yield('script')

        @yield('editor')
	</body>
</html>
