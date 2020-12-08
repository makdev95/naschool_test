<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Theta is a premium responsive admin dashboard template with great features.">
    <meta name="keywords" content="responsive, admin template, dashboard template, bootstrap 4, laravel, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
    <meta name="author" content="Themesbox">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="3Cs4FYwJjmUQsUbHi4zVDh1ZZECjOwbi6t6KcAsp">
    <title>Lona</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="https://lona-congo.com/assets/images/favicon.ico">
    <!-- Start CSS -->
    <link href="https://lona-congo.com/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://lona-congo.com/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="https://lona-congo.com/assets/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="https://lona-congo.com/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End CSS -->
</head>
<body class="vertical-layout">
    <!-- Start Containerbar -->
    <div id="containerbar" class="containerbar authenticate-bg">
        <!-- Start Container -->
        <div class="container">
            <div class="auth-box login-box">
                <!-- Start row -->
                <div class="row no-gutters align-items-center justify-content-center">
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <div class="auth-box-left">
                            <div class="card">
                                <div class="card-body">
                                    <h4></h4>
                                    <div class="auth-box-icon">
                                        <img src="{{ asset('img/lona.png')}}" class="img-fluid" alt="auth-box-icon">
                                    </div>
                                    <div class="auth-box-logo">
                                       <h1></h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Start end -->
                    <!-- Start col -->
                    <div class="col-md-6 col-lg-5">
                        <!-- Start Auth Box -->
                        <div class="auth-box-right">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="text-primary mb-4">Connexion</h3>
                                    <form method="POST" action="https://lona-congo.com/login">
                                        <input type="hidden" name="_token" value="3Cs4FYwJjmUQsUbHi4zVDh1ZZECjOwbi6t6KcAsp">                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control " id="username" value="" required autocomplete="email" autofocus placeholder="Entrez votre Compte" required>
                                                                                    </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control " id="password" placeholder="Entrez Votre Mot de Passe" required>
                                                                                    </div>
                                        <div class="form-row mb-3">
                                            <div class="col-sm-6">
                                                <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label font-14" for="rememberme">Se souvenir de moi</label>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                              <div class="forgot-psw">
                                                <a id="forgot-psw" href="https://lona-congo.com/user-forgotpsw" class="font-14">Mot de passe Oublié?</a>
                                              </div>
                                            </div>
                                        </div>
                                      <button type="submit" class="btn btn-success btn-lg btn-block font-18">Se Connecter</button>
                                    </form>

                                    <p class="mb-0 mt-3">Vous n'avez pas de compte? <a href="https://lona-congo.com/typecomptes">Creer</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Auth Box -->
                    </div>
                    <!-- End col -->
                </div>
                <!-- End row -->
            </div>
        </div>
        <!-- End Container -->
    </div>
    <!-- End Containerbar -->
    <!-- Start JS -->
    <script src="https://lona-congo.com/assets/js/jquery.min.js"></script>
    <script src="https://lona-congo.com/assets/js/popper.min.js"></script>
    <script src="https://lona-congo.com/assets/js/bootstrap.min.js"></script>
    <script src="https://lona-congo.com/assets/js/modernizr.min.js"></script>
    <script src="https://lona-congo.com/assets/js/detect.js"></script>
    <script src="https://lona-congo.com/assets/js/jquery.slimscroll.js"></script>
    <!-- End js -->
</body>
</html>









