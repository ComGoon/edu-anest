<?php
/**
 * Created by PhpStorm.
 * User: comgoon
 * Date: 9/18/19
 * Time: 4:36 PM
 */ ?>

@extends('layout.app')



@section('content')
    {{--    {{$madani}}--}}
    <div class="container">
        <img class="img-fluid" src="{{asset('/img/niger-en-bref-fr.svg')}}" alt="image">
        <div class="container">
            <p class="text-justify">La situation géographique du Niger fait de lui un carrefour d'échanges entre
                l'Afrique du Nord et
                l'Afrique au Sud du Sahara. Situé en Afrique occidentale entre les parallèles 11°37 et 23°33 de latitude
                nord d'une part, et les méridiens 16° de longitude Est et 0°10 de longitude Ouest d'autre part, le Niger
                s'étend sur 1 267 000 km². Il est le plus vaste des pays de l'Afrique occidentale et se classe 6e à
                l'échelle continentale (après le Soudan, l'Algérie, le Congo, la Libye et le Tchad).</p>
            <p class="text-justify">
                Les ressources en eaux de surface sont relativement importantes et sont réparties dans deux grands
                ensembles: le bassin du fleuve Niger et celui du lac Tchad.
            </p>

            <p class="text-justify">
                Le bassin du fleuve Niger comporte cinq (5) unités hydrologiques qui sont le fleuve Niger (traversant le
                pays sur 550 Km) et ses affluents de la rive droite (Gorouol, Dargol, Sirba, Goroubi, Diamangou, Tapoa,
                Mékrou) ; les affluents de la rive gauche (vallées fossiles ou dallols) ; l'Ader - Doutchi - Maggia ;
                les Goulbis (N'Maradi et N'Kaba) et la haute vallée de la Tarka ; les koris de l'Aïr. Quant au bassin du
                lac Tchad, il comporte deux (2) unités : la Komadougou Yobé et la cuvette du Lac Tchad ; et ensuite les
                Koramas. Les eaux de surface représentent un volume moyen annuel de 30 milliards de m3, dont seuls 1%
                est actuellement mobilisé essentiellement aux fins de mise en valeur agricole.
            </p>

            <p class="text-justify">
                Les eaux souterraines sont évaluées à 2,5 milliards de m3 pour le flux renouvelé, dont seulement 20 %
                sont exploités essentiellement à des fins d'Alimentation en Eau Potable, et 2.000 milliards de m3 pour
                les eaux fossiles très faiblement touchées par les activités minières.
            </p>

            <p class="text-justify">
                Certains animaux, comme les éléphants, les lions et les girafes, sont inégalement disséminé sur tout le
                territoire national. Le dernier troupeau de girafes en liberté de toute l'Afrique de l'Ouest évolue dans
                les environs du village de Kouré, à 60 km de la capitale Niamey. D'autre part, une réserve portant le
                nom de "Parc du W" (à cause des sinuosités du fleuve Niger à cet endroit) se trouve sur le territoire de
                trois pays : le Niger, le Bénin et le Burkina Faso. Sur les berges le fleuve Niger, les hippopotames
                sont protégés et se multiplient abondamment notamment vers Ayorou faisant ainsi de cette localité l'une
                des perles du tourisme nigérien.
            </p>

            <p class="text-justify">
                Les armoiries du Niger furent introduites le 1er décembre 1962. Elles sont composées d'un soleil doré,
                avec à ses côtés à gauche deux épées Touareg et une lance qui symbolisent la bravoure des hommes dans le
                passé. À droite du soleil, on peut voir un épi de millet, et en dessous, une tête de buffle symboles de
                l'agriculture et de l'élevage. Les armoiries sont entourées de quatre drapeaux nationaux ainsi qu'un
                parchemin où on peut lire le nom officiel du pays : « République du Niger ».
            </p>

            <img class="img-fluid" src="{{asset('/img/carteniger.png')}}" alt="image">

            <p class="text-justify nigerTitle">
                La population du Niger s’élève à près de 20 millions d’habitants. Les différentes ethnies sont :
            </p>

            <p class="text-justify ethnie">
                Les Haoussas (53,5% de la population), établis entre le Dallol Maouri et Zinder qui vivent dans le
                centre et l'est du pays avec une aire culturelle largement étendue au Nigéria ;
            </p>

            <p class="text-justify ethnie">
                Les Djermas et Sonrhaïs (19% de la population) qui occupent l'ouest du pays ; ils incluent les Wogos et
                les Kourteïs ;
            </p>

            <p class="text-justify ethnie">
                Les Touaregs (10,6%), Toubous (0,5%) et Arabes (0,3%) au nord et nord-est ;
            </p>

            <p class="text-justify ethnie">
                Les Kanouris (4,6%) et les Boudoumas dans l'extrême est ;
            </p>

            <p class="text-justify ethnie">
                Les Peulhs (10,4%) disséminés sur tout le territoire.
            </p>


            <div class="container" id="NigerImg">
                <div class="row">
                    <div class="row">


                        {{--<div class="col-lg-3 col-md-4 col-xs-6 thumb">--}}
                            {{--<a class="thumbnail" href="#" data-image-id="" data-toggle="modal"--}}
                               {{--data-title="Environnement"--}}
                               {{--data-image="{{asset('/img/niger/récapitulative de la Conférence Agence UA Niger2019.mp4')}}"--}}
                               {{--data-target="#image-gallery">--}}
                                {{--<img class="img-thumbnail"--}}
                                     {{--src="{{asset('/img/niger/récapitulative de la Conférence Agence UA Niger2019.mp4')}}"--}}
                                     {{--alt="Another alt text">--}}
                            {{--</a>--}}
                        {{--</div>--}}


                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                               data-title="Environnement"
                               data-image="{{asset('/img/niger/nigerEnv.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/nigerEnv.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                               data-title="Oisis de Timia. En touareg Ayăr, en haoussa Azbin, est un massif montagneux situé au Niger, en Afrique, dans l'écorégion du Sahara. Situé au nord du 17e parallèle, il couvre une superficie de 70 000 km2. Il se présente comme un vaste plateau compris entre 500 et 900 mètres d’altitude où dominent des étendues planes, parsemé de sommets isolés de nature granitique, parfois surmontés d'édifices volcaniques.
Situé au centre-nord du pays, étendu sur 300 km du nord au sud et 200 km d'est en ouest, l'Aïr se présente sous une forme triangulaire.
Les altitudes dépassent souvent 900 m ; le point culminant de l'Aïr est le mont Indoukat-n-Taglès dans les monts Bagzane (2 022 m).
Le versant méridional s'enfonce dans une dépression dominée par la falaise de Tiguidit. Le versant oriental est en contact avec la zone sableuse du Ténéré. À l'ouest, la transition se fait rapidement avec la plaine du Talak et les régions de l'Azawagh et du Tamesna.
Le chef-lieu de l'Aïr est Agadez, ville située au cœur du pays touareg. La population est constituée de pasteurs nomades dont l'économie est axée sur les chèvres et les dromadaires qui leur fournissent lait, viande et peaux utilisées dans l'artisanat local. Certains se sont sédentarisés, par exemple dans les villages de Timia, Tabellot, Aoudéras ou Iférouane. Ce sont alors des agriculteurs cultivant des plantes maraîchères (oignons, tomates, pommes de terre, ail…), du maïs, du blé et quelques arbres fruitiers (orangers, pamplemoussiers, grenadiers…), ou alors des bergers éleveurs de chèvres. Les caravanes des Touaregs nomades permettent des échanges commerciaux entre les populations sédentaires et les oasis du Ténéré à l'Est (Fachi, Bilma ou Achegour), productrices de sel et de dattes.
L'Aïr présente ainsi un faciès varié au centre d'une zone de plaines monotones hyper arides."
                               data-image="{{asset('/img/niger/timia.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/timia.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                               data-title="Libye Caravane chameaux dromadaire Sud Libye Sahara Koufra Maghreb Afrique de Nord"
                               data-image="{{asset('/img/niger/caravane-chameaux.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/caravane-chameaux.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                               data-title="Il s'agit du seul arbre à avoir jamais été représenté sur une carte au 1/4 000 000. La légende en fit l'arbre le plus isolé de la Terre, prétendant qu'aucun autre arbre ne se situait à moins de 400 km. On a depuis prouvé que c'est faux : l'oasis de Timia ne se trouve ainsi, par exemple, qu'à 150 km de l'Arbre du Ténéré.
L'acacia était le dernier survivant d'un groupe d'arbres qui avait poussé dans le désert à une époque de moindre aridité. Pendant l'hiver 1938-1939, un puits est foré à côté de l'arbre par des militaires français pour faciliter le transit des convois militaires dans la région. Il est alors découvert que ses racines atteignent la nappe phréatique, située plus de 30 mètres en dessous de la surface. En 1973, l'arbre est renversé par un camionneur libyen, probablement ivre7. Le 8 novembre 1973, l'arbre mort est transporté au Musée national Boubou-Hama à Niamey et remplacé par une simple sculpture métallique représentant un arbre."
                               data-image="{{asset('/img/niger/arbre-du-tenere-1961.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/arbre-du-tenere-1961.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=" madani"
                               data-image="{{asset('/img/niger/agadez.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/agadez.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="oussoumane"
                               data-image="{{asset('/img/niger/arlit.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/arlit.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Test1"
                               data-image="{{asset('/img/niger/balleyara.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/balleyara.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                               data-title="Im so nice and u "
                               data-image="{{asset('/img/niger/kouré.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/kouré.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                               data-image="{{asset('/img/niger/n1.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/n1.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                               data-title="Im so nice cool"
                               data-image="{{asset('/img/niger/n2.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/n2.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                               data-title="Im so nice whats'8p"
                               data-image="{{asset('/img/niger/n3.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/n3.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                               data-title="Im so nice theijdlf"
                               data-image="{{asset('/img/niger/n4.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/agadez.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal"
                               data-title="Im so nicefdsa"
                               data-image="{{asset('/img/niger/armoirie.png')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/armoirie.png')}}"
                                     alt="Another alt text">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                               data-image="{{asset('/img/niger/n6.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/n6.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                               data-image="{{asset('/img/niger/n7.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/n7.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                               data-image="{{asset('/img/niger/n8.jpg')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/n8.jpg')}}"
                                     alt="Another alt text">
                            </a>
                        </div>


                        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                            <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="Im so nice"
                               data-image="{{asset('/img/niger/n9.png')}}"
                               data-target="#image-gallery">
                                <img class="img-thumbnail"
                                     src="{{asset('/img/niger/n9.png')}}"
                                     alt="Another alt text">
                            </a>
                        </div>
                    </div>


                    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="image-gallery-title"></h4>
                                    <button type="button" class="close" data-dismiss="modal"><span
                                                aria-hidden="true">×</span><span class="sr-only">Close</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img id="image-gallery-image" class="img-responsive col-md-12" src="">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary float-left" id="show-previous-image">
                                        <i class="fa fa-arrow-left"></i>
                                    </button>

                                    <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i
                                                class="fa fa-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection