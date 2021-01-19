<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>TOLEKTRO</title>
    <!-- Bootstrap core CSS -->
    <link href="{{url('public')}}/assets/css/bootstrap.css" rel="stylesheet">
    <!-- Fontawesome core CSS -->
    <link href="{{url('public')}}/assets/css/font-awesome.min.css" rel="stylesheet" />
    <!--GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!--Slide Show Css -->
    <link href="{{url('public')}}/assets/ItemSlider/css/main-style.css" rel="stylesheet" />
    <!-- custom CSS here -->
    <link href="{{url('public')}}/assets/css/style.css" rel="stylesheet" />
</head>

<body>
@include('template.sectionUser.header')

@yield('content')
   
    
@include('template.sectionUser.footer')

    <!--Core JavaScript file  -->
    <script src="{{url('public')}}/assets/js/jquery-1.10.2.js"></script>
    <!--bootstrap JavaScript file  -->
    <script src="{{url('public')}}/assets/js/bootstrap.js"></script>
    <!--Slider JavaScript file  -->
    <script src="{{url('public')}}/assets/ItemSlider/js/modernizr.custom.63321.js"></script>
    <script src="{{url('public')}}/assets/ItemSlider/js/jquery.catslider.js"></script>
    <script>
        $(function() {

            $('#mi-slider').catslider();

        });
    </script>
</body>

</html>