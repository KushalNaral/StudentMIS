<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>INTERN</title>
    <link rel="shortcut icon" href="{{ asset('design/favicon/favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('design/css/style.css') }}">
    <style>
        ul {
            list-style-type: none;
        }
        li.page-item {
            padding: 0px 10px;
        }
        .custom-flex {
            width: 100%;
            display: flex;
            justify-content: end;
        }
        .custom-red{
            color: red;
        }
    </style>
</head>
<body>
<div id="app">
    {{--    <Home></Home>--}}

    @include('layouts.header')
    @yield('content')
</div>
<script src="{{ asset('custom/app.js') }}"></script>
</body>

</html>
