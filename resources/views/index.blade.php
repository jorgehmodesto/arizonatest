<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('plugins/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet" type='text/css'>

    <link href="{{ asset('plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type='text/css'>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type='text/css'>

    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type='text/css'>

</head>
<body>

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, Arizona!</h1>
            <p>Did you know all countries have an unified internet code? Click on the following button to take a look!</p>
            <p><a class="mg-tp btn btn-primary btn-lg" href="javascript:loadContainerContent()" role="button">Show it!</a></p>
        </div>
    </div>

    <div class="container">
        <div class="content" id="containerContent"></div>
    </div>

    <footer>
        <p>Copyright &copy; 2018 Jorge Modesto <b>(Developer SKills Test)</b>. All rights reserved.</p>
    </footer>

    <script type="text/javascript" src="{{ asset('plugins/jquery/dist/jquery.js') }}"></script>

    <script type="text/javascript" src="{{ asset('plugins/datatables.net/js/jquery.dataTables.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/functions.js') }}"></script>

</body>
</html>