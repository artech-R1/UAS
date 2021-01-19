<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Register</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url('public')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('public')}}/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-transparent mb-0">
                        <h5 class="text-center">Please <span class="font-weight-bold text-primary">Registrasi</span></h5>
                    </div>
                    <div class="card-body">
                        <form action="{{url('register')}}" method="post">
                            @csrf
                            <h3 class="text-center title-login">Registrasi</h3>
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>

                            <div class="form-group">
                                <input type="submit" name="" class="btn btn-primary btn-block">
                            </div>
                            <div class="text-center forget">
                                <p>Back To <a href="{{url('login')}}">Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>