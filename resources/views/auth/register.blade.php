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
                <a><img src="{{ asset('/images/logo-white.png') }} " alt=""></a>
            </div>
            <div id="login-form" class="lgn-form " autocomplete="off">
                <form class="form-vertical">
                    <div class="lgn-input form-group">
                        <div class="col-sm-12">
                            <input class="form-control" type="text" name="username" id="lgn-mail" placeholder="Enter your Username" required>
                        </div>
                    </div>
                     <div class="lgn-input form-group">
                        <div class="col-sm-12">
                            <input class="form-control phone" type="text" name="contact_no" id="lgn-mail" maxlength="12" placeholder="Enter your Phone No" required>
                        </div>
                    </div>
                    <div class="lgn-input form-group">
                        <div class="col-sm-12">
                            <input class="form-control" type="email" name="email" id="lgn-mail" placeholder="Enter your email" required>
                        </div>
                    </div>
                    <div class="lgn-input form-group">
                        <div class="col-sm-12">
                            <input type="password" name="password" id="lgn-pass" class="form-control" placeholder="Enter your Password" required>
                        </div>  
                    </div>
                    <div class="lgn-forgot">
                        <div class="checkbox pb-2">
                            <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                                <input type="checkbox" name="contractor" class="custom-control-input" id="customCheck3">
                                <label class="custom-control-label" for="customCheck3" style="color: #fff;">Contractor</label>
                             
                            </div>
                              <div class="custom-control custom-checkbox custom-checkbox-1 mb-3">
                              
                                <input type="checkbox" name="supplier" class="custom-control-input" id="customCheck3">
                                 <label class="custom-control-label" for="customCheck3" style="color: #fff;">Supplier</label>
                            </div>
                          
                        </div>
                    </div>
                    <div class="lgn-submit">
                        <button type="submit" id="lgn-submit" class="btn btn-primary btn-pill btn-lg">Register</button>
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
    <!-- Mask Plugin -->
    <script type="text/javascript" src="{{ asset('assets/plugin/mask/jquery.mask.min.js') }}"></script>
    <!-- Custom Script Plugin -->
    <script type="text/javascript" src="{{ asset('dist/js/custom.js') }}"></script>
    <script>
        //Form Masking
        $('.phone').mask('0000-0000000');
        
    </script>
</body>
</html>


