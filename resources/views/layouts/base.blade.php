<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

    @hasSection('title')
        <title>@yield('title') - {{ config('app.name') }}</title>
    @else
        <title>{{ config('app.name') }}</title>
    @endif
    <title>{{ $title }}</title>

    <link rel="apple-touch-icon" href="{{ asset('app-assets/images/logo/logo1.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('app-assets/images/logo/logo1.png') }}">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/vendors.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/components.css') }}">
    <!-- END: Theme CSS-->
    <link rel="stylesheet" href="{{ asset('app-assets/plugins/font-awesome-4.7.0/css/font-awesome.css') }}" />
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/css/core/colors/palette-gradient.css') }}">
    {{-- datatables --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
    {{-- toastr --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/extensions/toastr.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('app-assets/plugins/summernote/summernote-bs4.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="{{ asset('app-assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    {{-- select2 --}}
    <link rel="stylesheet" href="{{ asset('app-assets/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('app-assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <!-- Dropify -->
    <link rel="stylesheet" href="{{ asset('app-assets/plugins/dropify/dist/css/dropify.min.css') }}">
    {{-- gijgo datepicker --}}
    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/vendors/css/pickers/daterange/daterangepicker.css') }}">

    <link rel="stylesheet"
        href="{{ asset('app-assets/plugins/datetimepicker/css/bootstrap-material-datetimepicker.css') }}" />

    <link rel="stylesheet" type="text/css"
        href="{{ asset('app-assets/plugins/tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.css') }}">

    {{-- Icon --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/fonts/simple-line-icons/style.min.css') }}">
    {{-- Icon --}}

    @routes


    <script>
        window.Laravel = {!! json_encode([
    'user' => Auth::user(),
    'pusher' => [
        'key' => config('broadcasting.connections.pusher.key'),
        'cluster' => config('broadcasting.connections.pusher.options.cluster'),
    ],
]) !!};
    </script>
</head>

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu"
    data-color="bg-gradient-x-purple-blue" data-col="2-columns">

    @include('layouts/_partials/header')
    @include('layouts/_partials/sidebar')

    @yield('content')

    @include('layouts/_partials/footer')

    {{-- <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/charts/chartist.min.js" type="text/javascript"></script>
    <script src="app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset('app-assets/js/scripts/pages/dashboard-analytics.js') }}" type="text/javascript"></script>
    <!-- END: Page JS--> --}}

    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="{{ asset('app-assets/vendors/js/vendors.min.js') }}" type="text/javascript"></script>

    <script type="text/javascript" src="{{ asset('app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>

    <script src="{{ asset('app-assets/js/core/app-menu.js') }}" type="text/javascript"></script>
    <script src="{{ asset('app-assets/js/core/app.js') }}" type="text/javascript"></script>

    {{-- datatables --}}
    <script src="{{ asset('app-assets/vendors/js/tables/datatable/datatables.min.js') }}" type="text/javascript">
    </script>
    {{-- sweet alert --}}
    <script src="{{ asset('app-assets/plugins/sweetalert2/dist/sweetalert2.all.min.js') }}" type="text/javascript">
    </script>
    {{-- toastr --}}
    <script src="{{ asset('app-assets/vendors/js/extensions/toastr.min.js') }}" type="text/javascript"></script>
    {{-- gijgo datepicker --}}
    <script src="{{ asset('app-assets/plugins/gijgo/js/gijgo.min.js') }}" type="text/javascript"></script>
    {{-- dropify --}}
    <script src="{{ asset('app-assets/plugins/dropify/dist/js/dropify.min.js') }}"></script>
    {{-- summernote --}}
    <script src="{{ asset('app-assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('app-assets/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/dateTime/moment-with-locales.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('app-assets/vendors/js/pickers/daterange/daterangepicker.js') }}" type="text/javascript">
    </script>
    <script src="{{ asset('app-assets/plugins/datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

    <script src="{{ asset('app-assets/plugins/jquery-invoice/jquery.invoice.js') }}"></script>

    <script src="{{ asset('app-assets/plugins/tempusdominus-bootstrap-4/build/js/tempusdominus-bootstrap-4.min.js') }}"
        type="text/javascript"></script>

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    {{-- ini nanti hapus --}}
    {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 
     <link href="{{ asset('app-assets/plugins/timepicker/bootstrap-datetimepicker.min.css')}}" rel="stylesheet">
     <script src="{{ asset('app-assets/plugins/timepicker/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script> --}}

    <script>
        $('#time').datetimepicker({
            format: 'hh:mm:ss'
        });
    </script>
    {{-- ini nanti hapus --}}
    <script>
        $(document).ready(function() {


            $(".hd-logo").click(function() {
                $('.brand-text').toggle();
            })
            $('.datatable').DataTable();

            $(".select2").select2();

            $('.dropify').dropify();

            $('.textarea').summernote({
                dialogsInBody: true,
                minHeight: 250,
            });

            $('.time-picker').bootstrapMaterialDatePicker({
                date: false,
                shortTime: false,
                format: 'HH:mm'
            });

        });
        //  $('#import-absent').on('change', function() {
        //      $('#button-addon2').removeAttr('disabled');
        //  });
    </script>

    @yield('script')

    @stack('js')
</body>

</html>
