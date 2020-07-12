<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Creative Information Technology</title>

    <!-- favicon -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/')}}assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/')}}assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/')}}assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{asset('/')}}assets/favicon/site.webmanifest">


    <!-- google fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

    <!-- CSS files -->

    <link href="{{asset('/')}}assets/css/magnific-popup.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/owl.carousel.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/owl.carousel.theme.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/ionicons.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets/css/main.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

{{--start header  --}}
@include('client.header.header')
{{--end header  --}}

@yield('home-content')


{{-- footer start --}}
@include('client.footer.footer')
{{-- end footer --}}

{{-- script --}}
<script src="{{asset('/')}}assets/js/jquery-1.12.3.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}assets/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}assets/js/script.js"></script>

</body>
</html>
