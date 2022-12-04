@extends('../layout/base')

@section('body')
<body class="py-5 md:py-0 bg-black/[0.15] dark:bg-transparent">
    @yield('content')
    @include('../layout/components/dark-mode-switcher')
    @include('../layout/components/main-color-switcher')

    <!-- BEGIN: JS Assets-->
    <!-- ✅ Load CSS file for DataTables  -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script
        src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=[" your-google-map-api"]&libraries=places"></script>

    @vite('resources/js/app.js')
    <!-- END: JS Assets-->
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('ckfinder/ckfinder.js')}}"></script>
    @yield('script')

</body>
@endsection