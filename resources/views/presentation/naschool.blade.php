
@extends('layouts.info')

@section('content')


        <!-- main header ends-->

        <section id="banner" class="banner">
            
            <div class="container">
            <div id="ghughu-banner-carousel" class="carousel slide carousel-fade" data-ride="carousel">
              
               <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#ghughu-banner-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#ghughu-banner-carousel" data-slide-to="1"></li>
                    <li data-target="#ghughu-banner-carousel" data-slide-to="2"></li>
                  </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner full-height" role="listbox">
                <div class="item active banner-item">
                        <div class="row">
                        <div class="col-sm-7">
                              <h1 class="animated fadeInUp delay-2">Une école <br> Digitale Pour Tous.</h1>
                              <p class="animated fadeInUp delay-3">Application web conçue pour gérer le système
d’Information des établissements d’enseignement supérieur (Instituts,
écoles supérieures et universités).</p>
                        </div>
                        <div class="col-sm-5 text-center hidden-xs">
                            <img src="{{ asset('info/images/banner-carousel/browser.png') }}" class="animated fadeInUp delay-4 img-responsive" alt="banner">
                        </div>
                        </div>
                </div>

                <div class="item banner-item">
                    <div class="row">
                        <div class="col-sm-7">
                              <h1 class="animated fadeInUp delay-2">Structurante <br>Et pédagogique</h1>
                              <p class="animated fadeInUp delay-3">La seule platefome associant l'enseignement sur(mésure et le bien-etre couplé à un suivi complet et flexible qui intègre parfaitement les réalités scolaires congolaises</p>
                        </div>
                        <div class="col-sm-5 text-center hidden-xs">
                            <img src="{{ asset('info/images/banner-carousel/monitor.png') }}" class="animated fadeInUp delay-4 img-responsive" alt="banner">
                        </div>
                    </div>
                </div>

                <div class="item banner-item">
                    <div class="row">
                        <div class="col-sm-7">
                              <h1 class="animated fadeInUp delay-2">Bâtie sur un système d’information <br> d’établissement éprouvé</h1>
                              <p class="animated fadeInUp delay-3">offre liberté, souplesse et autonomie dans le respect des
normes et vous permet en un clin d’oeil d’organiser la vie scolaire de votre établissement</p>
                        </div>
                        <div class="col-sm-5 text-center hidden-xs">
                            <img src="{{ asset('info/images/banner-carousel/mobile.png') }}" class="animated fadeInUp delay-4 img-responsive" alt="banner">
                        </div>
                    </div>
                </div>

                </div>                
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#ghughu-banner-carousel" role="button" data-slide="prev">
                <i><img src="{{ asset('info/images/banner-carousel/arrow-left.svg') }}" alt="icons"></i>
              </a>
              <a class="right carousel-control" href="#ghughu-banner-carousel" role="button" data-slide="next">
                <i><img src="{{ asset('info/images/banner-carousel/arrow-right.svg') }}" alt="banner"></i>
              </a>
             </div> 
        </section>

        <section id="who-are-we" class="who-are-we page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <h1>Nous vous résumons</h1>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <p>N@SCHOOL est une application web conçue pour gérer le système
d’Information des établissements d’enseignement supérieur (Instituts,
écoles supérieures et universités).</p>
                        <p>Il prend en charge le système d’enseignement supérieur classique et est
parfaitement adapté au système Licence - Master - Doctorat dit LMD.<br>N@SCHOOL est doté d’une gamme de modules évolutifs capables de
gérer l’ensemble du système d’information de l’établissement
d’enseignement.</p>

                    </div>
                </div>
            </div>
        </section>
        <!-- most probably like canvas -->
        <section id="services" class="services page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-md-12 main-heading">
                      <h1>On vous répond</h1>  
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="service clearfix">
                                <div class="col-sm-4 col-md-5">
                                    <span class="service-number">1</span>
                                </div>
                                <div class="col-sm-8 col-md-7">
                                    <h2>Pour qui?</h2>
                                    <p>Parents, étudiants, Elèves, Enseignants, Admninistrateurs</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="service clearfix">
                                <div class="col-sm-4 col-md-5">
                                    <span class="service-number">2</span>
                                </div>
                                <div class="col-sm-8 col-md-7">
                                    <h2>Comment?</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <div class="service clearfix">
                                <div class="col-sm-4 col-md-5">
                                    <span class="service-number">3</span>
                                </div>
                                <div class="col-sm-8 col-md-7">
                                    <h2>Et combien?</h2>
                                    <p>La mise a disposition, configuration et maintenance est
gratuite pour l’établissement.
<br>L’accès étudiant : 1000frs / mois (accès illimité)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
            </div>            
        </section>

        <!-- CTA section starts -->
        <section id="cta" class="cta page">
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>Digitaliser votre école</h1>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('naschool-contact') }}" class="btn btn-block custom-button">Je me lance</a>
                    </div>
                </div><!-- End: .row -->
            </div><!-- End: .container-->
        </section>
        <!-- CTA section ends -->


@endsection
