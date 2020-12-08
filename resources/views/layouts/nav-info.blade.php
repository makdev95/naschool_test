  <!-- MAIN HEADER STARTS-->
            <header id="header">

            <!-- TOP NAVIGATION -->
            <nav class="top-navigation-bar navbar navbar-default navbar-fixed-top">
                <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" 
                                data-toggle="collapse" data-target="#top-navigation-bar" 
                                aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.html">N@school<span class="thin"> </span></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="top-navigation-bar">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="{{ route('naschool-info')}}">Accueil</a></li>
                            <li><a href="{{ route('naschool-about')}}">Qui sommes-nous?</a></li>
                            <li><a href="{{ route('naschool-contact')}}">Nous contacter</a></li>
                            <li><a href="/login">Connexion</a></li>                            
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    </div>
                    </div>
                </div>
                <!-- /.container-->
            </nav>
            <!-- TOP NAVIGATION ENDS -->

        </header>