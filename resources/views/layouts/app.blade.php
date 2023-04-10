<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        {{--<title>{{ config('app.name', 'Laravel') }}</title>--}}
        <title>Loja Online - @yield('title')</title>

        <link href="{!! asset('css/bootstrap.min.css') !!}" rel="stylesheet">
        <link href="{!! asset('font-awesome/css/font-awesome.css') !!}" rel="stylesheet">

        <!-- Toastr style -->
        <link href="{!! asset('css/plugins/toastr/toastr.min.css') !!}" rel="stylesheet">

        <!-- Gritter -->
        <link href="{!! asset('js/plugins/gritter/jquery.gritter.css') !!}" rel="stylesheet">

        <link href="{!! asset('css/animate.css') !!}" rel="stylesheet">
        <link href="{!! asset('css/style.css') !!}" rel="stylesheet">

        {{--CSS customizado--}}
        <link href="{!! asset('css/custom_css.css') !!}" rel="stylesheet">

        {{--Sweet alert--}}
        <link href="{!! asset('css/plugins/sweetalert/sweetalert.css') !!}" rel="stylesheet">

        @section('styles')
        @show
    </head>
    <body>

        <div id="wrapper">
            @include('layouts.navigation')
            <div id="page-wrapper" class="gray-bg">
                @include('layouts.topnavbar')
                
                @yield('content')
                
                @include('layouts.footer')
            </div>
        </div>

        <!-- Mainly scripts -->
        <script src="{!! asset('js/jquery-3.1.1.min.js') !!}"></script>
        <script src="{!! asset('js/popper.min.js') !!}"></script>
        <script src="{!! asset('js/bootstrap.js') !!}"></script>
        <script src="{!! asset('js/plugins/metisMenu/jquery.metisMenu.js') !!}"></script>
        <script src="{!! asset('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}"></script>

        <!-- Peity -->
        <script src="{!! asset('js/plugins/peity/jquery.peity.min.js') !!}"></script>
        <script src="{!! asset('js/demo/peity-demo.js') !!}"></script>

        <!-- Custom and plugin javascript -->
        <script src="{!! asset('js/inspinia.js') !!}"></script>
        <script src="{!! asset('js/plugins/pace/pace.min.js') !!}"></script>

        {{--Sweet alert--}}
        <script src="{!! asset('js/plugins/sweetalert/sweetalert.min.js') !!}"></script>

        @section('scripts')
        @show


    </body>
</html>
