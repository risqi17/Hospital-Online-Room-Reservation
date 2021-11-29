<!DOCTYPE html>
<!-- 
Template Name: Griffin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework
Support: support@hencework.com

License: You must have a valid license purchased only from templatemonster to legally use the template for your project.
-->
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Rumah Sakit Semen Gresik</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="{{ asset('dist/img/rssg.jpg') }}" type="image/x-icon">
    
    <!-- Custom CSS -->
    <link href="{{ asset('dist/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="loader-pendulums"></div>
    </div>
    <!-- /Preloader -->
   
	<!-- HK Wrapper -->
	<div class="hk-wrapper">

        <!-- Main Content -->
        <div class="hk-pg-wrapper hk-auth-wrapper">
            <header class="d-flex justify-content-between align-items-center">
                <a class="d-flex auth-brand" href="#">
                    <img class="brand-img" src="{{ asset('/dist/img/logo-dark.png') }}" alt="brand" />
                </a>
                <div class="btn-group btn-group-sm">
                    
                </div>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-5 pa-0">
                        <div id="owl_demo_1" class="owl-carousel dots-on-item owl-theme">
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{ asset('/dist/img/bg.png') }});">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">Rumah Sakit Semen Gresik</h1>
                                        <p class="text-white">Alamat Rumah Sakit : Jl. R.A. Kartini No. 280, Gresik, Jawa Timur 61122. No Telp (031) 3987840-41.</p>
                                    </div>
                                </div>
                                <div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                            <div class="fadeOut item auth-cover-img overlay-wrap" style="background-image:url({{ asset('/dist/img/bg.png') }});">
                                <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                                    <div class="auth-cover-content text-center w-xxl-75 w-sm-90 w-xs-100">
                                        <h1 class="display-3 text-white mb-20">Rumah Sakit Semen Gresik</h1>
                                        <p class="text-white">Alamat Rumah Sakit : Jl. R.A. Kartini No. 280, Gresik, Jawa Timur 61122. No Telp (031) 3987840-41.</p>
                                    </div>
                                </div>
								<div class="bg-overlay bg-trans-dark-50"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 pa-0">
                        <div class="auth-form-wrap py-xl-0 py-50">
                            <div class="auth-form w-xxl-55 w-xl-75 w-sm-90 w-xs-100">
                                {{-- <form action="{{ url('auth/dologin') }}" method="POST">
                                    @csrf --}}
                                    <h1 class="display-4 mb-10">Selamat Datang :)</h1>
                                    <p class="mb-30">Masuk untuk melihat kamar yang sedang digunakan.</p>
                                    <div id="error"></div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" id="username" type="text">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Password" name="password" id="password" type="password">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-25">
                                        
                                    </div>
                                    <button class="btn btn-primary btn-block" id="login">Login</button>
                                    <p class="font-14 text-center mt-15">Anda tidak bisa masuk ?</p>
                                    <div class="option-sep">Halaman Login</div>
                                    
                                    
                                {{-- </form> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Content -->

    </div>
	<!-- /HK Wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendors/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{ asset('dist/js/jquery.slimscroll.js') }}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{ asset('dist/js/dropdown-bootstrap-extended.js') }}"></script>

    <!-- Owl JavaScript -->
    <script src="{{ asset('vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>

    <!-- FeatherIcons JavaScript -->
    <script src="{{ asset('dist/js/feather.min.js') }}"></script>

    <!-- Init JavaScript -->
    <script src="{{ asset('dist/js/init.js') }}"></script>
    <script src="{{ asset('dist/js/login-data.js') }}"></script>

    <script>
        $(document).on("click", "#login" , function() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            console.log("submit");
            var usr = $('#username').val();
            var pass = $('#password').val();

            if(usr == '' || pass == ''){
                $("#error").html('');
                var error = "<p style='color: red; text-align: center;'>Form masih Kosong.</p>";
                $("#error").html(error);
            }else{
                $("#error").html('');
                $.ajax({
                    url: '/auth/check/'+usr+'/'+pass,
                    type: 'get',
                    dataType: 'json',
                    success: function(response){
                        if(response['status'] != null){
                                    var len = response['status'].length;
                                    var st = response['status'];
                                    console.log(response['status']);

                                    if(st == "berhasil"){
                                        $.ajax({
                                            url: '/auth/dologin',
                                            type: 'post',
                                            data: {_token: CSRF_TOKEN,username: usr, password: pass},
                                            success: function(response){
                                                console.log('kesimpen dong');
                                                window.location.replace("/");
                                            }
                                        });
                                    } else {
                                        
                                        var error = "<p style='color: red; text-align: center;'>Akun yang dimaksud tidak ditemukan..</p>";
                                        $("#error").html(error);
                                    }
                                }
                            }
                    });
            }

            
        });
    </script>
</body>

</html>