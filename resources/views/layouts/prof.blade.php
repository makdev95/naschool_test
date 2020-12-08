<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Naschool @foreach($ProfesseurClasse as $prof){{ $prof->struct_name }}@endforeach-Espace Elearning</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
                ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
                ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
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
    <!-- meanmenu icon CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/meanmenu.min.css') }}">
    <!-- main CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- educate icon CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/educate-custon-icon.css') }}">
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
    <!-- dropzone CSS
                ============================================ -->
    <link rel="stylesheet" href="{{ asset('css/dropzone/dropzone.css') }}">
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

<body id="darkmode">
    <!--[if lt IE 8]>
                <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{route('Teacher.index')}}"><img class="main-logo" src="{{ asset('img/logo/logo.png') }}" alt="" /></a>
                <strong><a href="index.html"><img src="" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                       
                        <li>
                            <a class="has-arrow"  href="{{ route('Professeur.cours') }}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Mes cours</span></a>
                        </li>
                        <li>
                            <a class="has-arrow"  href="{{ route('matiere-voir') }}" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Matières</span></a>
                        </li>
                        <li>
                            <a class="has-arrow"  href="{{ route('Professeur.examens') }}" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Examens</span></a>
                        </li>
                        <li>
                            <a class="has-arrow"  href="{{ route('Professeur.mestudiant') }}" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Mes etudiants</span></a>
                        </li>
                         <li>
                            <a class="has-arrow"  href="" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">Chat</span></a>
                        </li>
                        

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-top-wraper">
<div class="row">
<div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
<div class="menu-switcher-pro">
<button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
<i class="educate-icon educate-nav"></i>
</button>
</div>
</div>
<div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
<div class="header-top-menu tabl-d-n">
<ul class="nav navbar-nav mai-top-nav">
<li class="nav-item"><a href="#" class="nav-link">Espace professeur/Formateur</a>
</li>

<li class="nav-item dropdown res-dis-nn">
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><span class="angle-down-topmenu">Classes <i class="fa fa-angle-down"></i></span></a>
<div role="menu" class="dropdown-menu animated zoomIn">
@foreach($ProfesseurClasse as $prof)
<a href="#">{{ $prof->classes_name }}</a>
@endforeach 
</div>
</li>
<li class="nav-item"><a href="#" class="nav-link">Aide</a>
</li>
</ul>
</div>
</div>
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
<div class="header-right-info">
<ul class="nav navbar-nav mai-top-nav header-right-menu">
<li class="nav-item dropdown">
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-message edu-chat-pro" aria-hidden="true"></i><span class="indicator-ms"></span></a>
<div role="menu" class="author-message-top dropdown-menu animated zoomIn">
<div class="message-single-top">
<h1>Message</h1>
</div>
<ul class="message-menu">
<li>
<a href="#">
<div class="message-img">
<img src="img/contact/1.jpg" alt="">
</div>
<div class="message-content">
<span class="message-date">16 Sept</span>
<h2>Advanda Cro</h2>
<p>Please done this project as soon possible.</p>
</div>
</a>
</li>
<li>
<a href="#">
<div class="message-img">
<img src="img/contact/4.jpg" alt="">
</div>
<div class="message-content">
<span class="message-date">16 Sept</span>
<h2>Sulaiman din</h2>
<p>Please done this project as soon possible.</p>
</div>
</a>
</li>
<li>
<a href="#">
<div class="message-img">
<img src="img/contact/3.jpg" alt="">
</div>
<div class="message-content">
<span class="message-date">16 Sept</span>
<h2>Victor Jara</h2>
<p>Please done this project as soon possible.</p>
</div>
</a>
</li>
<li>
<a href="#">
<div class="message-img">
<img src="img/contact/2.jpg" alt="">
</div>
<div class="message-content">
<span class="message-date">16 Sept</span>
<h2>Victor Jara</h2>
<p>Please done this project as soon possible.</p>
</div>
</a>
</li>
</ul>
<div class="message-view">
<a href="#">View All Messages</a>
</div>
</div>
</li>
<li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
<div role="menu" class="notification-author dropdown-menu animated zoomIn">
<div class="notification-single-top">
<h1>Notifications</h1>
</div>
<ul class="notification-menu">
<li>
<a href="#">
<div class="notification-icon">
<i class="educate-icon educate-checked edu-checked-pro admin-check-pro" aria-hidden="true"></i>
</div>
<div class="notification-content">
<span class="notification-date">16 Sept</span>
<h2>Advanda Cro</h2>
<p>Please done this project as soon possible.</p>
</div>
</a>
</li>
<li>
<a href="#">
<div class="notification-icon">
<i class="fa fa-cloud edu-cloud-computing-down" aria-hidden="true"></i>
</div>
<div class="notification-content">
<span class="notification-date">16 Sept</span>
<h2>Sulaiman din</h2>
<p>Please done this project as soon possible.</p>
</div>
</a>
</li>
<li>
<a href="#">
<div class="notification-icon">
<i class="fa fa-eraser edu-shield" aria-hidden="true"></i>
</div>
<div class="notification-content">
<span class="notification-date">16 Sept</span>
<h2>Victor Jara</h2>
<p>Please done this project as soon possible.</p>
</div>
</a>
</li>
<li>
<a href="#">
<div class="notification-icon">
<i class="fa fa-line-chart edu-analytics-arrow" aria-hidden="true"></i>
</div>
<div class="notification-content">
<span class="notification-date">16 Sept</span>
<h2>Victor Jara</h2>
<p>Please done this project as soon possible.</p>
</div>
</a>
</li>
</ul>
<div class="notification-view">
<a href="#">View All Notification</a>
</div>
</div>
</li>
<li class="nav-item">
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
<img src="img/product/pro4.jpg" alt="" />
<span class="admin-name">Professeur {{ Auth::user()->name }}</span> 
<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
</a>
<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
<li><a href="#"><span class="edu-icon edu-home-admin author-log-ic"></span>Mon compte</a>
</li>

</li>
<li>@foreach($ProfesseurClasse as $prof)<a href="#"><span class="edu-icon edu-settings author-log-ic"></span>Ecole: {{ $prof->struct_name }} </a>
    @endforeach
</li>
<li><a class="dropdown-item" href="{{ route('logout') }}"
   onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">
   <span class="edu-icon edu-locked author-log-ic"></span> {{ __('Déconnexion') }}
</a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</li>
</ul>
</li>
<li class="nav-item nav-setting-open"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-menu"></i></a>

<div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
<ul class="nav nav-tabs custon-set-tab">
<li class="active"><a data-toggle="tab" href="#Notes">Classes</a>
</li>
<li><a data-toggle="tab" href="#Projects">Cours</a>
</li>
<li><a data-toggle="tab" href="#Settings">Paramètre</a>
</li>
</ul>

<div class="tab-content custom-bdr-nt">
<div id="Notes" class="tab-pane fade in active">
<div class="notes-area-wrap">
<div class="note-heading-indicate">
</div>
<div class="notes-list-area notes-menu-scrollbar">
<ul class="notes-menu-list">
@foreach($ProfesseurClasse as $prof)
<li>
<a href="#">
<div class="notes-list-flow">
<div class="notes-content">
<p> {{ $prof->classes_name }}</p>
</div>
</div>
</a>
</li>
@endforeach
<div class="checkbox-setting-pro">
<div class="checkbox-title-pro">

</div>
</div>
</ul>
</div>
</div>
</div>
<div id="Projects" class="tab-pane fade">
<div class="projects-settings-wrap">
<div class="note-heading-indicate">
</div>
<div class="project-st-list-area project-st-menu-scrollbar">
<ul class="projects-st-menu-list">

<li>
<a href="#">
<div class="project-list-flow">
<div class="projects-st-heading">
<h2></h2>

</div>
<div class="projects-st-content">
<p>Completion with: 28%</p>
<div class="progress progress-mini">
<div style="width: 28%;" class="progress-bar progress-bar-danger hd-tp-1"></div>
</div>
</div>
</div>
</a>

</li>

</ul>
</div>
</div>
</div>
<div id="Settings" class="tab-pane fade">
<div class="setting-panel-area">
<div class="note-heading-indicate">
<h2><i class="fa fa-gears"></i></h2>
<p> </p>
</div><br>
<ul class="setting-panel-list">
<li>
<button class="btn btn-default" onClick="myFunction()">Dark classe</button>
</li>
</ul>

</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="mobile-menu">
<nav id="dropdown">
<ul class="mobile-menu-nav">

<li><a data-toggle="collapse" data-target="#demoevent" href="#">Espace professeur <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
<ul id="demoevent" class="collapse dropdown-header-top">
<li><a href="{{ route('Professeur.cours') }}">Cours</a>
</li>
<li><a href="#">Exercice</a>
</li>
<li><a href="#">Devoirs</a>
</li>
<li><a href="#">Notes</a>
</li>
</ul>
</li>



</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<!-- Mobile Menu end -->

<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
   
   @yield('content')

   @foreach($ProfesseurClasse as $prof)
    <div style="">
    <input value='{{ $prof->classesId }}' name="classe" />
    </div>
   @endforeach
   
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
     <!-- pdf JS
        ============================================ -->
    <script src="{{ asset('js/pdf/jquery.media.js') }}"></script>
    <script src="{{ asset('js/pdf/pdf-active.js') }}"></script>

    <!-- mCustomScrollbar JS
                ============================================ -->
    <script src="{{ asset('js/scrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('js/scrollbar/mCustomScrollbar-active.js') }}"></script>
    <!-- metisMenu JS
                ============================================ -->
    <script src="{{ asset('js/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/metisMenu/metisMenu-active.js') }}"></script>
    <!-- morrisjs JS
                ============================================ -->
    <script src="{{ asset('js/sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('js/sparkline/jquery.charts-sparkline.js') }}"></script>
    <!-- calendar JS
                ============================================ -->
    <script src="{{ asset('js/calendar/moment.min.js') }}"></script>
    <script src="{{ asset('js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('js/calendar/fullcalendar-active.js') }}"></script>
    <!-- maskedinput JS
                ============================================ -->
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('js/masking-active.js') }}"></script>
    <!-- datepicker JS
                ============================================ -->
    <script src="{{ asset('js/datepicker/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/datepicker/datepicker-active.js') }}"></script>
    <!-- form validate JS
                ============================================ -->
    <script src="{{ asset('js/form-validation/jquery.form.min.js') }}"></script>
    <script src="{{ asset('js/form-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/form-validation/form-active.js') }}"></script>
    <!-- dropzone JS
                ============================================ -->
    <script src="{{ asset('js/dropzone/dropzone.js') }}"></script>
    <!-- tab JS
                ============================================ -->
    <script src="{{ asset('js/tab.js') }}"></script>
    <!-- plugins JS
                ============================================ -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main JS
                ============================================ -->
    <script src="{{ asset('js/main.js') }}"></script>

        <!-- data table JS
============================================ -->
<script src="{{ asset('js/data-table/bootstrap-table.js') }}"></script>
<script src="{{ asset('js/data-table/tableExport.js') }}"></script>
<script src="{{ asset('js/data-table/data-table-active.js') }}"></script>
<script src="{{ asset('js/data-table/bootstrap-table-editable.js') }}"></script>
<script src="{{ asset('js/data-table/bootstrap-editable.js') }}"></script>
<script src="{{ asset('js/data-table/bootstrap-table-resizable.js') }}"></script>
<script src="{{ asset('js/data-table/colResizable-1.5.source.js') }}"></script>
<script src="{{ asset('js/data-table/bootstrap-table-export.js') }}"></script>
     
<script>
    
        function myFunction(){

            document.getElementById("darkmode").classList.toggle("dark-mode");
        }
</script>
</body>

</html>