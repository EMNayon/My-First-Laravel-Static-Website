<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset( 'css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset( 'css/custom.css' ) }}">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
@include('layout.menu')    

@yield('content')


@include('layout.footer')
<script src="{{ asset( 'js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset( 'js/custom.js') }}"></script>

</body>
</html>