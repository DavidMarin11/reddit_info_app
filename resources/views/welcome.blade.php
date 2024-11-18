<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reddit</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/loading.css') }}">
        <link href="{{asset('css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
        <script src="{{asset('js/jquery/jquery-3.7.1.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </head>
    <body id="div_body">
        <div class="loading ocultar" id="loading" style="display: none">Loading&#8230;</div>

        @include('layout.navbar')

        @yield('content')
        
        @yield('scripts')

        <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

        <script>
            $(document).ajaxStart(function() {
                $('#loading').show();
            });

            $(document).ajaxStop(function() {
               $('#loading').hide();
            });
        </script>
    </body>
</html>
