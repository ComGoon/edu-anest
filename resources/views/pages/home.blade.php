<?php
/**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 9/9/19
 * Time: 11:01 PM
 */ ?>
@extends('layout.app')



@section('content')

    <section id="home">

        <div class="container">

            <div id="container">
                <ul id="slides">
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="{{asset('img/niger1.png')}}"/></div>
                        <div class="slide-partial slide-right"><img src="{{asset('img/niger2.png')}}"/></div>
                        <h1 class="title"><span class="title-text">Forest</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img src="{{asset('img/giraffe1.jpg')}}"/></div>
                        <div class="slide-partial slide-right"><img src="{{asset('img/giraffe2.jpg')}}"/></div>
                        <h1 class="title"><span class="title-text">Faune & Flore</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img
                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/ocean-left.jpg"/></div>
                        <div class="slide-partial slide-right"><img
                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/ocean-right.jpg"/></div>
                        <h1 class="title"><span class="title-text">Ocean</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img
                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/canyon-left.jpg"/></div>
                        <div class="slide-partial slide-right"><img
                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/canyon-right.jpg"/></div>
                        <h1 class="title"><span class="title-text">Canyon</span></h1>
                    </li>
                    <li class="slide">
                        <div class="slide-partial slide-left"><img
                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/lake-left.jpg"/></div>
                        <div class="slide-partial slide-right"><img
                                    src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/544318/lake-right.jpg"/></div>
                        <h1 class="title"><span class="title-text">Lake</span></h1>
                    </li>
                </ul>
                <ul id="slide-select">
                    <li class="btn prev"><</li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="selector"></li>
                    <li class="btn next">></li>
                </ul>

            </div>

        </div>
    </section>

    <section id="anest"
             style="background-image: url('{{ asset('img/IMG_5326.JPG')}}'); background-repeat: no-repeat; background-size: 100% 100%;">
        {{-- about --}}
        <div id="anestWrapper" class="container">
            <div class="container">

                <div class="alert alert-success" role="alert" style="margin-top: 10%">
                    <h3 class="alert-heading">ANEST</h3>

                    <p style="text-justify: auto">L'association des Nigériens Etudiants et Stagiaires en Tunisie (<a
                                target="_blank"
                                href="https://www.facebook.com/Association-des-Nig%C3%A9riens-%C3%A9tudiants-et-stagiaires-en-Tunisie-632835573425621/">AESAT</a>),
                        affilier à l'association
                        des Etudiants et
                        Stagiaires Africains en Tunisie (<a target="_blank"
                                                            href="https://www.facebook.com/Aesat-Page-officielle-443648175671477/">AESAT</a>)
                        régie par la loi n° 154 de 1959 en date du 07 novembre
                        1959 modifiée par la
                        loi cadre n° 88-99 en date du 2 Août et la loi n° 92-25 en date du 02 avril 1992.
                        Date: 04 octobres 1993; Numéro du reçu du dépôt: 927; Numéro du Visa 11, Gouvernorat de
                        Tunis. </p>
                    <hr>
                    <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and
                        tidy.</p>
                    <div class="text-right mb-3">
                        <a href="/niger" type="button" class="btn btn-outline-warning btn-rounded waves-effect">plus
                            d'info...</a>
                        {{--<a href="#" class="btn btn-primary">Right align</a>--}}
                    </div>
                </div>

            </div>

            {{-- numbers --}}

            <div class="container">

                <div class="fake-div">
                </div>
                <div id="counter" class="d-flex justify-content-around">


                    <div class="outterCounter  border border-primary">
                        <span>+</span>
                        <div class="counter-value " data-count="300">0</div>
                        <hr>
                        <p class="count-text ">Nombre de communautaires</p>
                    </div>

                    <div class="outterCounter border border-primary"><span>+</span>

                        <div class="counter-value " data-count="400">100</div>
                        <hr>
                        <p class="count-text ">Annees d'existance</p>
                    </div>

                    <div class="outterCounter  border border-primary"><span>+</span>

                        <div class="counter-value" data-count="1500">200</div>
                        <hr>
                        <p class="count-text ">Partenaires</p>
                    </div>

                </div>
                <div class="fake-div">

                </div>
            </div>
        </div>
    </section>


    {{-- carteNiger.png --}}

    <section id="niger">
        <div class="container">
            <h2 class="card-title"><strong>La république du Niger</strong></h2>

            <div class="d-flex">
                <img class="img-fluid" src="{{asset('img/niger-in-africa.png')}}" alt="Niger in Africa"
                     style="padding: 1% 1%">
                <div class="card">
                    <div class="card-body">
                        <p>
                            Le Niger est un vaste pays d’une superficie de 1 267 000 km2 situé en Afrique de l’Ouest. Sa
                            population en 2016, est estimée à 20,67 millions d’habitants composée de 87,1% de jeunes de
                            moins de 35 ans et 52,1% de femmes et plus de 80% vivent en milieu rural.
                        </p>

                        <p>
                            Le Niger, ancienne Colonie française est une République depuis le 18 décembre 1958, à acquis son
                            indépendance le 03 août 1960. Pays de l’Afrique de l’Ouest, il est situé entre l’Algérie et la
                            Libye au Nord, le Benin, le Burkina Faso et le Nigeria au Sud, le Tchad a l’Est et le Mali au
                            Sud. Ça capitale est Niamey, les habitants sont appelés Nigériens (ceux du Nigeria sont des
                            Nigérians).
                        </p>

                        <p>
                            Pays multiculturel, il constitue une terre de contact entre l’Afrique subsaharienne et l’Afrique
                            du Nord Le pays est composé de plusieurs groupes ethnolinguistiques. IL constitue une aire de
                            contact entre l’Afrique noire et le Maghreb. Le Niger est membre de la CEDEAO et de l’UEMOA.
                        </p>

                        <p>
                            Riche en ressources naturelles minières (or, charbon, pétrole, uranium…) et d’une population
                            jeune, ouverte au monde et ambitieuse, le Niger entend bâtir une nouvelle vision portée par une
                            politique fondée sur une claire volonté de transformation à tous les niveaux pour réduire la
                            pauvreté et les inégalités.
                        </p>

                    </div>
                </div>
            </div>

            <br>

            <div class="d-flex">

                <div class="card">
                    <div class="card-body">
                        <p>
                            Le Niger est un vaste pays d’une superficie de 1 267 000 km2 situé en Afrique de l’Ouest. Sa
                            population en 2016, est estimée à 20,67 millions d’habitants composée de 87,1% de jeunes de
                            moins de 35 ans et 52,1% de femmes et plus de 80% vivent en milieu rural.
                        </p>

                        <p>
                            Adopté le 23 novembre 1959, le drapeau nigérien est composé de trois bandes horizontales de même
                            largeur, orange, blanche et verte, et d’un petit disque orange au centre de la bande blanche.
                        </p>

                        <p>
                            Riche en ressources naturelles minières (or, charbon, pétrole, uranium…) et d’une population
                            jeune, ouverte au monde et ambitieuse, le Niger entend bâtir une nouvelle vision portée par une
                            politique fondée sur une claire volonté de transformation à tous les niveaux pour réduire la
                            pauvreté et les inégalités.
                        </p>

                        <p>
                            Son économie ayant enregistré un taux de croissance de 6% en 2016, est dominée par le secteur
                            primaire avec une part de 42,9% du PIB.
                        </p>


                        <div class="text-right mb-3">
                            <a href="/niger" type="button" class="btn btn-outline-primary btn-rounded waves-effect">plus
                                d'info...</a>
                            {{--<a href="#" class="btn btn-primary">Right align</a>--}}
                        </div>
                    </div>
                </div>

                <img class="img-fluid" src="{{asset('img/Flag_of_Niger.svg.png')}}" alt="Niger in Africa"
                     style="padding: 1% 1%">
            </div>
        </div>
    </section>





@endsection