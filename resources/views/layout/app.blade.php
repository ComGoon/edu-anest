<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ANEST HOME</title>

    <link rel="icon" type="image/png" href="{{asset('img/oie_png.png')}}">
    <!-- For apple devices -->
    <link rel="apple-touch-icon" type="image/png" href="{{asset('img/oie_png.png')}}"/>

    <link rel="stylesheet" href="{{asset('css/homepage/header.css')}}">
    <link rel="stylesheet" href="{{asset('css/homepage/carrosel.css')}}">
    <link rel="stylesheet" href="{{asset('css/homepage/anest.css')}}">
    <link rel="stylesheet" href="{{asset('css/homepage/niger.css')}}">
    <link rel="stylesheet" href="{{asset('css/homepage/footer.css')}}">

    <link rel="stylesheet" href="{{asset('css/niger/ethnie.css')}}">
    <link rel="stylesheet" href="{{asset('css/niger/gallery.css')}}">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    {{--<script src="https://kit.fontawesome.com/3296ad218d.js"></script>--}}
    <script src="{{asset('js/homepage/font-awesome.js')}}"></script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <script src="{{asset('js/homepage/header.js')}}"></script>
    <script src="{{asset('js/homepage/carrosel.js')}}"></script>
    <script src="{{asset('js/homepage/anest.js')}}"></script>
    <script src="{{asset('js/homepage/footer.js')}}"></script>

    <script src="{{asset('js/niger/gallery.js')}}"></script>

    {{-- back to the top links --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

</head>
<body class="">

<div class="wrapper">

    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-mainbg">
            <a class="navbar-brand navbar-logo" href="#"><img src="{{asset('img/oie_png(1).png')}}" alt="logo"
                                                              width="100px"
                                                              height="70px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <div class="hori-selector">
                        <div class="left"></div>
                        <div class="right"></div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="#home">ACCUEIL</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#anest">L'ANEST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);">ACTIONS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#niger">LE NIGER</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>

    </section>

    @yield('content')


    <a id="btn-to-top"></a>

    <section id="footer">
        <h1 class="text-center" style="padding-bottom: 1%">
            <a href="" class="typewrite" data-period="400"
               data-type='[ "Association des Nigériens Étudiants & Stagiaires en Tunisie     ", "Devise: Union, Travail, Réussite   " ]'>
                <span class="wrap"></span>
            </a>
        </h1>

        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">


                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>SERVEZ-VOUS!</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="/home"><i class="fa fa-angle-double-right"></i>ACCUEIL</a></li>
                        <li><a href="#anest"><i class="fa fa-angle-double-right"></i>ANEST</a></li>
                        <li><a href="#action"><i class="fa fa-angle-double-right"></i>ACTIONS</a></li>
                        <li><a href="#niger"><i class="fa fa-angle-double-right"></i>NIGER</a></li>
                        <li><a href="#footer"><i class="fa fa-angle-double-right"></i>CONTACT</a></li>
                    </ul>
                </div>


                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>ADRESSE</h5>

                    <ul class="list-unstyled justify-content-center">
                        <li class="d-flex align-items-center"><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>TUNIS - TUNISIE</p>
                        </li>

                        <li class="d-flex align-items-center"><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>+ 216 53 691 617</p>
                        </li>

                        <li class="d-flex align-items-center"><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>hello@anest.org</p>
                        </li>
                    </ul>

                </div>


                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>NOUS CONTACTER</h5>
                    <ul class="list-unstyled quick-links">

                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="name" name="name" class="form-control">
                                                <label for="name" class="">Votre nom</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->


                                        <!--Grid column-->
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="subject" name="subject" class="form-control">
                                                <label for="subject" class="">Objet</label>
                                            </div>
                                        </div>
                                        <!--Grid column-->

                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="email" name="email" class="form-control">
                                                <label for="email" class="">Votre email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <!--Grid row-->
                                    <div class="row">

                                        <!--Grid column-->
                                        <div class="col-md-12">

                                            <div class="md-form">
                                                <textarea type="text" id="message" name="message" rows="2"
                                                          class="form-control md-textarea"></textarea>
                                                <label for="message">Message</label>
                                            </div>

                                        </div>
                                    </div>
                                    <!--Grid row-->

                                    <div>

                                    </div>

                                    <input id="capchia" type="text" style="width: 75px">

                                </form>

                                <div class="text-center text-md-right">
                                    <a class="btn btn-primary"
                                       onclick="document.getElementById('contact-form').submit();">Envoyer</a>
                                </div>
                                <div class="status"></div>
                            </div>
                            <!--Grid column-->

                        </div>

                        <!--Section: Contact v.2-->
                    </ul>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">&copy Tous droits réservés. made with 💙 by: <a style="color: #ff9900;"
                                                                                  class="text-black-50 ml-2"
                                                                                  href="https://www.linkedin.com/in/mahaman"
                                                                                  target="_blank">Mahaman</a></p>
                </div>
                </hr>
            </div>
        </div>

    </section>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script defer src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
</body>
</html>
