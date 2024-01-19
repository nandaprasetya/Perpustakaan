<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="source/logoperpus.png" type="image/x-icon">
    <link rel="stylesheet" href="css/editable.css">
    <script src="plugins/jquery.js"></script>
    <link rel="stylesheet" href="plugins/bootstrap.min.css">
    <script src="plugins/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{asset('plugins/adminlte.css')}}">
    <script src="{{asset('plugins/adminlte.js')}}"></script>
    <link rel="stylesheet" href="{{asset('plugins/datatables.css')}}">
    <script src="{{asset('plugins/datatables.js')}}"></script>
    <link rel="stylesheet" href="{{asset('plugins/all.min.css')}}">
</head>
<body>
    @yield('content')
</body>
</html>