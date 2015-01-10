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

                        <p>Duis ornare magna sit amet dui eleifend imperdiet. Aliquam at porta elit. Proin lorem lacus, tempus id diam sit amet,
                            <a href="#" title="porttitor tempor">porttitor tempor</a> lectus. Praesent id felis sagittis, suscipit ligula sed,
                            condimentum nisi. In non commodo risus. Praesent fringilla ligula in orci consectetur pulvinar. Nunc
                            <strong>facilisis metus pellentesque</strong>, vestibulum libero eget, varius elit. Aliquam sed gravida dui, a
                            imperdiet eros. Cras dignissim libero id feugiat pharetra. Nullam ut bibendum est, sed tincidunt massa.
                        </p>
                        <p>Aenean eu sem non diam iaculis gravida. Nam imperdiet eleifend <strong>erat ut viverra</strong>.
                            Fusce vitae ultrices tortor, tincidunt consectetur purus. Donec ut suscipit nisi. Ut vitae
                            venenatis dolor. Phasellus volutpat sapien sit amet tellus gravida, nec dignissim elit congue.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo magna, condimentum vitae feugiat id, lobortis et nibh.
                        </p>
                        <hr />

                        <h6>Supports de cours:</h6>
                        <ul class="list-unstyled list-downloads"><!-- downloads list -->
                            <li>
                                <i class="fa fa-cloud-download"></i>
                                <a href="#" title="Course Materials" class="download-link">
                                    <span class="dwnld-title">Plan détaillé</span>
                                    <span class="help-block">Fusce vitae ultrices tortor, tincidunt consectetur purus (12.5 MB)</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-cloud-download"></i>
                                <a href="#" title="Course Materials" class="download-link">
                                    <span class="dwnld-title">Exercices</span>
                                    <span class="help-block">Cras dignissim libero id feugiat pharetra. (32.8 MB)</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-cloud-download"></i>
                                <a href="#" title="Course Materials" class="download-link">
                                    <span class="dwnld-title">Calendrier</span>
                                    <span class="help-block">Lorem ipsum dolor sit amet, consectetur adipiscing elit. (9.1 MB)</span>
                                </a>
                            </li>
                            <li>
                                <i class="fa fa-cloud-download"></i>
                                <a href="#" title="Course Materials" class="download-link">
                                    <span class="dwnld-title">Directives</span>
                                    <span class="help-block">Aliquam at porta elit. (10.4 MB)</span>
                                </a>
                            </li>
                        </ul><!-- downloads list end -->
                        <h6>Programme</h6>
                        <p>
                            Aenean eu sem non diam iaculis gravida. Nam imperdiet eleifend <strong>erat ut viverra</strong>.
                            Fusce vitae ultrices tortor, tincidunt consectetur purus. Donec ut suscipit nisi. Ut vitae venenatis dolor.
                            Phasellus volutpat sapien sit amet tellus gravida, nec dignissim elit congue. Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Vivamus leo magna, condimentum vitae feugiat id, lobortis et nibh.
                        </p>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Event</th>
                                <th>Schedule</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>consectetur pulvinar</td>
                                <td>16:00 - 17:00</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>metus pellentesque</td>
                                <td>17:15 - 17:30</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>varius elit</td>
                                <td>17:30 - 18:00</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>porttitor tempor</td>
                                <td>18:00 - 20:00</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>suscipit ligula</td>
                                <td>20:00 - 21:00</td>
                            </tr>
                            </tbody>
                        </table>


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