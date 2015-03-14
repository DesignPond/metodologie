<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="@Designpond | Cindy Leschaud">
    <meta name="description" content="Cours de méthodologie juridique | Faculté de droit, Universite de Neuchâtel">
    <title>Méthodologie juridique</title>

    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('font-awesome/css/font-awesome.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('js/dropdown-menu/dropdown-menu.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('js/fancybox/jquery.fancybox.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('css/annotator.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('style.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo asset('guides.css');?>">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- jQuery -->
    <script src="<?php echo asset('jQuery/jquery-2.1.1.min.js');?>"></script>
    <script src="<?php echo asset('jQuery/jquery-migrate-1.2.1.min.js');?>"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script src="<?php echo asset('js/annotator-full.min.js');?>"></script>
    <script src="<?php echo asset('js/jquery-i18n-master/jquery.i18n.min.js');?>"></script>
    <script src="<?php echo asset('js/view_annotator.js');?>"></script>
    <script src="<?php echo asset('js/categories.js');?>"></script>
    <script src="<?php echo asset('js/jquery.expose.js');?>"></script>
    <script src="<?php echo asset('js/annotator.js');?>"></script>
    <script src="<?php echo asset('js/jquery.lockfixed.js');?>"></script>

</head>

<body role="document">

<!-- device test, don't remove. javascript needed! -->
<span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
<!-- device test end -->

<div id="k-head" class="container"><!-- container + head wrapper -->
    <div class="row"><!-- row -->
        <nav class="k-functional-navig"><!-- functional navig -->
        <!--
            <ul class="list-inline pull-right">
                <li><a target="_blank" href="http://www2.unine.ch">Unine</a></li>
                <li><a target="_blank" href="https://claroline.unine.ch/">Claroline</a></li>
                <li><a target="_blank" href="http://www.unine.ch/pidho">Horaires des cours</a></li>
            </ul>
        -->
        </nav><!-- functional navig end -->
        <div class="col-lg-12">
            <div id="k-site-logo" class="pull-left"><!-- site logo -->
                <h1 class="k-logo">
                    <a href="{{ url('/') }}" title="Home Page">
                        <img src="img/logo.png" alt="Site Logo" class="img-responsive" />
                    </a>
                </h1>
                <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            </div><!-- site logo end -->

            <!-- Navigation  -->
            @include('partials.navigation')

        </div>
    </div><!-- row end -->
</div><!-- container + head wrapper end -->

<div id="k-body"><!-- content wrapper -->
    <div class="container"><!-- container -->

        <div class="row"><!-- row -->
            <div id="k-top-search" class="col-lg-12 clearfix"><!-- top search -->

                <!-- Search  -->
                @include('partials.search')

            </div><!-- top search end -->
            <div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->

                <!-- Search  -->
                @include('partials.breadcrumbs')

            </div><!-- breadcrumbs end -->
        </div><!-- row end -->

        <!-- Contenu -->
        @yield('content')
        <!-- Fin contenu -->

    </div><!-- container end -->
</div><!-- content wrapper end -->

<div id="k-footer"><!-- footer -->
    <div class="container"><!-- container -->
        <div class="row no-gutter"><!-- row -->
            <div class="col-lg-4 col-md-4"><!-- widgets column left -->
                <div class="col-padded col-naked">
                    <ul class="list-unstyled clear-margins"><!-- widgets -->
                        <li class="widget-container widget_nav_menu"><!-- widgets list -->
                            <h1 class="title-widget">Liens utiles</h1>
                            <ul>
                                <li><a target="_blank" href="http://www.bger.ch/fr/jurisdiction-recht" title="menu item">Tribunal fédéral</a></li>
                                <li><a target="_blank" href="http://www.bvger.ch/recht/00551/index.html?lang=fr" title="menu item">Tribunal administratif</a></li>
                                <li><a target="_blank" href="http://www.bstger.ch/fr/giurisprudenza/index.html" title="menu item">Tribunal pénal</a></li>
                                <li><a target="_blank" href="www.lexfind.ch" title="menu item">www.lexfind.ch</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div><!-- widgets column left end -->

            <div class="col-lg-4 col-md-4"><!-- widgets column center -->
                <div class="col-padded col-naked">
                    <ul class="list-unstyled clear-margins"><!-- widgets -->
                        <li class="widget-container widget_recent_news"><!-- widgets list -->
                            <h1 class="title-widget">Université de Neuchâtel</h1>
                            <div itemscope itemtype="http://data-vocabulary.org/Organization">
                                <h2 class="title-median m-contact-subject" itemprop="name">Faculté de droit</h2>
                                <div class="m-contact-address" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                                    <span class="m-contact-street" itemprop="street-address">Avenue du 1er-Mars 26</span>
                                    <span class="m-contact-city-region"><span class="m-contact-city" itemprop="locality">2000</span>, <span class="m-contact-region" itemprop="region">Neuchâtel</span></span>
                                </div>
                                <div class="m-contact-tel-fax">
                                    <span class="m-contact-tel">Tel: <span itemprop="tel">+41 32 718 12 00</span></span>
                                    <span class="m-contact-fax">Fax: <span itemprop="fax">+41 32 718 12 01</span></span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- widgets column center end -->

            <div class="col-lg-4 col-md-4"><!-- widgets column right -->
                <div class="col-padded col-naked">
                    <ul class="list-unstyled clear-margins"><!-- widgets -->
                        <li class="widget-container widget_course_search"><!-- widgets list -->
                            <h1 class="title-widget">Recherche sur le site</h1>
                            <form role="search" method="get" id="course-finder" action="#">
                                <div class="input-group">
                                    <input type="text" placeholder="Recherche..." autocomplete="off" class="form-control" id="find-course" name="find-course" />
                                    <span class="input-group-btn"><button type="submit" class="btn btn-default">GO!</button></span>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>

            </div><!-- widgets column right end -->
        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- footer end -->

<div id="k-subfooter"><!-- subfooter -->
    <div class="container"><!-- container -->
        <div class="row"><!-- row -->
            <div class="col-lg-12">
                <p class="copy-text text-inverse">
                    &copy; <?php echo date('Y'); ?> Faculté de droit, Uninversité de Neuchâtel. Tous droits réservés.
                </p>
            </div>
        </div><!-- row end -->
    </div><!-- container end -->
</div><!-- subfooter end -->


<!-- Bootstrap -->
<script src="<?php echo asset('bootstrap/js/bootstrap.min.js');?>"></script>

<!-- Drop-down -->
<script src="<?php echo asset('js/dropdown-menu/dropdown-menu.js');?>"></script>

<!-- Fancybox -->
<script src="<?php echo asset('js/fancybox/jquery.fancybox.pack.js');?>"></script>
<script src="<?php echo asset('js/fancybox/jquery.fancybox-media.js');?>"></script>

<!-- Theme -->
<script src="<?php echo asset('js/theme.js');?>"></script>

</body>
</html>