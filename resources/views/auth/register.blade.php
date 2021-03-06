

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Naschool E-learning platform</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/morrisjs/morris.css') }}">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/scrollbar/jquery.mCustomScrollbar.min.css') }}">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/metisMenu/metisMenu-vertical.css') }}">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/calendar/fullcalendar.print.min.css') }}">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/form/all-type-forms.css') }}">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>
</head>

<body>

@if (isset($errors) && count($errors))
There were {{count($errors->all())}} Error(s)
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }} </li>
@endforeach 
</ul>
@endif

<div class="error-pagewrap">
<div class="error-page-int">
<div class="text-center m-b-md custom-login">
    <h3>NASCHOOL register</h3>
    <p>This is the best app ever!</p>
</div>
<div class="content-error">
    <div class="hpanel">
        <div class="panel-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            
<div class="row">
        <div class="form-group col-lg-12">
            <label>{{ __('Nom') }}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        </div>
        <div class="form-group col-lg-12">
            <label>{{ __('Prénoms') }}</label>
            <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
        </div>
        <div class="form-group-inner">
    <div class="row">
     <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
    <label class="login2 pull-right pull-right-pro">{{ __('Role') }}</label>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
    <div class="form-select-list">
    <select class="form-control custom-select-value" name="role">
            <option value="Admin">Administrateur</option>
        </select>
    </div>
    </div>
    </div>
    </div>
                                <div class="form-group-inner">
<div class="row">
<div class="col-lg-2 col-md-3 col-sm-3 col-xs-12">
<label class="login2 pull-right pull-right-pro">Ecole</label>
</div>
<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
<div class="form-select-list">
<select class="form-control custom-select-value" name="structures_id">
    <option value="1">EAD</option>
    <option value="2">EAD 1</option>
</select>
</div>
</div>
</div>
</div>
            <div class="form-group col-lg-6">
                <label>{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            </div>
            <div class="form-group col-lg-6">
                <label>{{ __('Répéter password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
            <div class="form-group col-lg-6">
                <label>Email Address</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            </div>
            <div class="form-group col-lg-6">
                <label>{{ __('Adresse') }}</label>
                <input type="text" class="form-control" name="adresse">
            </div>
            <div class="form-group col-lg-6">
                <label>{{ __('Contact') }}</label>
                <input type="text" class="form-control" name="tel">
            </div>
            
        </div>


    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('Créer le compte') }}
            </button>
        </div>
    </div>
</form>
 </div>
            </div>
        </div>
    <div class="text-center login-footer">
            <p>Copyright © E-learning 2020. All rights reserved. By <a href="tinda.cg">SFARIT</a></p>
        </div>
    </div>   
</div>
    <!-- jquery
        ============================================ -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{ asset('js/jquery-price-slider.js') }}"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{ asset('js/jquery.meanmenu.js') }}"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- tab JS
        ============================================ -->
    <script src="{{ asset('js/tab.js') }}"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="{{ asset('js/icheck/icheck.min.js') }}"></script>
    <script src="{{ asset('js/icheck/icheck-active.js') }}"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="{{ asset('js/tawk-chat.js') }}"></script>
</body>

</html>





