@extends('layouts.master')
@section('content')

<div class="row no-gutter"><!-- row -->
    <div class="col-lg-9 col-md-9 col-lg-push-3 col-md-push-3"><!-- doc body wrapper -->
        <div class="col-padded"><!-- inner custom column -->
            <div class="row gutter"><!-- row -->
                <div class="col-lg-12 col-md-12">

                    <div class="course-title-meta clearfix"><!-- course meta -->
                        <h1 class="page-title">La recherche juridique</h1>
                        <dl class="dl-horizontal course-meta">
                            <dt>Enseignant</dt><dd>CARRON Blaise, professeur ordinaire</dd>
                            <dt>Cours</dt><dd>4DR1021</dd>
                            <dt>Période</dt><dd>Semestre Automne</dd>
                            <dt>Filières</dt><dd>Bachelor en droit</dd>
                        </dl>
                    </div><!-- course meta end -->

                    <div class="news-body clearfix"><!-- course content -->

                        <h6>L'organisation générale</h6>
                        <p>Le cours est donné tous les <strong>jeudis entre 13h15 et 15h00, du 17 septembre au 21 décembre</strong>,
                            2014. Le calendrier détaillé se trouve sur la plate-forme claroline. Quelques modifications
                            peuvent lui être apportées en cours d'année, notamment pour des raisons de coordination
                            avec le cours d’introduction générale au droit.
                        </p>
                        <h6>La préparation personnelle</h6>
                        <p>En dehors du cours proprement dit, les étudiants doivent fournir un travail personnel
                            hebdomadaire. Il s'agit d’une part de lectures préparatoires dans l’ouvrage de base
                            <strong>P. TERCIER / C. ROTEN La recherche et la rédaction juridiques, 6ème éd., Genève / Zurich / Bâle
                            2011</strong>, que les étudiants sont vivement invités à acquérir. D’autre part, les étudiants doivent
                            préparer des exercices destinés à mettre en pratique la matière acquise.
                        </p>

                        <hr />

                        <div class="bullet-paragraph-wrap"><!-- bullet paragraph -->
                            <i class="fa fa-2x fa-arrow-circle-o-right"></i>
                            <div class="bullet-paragraph-text">
                                <h6>La recherche juridique</h6>
                                <ol>
                                    <li>La législation suisse
                                        <ol>
                                            <li><a href="{{ url('detail') }}">La structure d’une loi fédérale</a></li>
                                            <li><a href="{{ url('detail') }}">La législation fédérale</a></li>
                                            <li><a href="{{ url('detail') }}">Les législations cantonales</a></li>
                                        </ol>
                                    </li>
                                    <li>La jurisprudence
                                        <ol>
                                            <li><a href="{{ url('detail') }}">Les jurisprudences fédérales</a></li>
                                            <li><a href="{{ url('detail') }}">Les jurisprudences cantonales</a></li>
                                            <li><a href="{{ url('detail') }}">La consultation de la jurisprudence</a></li>
                                            <li><a href="{{ url('detail') }}">La structure des arrêts du Tribunal fédéral</a></li>
                                        </ol>
                                    </li>
                                    <li>La doctrine
                                        <ol>
                                            <li><a href="{{ url('detail') }}">Les principaux types de publication</a></li>
                                            <li><a href="{{ url('detail') }}">La consultation de la doctrine</a></li>
                                            <li><a href="{{ url('detail') }}">Les revues principales du droit suisse</a></li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>

                    </div><!-- course content end -->

                </div>
            </div><!-- row end -->
        </div><!-- inner custom column end -->
    </div><!-- doc body wrapper end -->
    <div id="k-sidebar" class="col-lg-3 col-md-3 col-lg-pull-9 col-md-pull-9"><!-- sidebar wrapper -->
        <div class="col-padded col-shaded"><!-- inner custom column -->

            <!-- Sidebar  -->
            @include('partials.sidebar')

        </div><!-- inner custom column end -->
    </div><!-- sidebar wrapper end -->
</div><!-- row end -->

@stop