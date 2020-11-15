<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from pepdev.com/template/apez/admin/login-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Nov 2020 22:01:14 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SC | Login</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }} " />
</head>
<body>

    <!-- Page Wrapper -->
    <div class="lgn-background" style="background-image: url('{{asset('images/slider-law-1.jpg') }}');" >
        <div class="lgn-wrapper">
            <div class="lgn-logo text-center">
                <a><img src="{{ asset('images/logo-white.png') }}" alt=""></a>
            </div>
            <div id="login-form" class="lgn-form ">
                <form class="form-vertical" autocomplete="off">
                    <div class="lgn-input form-group" >
                        <div class="col-sm-12">
                            <input class="form-control" type="email" name="email" id="lgn-mail" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="lgn-input form-group">
                        <div class="col-sm-12">
                            <input type="password" name="password" id="lgn-pass" class="form-control" placeholder="Password" required>
                        </div>  
                    </div>
                    <div class="lgn-forgot">
                        <p><strong>if you don't have an account yet!<br> <a href="{{ route('register') }}">Click here to register.</a>
                    </div>
                    <div class="lgn-submit">
                        <button type="submit" id="lgn-submit" class="btn btn-primary btn-pill btn-lg" name="login">Login</button>
                    </div>
                </form>
            </div> 
        </div>
    </div>

    <!-- Include js files -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="{{ asset('assets/plugin/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- Popper Plugin -->
    <script type="text/javascript" src="{{ asset('assets/plugin/popper/popper.min.js') }}"></script>
    <!-- Bootstrap Framework -->
    <script type="text/javascript" src="{{ asset('assets/plugin/bootstrap/bootstrap.min.js') }} "></script>
</body>
</html>


