<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
        content="Chameleon Admin is a modern Bootstrap 4 webapp &amp; admin dashboard html template with a large number of components, elegant design, clean and organized code.">
    <meta name="keywords"
        content="admin template, Chameleon admin template, dashboard template, gradient admin template, responsive admin template, webapp, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Halaman Daftar - Dosel PNS</title>
    <link rel="apple-touch-icon" href="app-assets/images/logo/logo1.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/logo/logo1.png">
    <link
        href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700"
        rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/login-register.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image blank-page blank-page" data-open="click"
    data-menu="vertical-menu" data-color="bg-gradient-x-purple-blue" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-wrapper-before"></div>
            <div class="content-header row">
                {{ __('Register') }}
            </div>
            <div class="content-body">
                <section class="flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-6 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="text-center mb-1">
                                        <img src="app-assets/images/logo/logo1.png" width="50%"
                                            alt="logo vijaya kusuma">
                                    </div>
                                    <div class="font-large-1  text-center">
                                        Daftar Akun Dosel PNS
                                    </div>
                                </div>
                                <div class="card-content">

                                    <div class="card-body">
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control round" id="user-name"
                                                    placeholder="Masukan Username" required>
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <div class="form-control-position">
                                                    <i class="ft-user"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="email" class="form-control round" id="user-email"
                                                    placeholder="Masukan Alamat Email" required>
                                                <div class="form-control-position">
                                                    <i class="ft-mail"></i>
                                                </div>
                                            </fieldset>
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control round" id="user-password"
                                                    placeholder="Masukan Password" required>
                                                <div class="form-control-position">
                                                    <i class="ft-lock"></i>
                                                </div>
                                            </fieldset>

                                            <div class="form-group text-center">
                                                <button type="submit"
                                                    class="btn round btn-block btn-glow btn-bg-gradient-x-purple-blue col-12 mr-1 mb-1">Daftar</button>
                                            </div>

                                        </form>
                                    </div>

                                    <p class="card-subtitle text-muted text-right font-small-3 mx-2 my-1">
                                        <span>Sudah Memiliki Akun ?
                                            <a href="/login" class="card-link">Login Sekarang</a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js" type="text/javascript"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js" type="text/javascript"></script>
    <script src="app-assets/js/core/app.js" type="text/javascript"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="app-assets/js/scripts/forms/form-login-register.js" type="text/javascript"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>
