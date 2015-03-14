@extends('layouts.master')
@section('content')

<div class="row no-gutter"><!-- row -->
    <div class="col-lg-12 col-md-12"><!-- doc body wrapper -->
        <div class="col-padded"><!-- inner custom column -->
            <div class="row gutter"><!-- row -->
                <div class="col-lg-12 col-md-12">
                    <h1 class="title-widget remove-margin-bottom">La législation suisse</h1>
                    <div class="news-title-meta">
                        <h1 class="page-title">La structure d’une loi fédérale</h1>
                    </div>
                    <div class="news-body clearfix"><!-- course content -->

                        <div class="row gutter"><!-- row -->
                            <div class="col-lg-3 col-md-3">
                                <h3>Structure</h3>
                                    <ol id="guides" class="list-guide">
                                        <li><a class="expose" data-anchor="intitule" href="#">Intitulé</a>
                                            <ul>
                                                <li><a class="expose" data-anchor="numero" href="#">Numéro</a></li>
                                                <li><a class="expose" data-anchor="forme" href="#">Forme de l'acte</a></li>
                                                <li><a class="expose" data-anchor="objet" href="#">Objet</a></li>
                                                <li><a class="expose" data-anchor="court" href="#">Titre court</a></li>
                                                <li><a class="expose" data-anchor="sigle" href="#">Sigle</a></li>
                                                <li><a class="expose" data-anchor="date" href="#">Date d'adoption</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="expose" data-anchor="preambule" href="#">Préambule</a>
                                            <ul>
                                                <li><a class="expose" data-anchor="organe" href="#">Organe</a></li>
                                                <li><a class="expose" data-anchor="visa" href="#">Visa, Base cst.</a></li>
                                                <li><a class="expose" data-anchor="message" href="#">Réf. au Message du CF</a></li>
                                            </ul>
                                        </li>
                                    </ol>
                            </div>
                            <div class="col-lg-9 col-md-9">

                                <div id="content">

                                    <?php $popover = ' tabindex="0" data-trigger="focus" data-toggle="popover" data-placement="bottom" '; ?>

                                    <div id="intitule">
                                        <h1 id="numero" {{$popover}} title="Numéro" data-content="Chaque acte inclut dans le recueil dispose d'un numéro RS correspondant à sa position dans le classement thématique">251</h1>
                                        <h1>
                                            <span id="forme" {{$popover}} title="La forme de l'acte" data-content="L'intitulé indique le type d'acte normatif dont il s'agit selon la classification propre à l'ordre constitutionnel de l'État (p.ex. une loi, un arrêté, une ordonnance, un décret, un règlement, une convention, un protocole)">Loi fédérale</span>
                                            <span id="objet" {{$popover}} title="Objet" data-content="Détermination de l'objet">sur les cartels et autres restrictions à la concurrence</span>
                                        </h1>
                                        <h2>
                                            <span id="court" {{$popover}} title="Titre abrégé  officiel" data-content="Pour citer plus aisément un acte législatif, on peut lui donner un titre court. Il est inscrit dans le RS, entre parenthèses, sous le titre complet."> (Loi sur les cartels </span> ,
                                            <span id="sigle" {{$popover}} title="Sigle" data-content="On parle tantôt de sigle, tantôt d'abréviation (« die Abkürzung » ; «l'abbreviazione »). Les sigles choisis ont d'abord été le fait de la pratique; la diversité qui en résultait était source de confusions. C'est pourquoi le Tribunal fédéral a peu à peu consacré des sigles officieux, qui figurent au début de chaque volume du Recueil officiel de ses arrêts">LCart) </span>
                                        </h2>
                                        <p id="date" {{$popover}} title="Date" data-content="Date d'adoption">du 6 octobre 1995 (Etat le 1<sup>er</sup> décembre 2014)</p>
                                    </div>

                                    <div id="preambule" {{$popover}} title="Préambule" data-content="formule qui donne au texte ses fondements législatifs">
                                        <p>
                                            <em id="organe" {{$popover}} title="Organe" data-content="Organe qui a adopté le texte législatif">L'Assemblée fédérale de la Confédération suisse,</em>
                                        </p>
                                        <p><span id="visa" {{$popover}} title="Visa" data-content="Base cst.">vu</span> les art. 27, al. 1, 96<sup><a href="#fn1">1</a></sup>, 97, al. 2, et 122<sup><a href="#fn2">2</a></sup> de la Constitution
                                            <sup><a href="#fn3">3</a></sup>,
                                            <sup><a href="#fn4">4</a></sup> en application des dispositions du droit de la concurrence des accords internationaux,
                                            <span id="message" {{$popover}} title="Message" data-content="Réf. au Message du CF">vu le message du Conseil fédéral du 23 novembre 1994</span>
                                            <sup><a href="#fn5">5</a></sup>,
                                        </p>
                                        <p><em>arrête:</em></p>
                                    </div>

                                    <div id="article">

                                        <a name="id-1"></a>
                                        <h1 class="title clickable"><span class="expanderComparator"></span>Chapitre 1 Dispositions générales</h1>
                                        <div class="collapseable">
                                            <div class="a1 subpage" id="a1">
                                                <div class="articleTitle"><h5><a href="index.html#a1"><strong>Art. 1</strong> But</a></h5></div>
                                                <p>La présente loi a pour but d'empêcher les conséquences nuisibles
                                                    d'ordre économique ou social imputables aux cartels et aux autres
                                                    restrictions à la concurrence et de promouvoir ainsi la concurrence dans
                                                    l'intérêt d'une économie de marché fondée sur un régime libéral.</p>
                                            </div>
                                            <div class="a2 subpage" id="a2">
                                                <div class="articleTitle"><h5><a href="index.html#a2"><strong>Art.2</strong> Champ d'application</a></h5></div>
                                                <p><sup><a name="1">1</a></sup>La présente loi s'applique aux
                                                    entreprises de droit privé ou de droit public qui sont parties à des
                                                    cartels ou à d'autres accords en matière de concurrence, qui sont
                                                    puissantes sur le marché ou participent à des concentrations
                                                    d'entreprises.
                                                </p>
                                                <p><sup><a name="1bis">1bis</a></sup>Est soumise à la présente loi
                                                    toute entreprise engagée dans le processus économique qui offre ou
                                                    acquiert des biens ou des services, indépendamment de son organisation
                                                    ou de sa forme juridique.<sup><a href="#fn-#a2-1">1</a></sup>
                                                </p>
                                                <p><sup><a name="2">2</a></sup>La présente loi est applicable aux
                                                    états de fait qui déploient leurs effets en Suisse, même s'ils se sont
                                                    produits à l'étranger  .
                                                </p>
                                                <div class="fns">
                                                    <p><small><a name="fn-#a2-1"><sup>1</sup></a> Introduit par le ch. I de
                                                            la LF du 20 juin 2003, en vigueur depuis le 1<sup>er</sup> avr.
                                                            2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                <strong>2004</strong> 1385</a>; <a
                                                                    href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                <strong>2002</strong> 1911</a> 5128).
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="a3 subpage" id="a3">
                                                <div class="articleTitle">
                                                    <h5><a href="index.html#a3"><strong>Art. 3</strong> Rapport avec d'autres prescriptions légales</a></h5>
                                                </div>
                                                <p>
                                                    <sup><a name="1">1</a></sup>Les prescriptions qui, sur un
                                                    marché, excluent de la concurrence certains biens ou services sont
                                                    réservées, notamment:
                                                </p>
                                                <dl compact="compact">
                                                    <dt>a.</dt>
                                                    <dd>celles qui établissent un régime de marché ou de prix de caractère
                                                        étatique;
                                                    </dd>
                                                    <dt>b.</dt>
                                                    <dd>celles qui chargent certaines entreprises de l'exécution de tâches
                                                        publiques en leur accordant des droits spéciaux.
                                                    </dd>
                                                </dl>
                                                <p><sup><a name="2">2</a></sup>La présente loi n'est pas applicable
                                                    aux effets sur la concurrence qui découlent exclusivement de la
                                                    législation sur la propriété intellectuelle. En revanche, les
                                                    restrictions aux importations fondées sur des droits de propriété
                                                    intellectuelle sont soumises à la présente loi.<sup><a href="#fn-#a3-1">1</a></sup>
                                                </p>
                                                <p>
                                                    <sup><a name="3">3</a></sup>
                                                    Les procédures prévues par la présente
                                                    loi en vue de l'appréciation des restrictions à la concurrence priment
                                                    les procédures prévues par la loi fédérale du 20décembre 1985
                                                    concernant la surveillance des prix<sup><a href="#fn-#a3-2">2</a></sup>,
                                                    sauf décision contraire prise d'un commun accord par la Commission de la
                                                    concurrence et le Surveillant des prix.
                                                </p>
                                                <div class="fns">
                                                    <p>
                                                        <small><a name="fn-#a3-1"><sup>1</sup></a> Phrase introduite par le
                                                            ch. I de la LF du 20 juin 2003, en vigueur depuis le
                                                            1<sup>er</sup> avr. 2004 (<a
                                                                    href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                <strong>2004</strong> 1385</a>; <a
                                                                    href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                <strong>2002</strong> 1911</a> 5128).<a name="fn-#a3-2"><sup>2</sup></a>
                                                            RS <strong><a href="http://www.admin.ch/ch/f/rs/c942_20.html">942.20</a></strong>
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="a4 subpage" id="a4">
                                                <div class="articleTitle"><h5><a href="index.html#a4"><strong>Art.m4</strong> Définitions</a></h5></div>
                                                <p><sup><a name="1">1</a></sup>Par accords en matière de
                                                    concurrence, on entend les conventions avec ou sans force obligatoire
                                                    ainsi que les pratiques concertées d'entreprises occupant des échelons
                                                    du marché identiques ou différents, dans la mesure où elles visent ou
                                                    entraînent une restriction à la concurrence.
                                                </p>
                                                <p>
                                                    <sup><a name="2">2</a></sup>
                                                    Par entreprises dominant le marché, on
                                                    entend une ou plusieurs entreprises qui sont à même, en matière d'offre
                                                    ou de demande, de se comporter de manière essentiellement indépendante
                                                    par rapport aux autres participants au marché (concurrents, fournisseurs
                                                    ou acheteurs).<sup><a href="#fn-#a4-1">1</a></sup>
                                                </p>
                                                <p><sup><a name="3">3</a></sup>Par concentration d'entreprises, on entend:</p>
                                                <dl compact="compact">
                                                    <dt>a.</dt>
                                                    <dd>la fusion de deux ou de plusieurs entreprises jusque-là
                                                        indépendantes les unes des autres;
                                                    </dd>
                                                    <dt>b.</dt>
                                                    <dd>toute opération par laquelle une ou plusieurs entreprises
                                                        acquièrent, notamment par prise de participation au capital ou
                                                        conclusion d'un contrat, le contrôle direct ou indirect d'une ou de
                                                        plusieurs entreprises jusque-là indépendantes ou d'une partie de
                                                        celles-ci.
                                                    </dd>
                                                </dl>
                                                <div class="fns">
                                                    <p>
                                                        <small><a name="fn-#a4-1"><sup>1</sup>
                                                            </a> Nouvelle teneur selon le ch. I de la LF du 20 juin 2003, en vigueur depuis le 1<sup>er</sup> avr. 2004
                                                            (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO <strong>2004</strong> 1385</a>;
                                                            <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF<strong>2002</strong> 1911</a> 5128).
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>

                                        </div>

                                        <a name="id-2"></a>
                                        <h1 class="title clickable"><span class="expanderComparator"></span>Chapitre 2 Dispositions de droit matériel</h1>
                                        <div class="collapseable">
                                            <a name="id-2-1"></a>

                                            <h2 class="title clickable"><span class="expanderComparator"></span>Section 1 Restrictions illicites à la concurrence</h2>

                                            <div class="collapseable">
                                                <div class="a5 subpage" id="a5">
                                                    <div class="articleTitle"><h5><a href="index.html#a5"><strong>Art. 5</strong> Accords illicites</a></h5></div>
                                                     <p><sup><a name="1">1</a></sup>Les accords qui affectent de
                                                        manière notable la concurrence sur le marché de certains biens ou
                                                        services et qui ne sont pas justifiés par des motifs d'efficacité
                                                        économique, ainsi que tous ceux qui conduisent à la suppression
                                                        d'une concurrence efficace, sont illicites.</p>

                                                    <p><sup><a name="2">2</a></sup>Un accord est réputé justifié par
                                                        des motifs d'efficacité économique:</p>
                                                    <dl compact="compact">
                                                        <dt>a.</dt>
                                                        <dd>lorsqu'il est nécessaire pour réduire les coûts de production ou
                                                            de distribution, pour améliorer des produits ou des procédés de
                                                            fabrication, pour promouvoir la recherche ou la diffusion de
                                                            connaissances techniques ou professionnelles, ou pour exploiter
                                                            plus rationnellement des ressources; et
                                                        </dd>
                                                        <dt>b.</dt>
                                                        <dd>lorsque cet accord ne permettra en aucune façon aux entreprises
                                                            concernées de supprimer une concurrence efficace.
                                                        </dd>
                                                    </dl>
                                                    <p><sup><a name="3">3</a></sup>Sont présumés entraîner la
                                                        suppression d'une concurrence efficace dans la mesure où ils
                                                        réunissent des entreprises effectivement ou potentiellement
                                                        concurrentes, les accords:</p>
                                                    <dl compact="compact">
                                                        <dt>a.</dt>
                                                        <dd>qui fixent directement ou indirectement des prix;</dd>
                                                        <dt>b.</dt>
                                                        <dd>qui restreignent des quantités de biens ou de services à
                                                            produire, à acheter ou à fournir;
                                                        </dd>
                                                        <dt>c.</dt>
                                                        <dd>qui opèrent une répartition géographique des marchés ou une
                                                            répartition en fonction des partenaires commerciaux.
                                                        </dd>
                                                    </dl>
                                                    <p><sup><a name="4">4</a></sup>Sont également présumés entraîner
                                                        la suppression d'une concurrence efficace les accords passés entre
                                                        des entreprises occupant différents échelons du marché, qui imposent
                                                        un prix de vente minimum ou un prix de vente fixe, ainsi que les
                                                        contrats de distribution attribuant des territoires, lorsque les
                                                        ventes par d'autres fournisseurs agréés sont exclues.<sup><a href="#fn-#a5-1">1</a></sup>
                                                    </p>
                                                    <div class="fns">
                                                        <p>
                                                            <small><a name="fn-#a5-1"><sup>1</sup></a> Introduit par le ch.
                                                                I de la LF du 20 juin 2003, en vigueur depuis le
                                                                1<sup>er</sup> avr. 2004 (<a
                                                                        href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                    <strong>2004</strong> 1385</a>; <a
                                                                        href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                    <strong>2002</strong> 1911</a> 5128).
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="a6 subpage" id="a6">
                                                    <div class="articleTitle"><h5><a href="index.html#a6"><strong>Art. 6</strong> Catégories d'accords réputés justifiés</a>
                                                        </h5></div>
                                                    <p><sup><a name="1">1</a></sup>Les conditions auxquelles
                                                        des accords en matière de concurrence sont en règle générale réputés
                                                        justifiés par des motifs d'efficacité économique peuvent être fixées
                                                        par voie d'ordonnances ou de communications. A cet égard, seront
                                                        notamment pris en considération:</p>
                                                    <dl compact="compact">
                                                        <dt>a.</dt>
                                                        <dd>les accords de coopération en matière de recherche et de
                                                            développement;
                                                        </dd>
                                                        <dt>b.</dt>
                                                        <dd>les accords de spécialisation et de rationalisation, y compris
                                                            les accords y relatifs concernant l'utilisation de schémas de
                                                            calcul;
                                                        </dd>
                                                        <dt>c.</dt>
                                                        <dd>les accords en vue de l'octroi d'une exclusivité sur
                                                            l'acquisition ou la vente de certains biens ou services;
                                                        </dd>
                                                        <dt>d.</dt>
                                                        <dd>les accords relatifs à la concession de licences exclusives de
                                                            droits de propriété intellectuelle;
                                                        </dd>
                                                        <dt>e.<sup><a href="#fn-#a6-1">1</a></sup></dt>
                                                        <dd>les accords ayant pour but d'améliorer la compétitivité des
                                                            petites et moyennes entreprises, dans la mesure où ils n'ont
                                                            qu'un impact restreint sur le marché.
                                                        </dd>
                                                    </dl>
                                                    <p><sup><a name="2">2</a></sup>Les ordonnances et communications
                                                        relatives aux accords en matière de concurrence peuvent aussi
                                                        reconnaître comme étant réputées justifiées des formes particulières
                                                        de coopération propres à certaines branches de l'économie, notamment
                                                        des accords concernant la transposition rationnelle de prescriptions
                                                        de droit public pour la protection des clients ou des investisseurs
                                                        en matière de services financiers.</p>

                                                    <p><sup><a name="3">3</a></sup>Les communications sont publiées
                                                        dans la Feuille fédérale par la Commission de la concurrence. Le
                                                        Conseil fédéral édicte les ordonnances prévues aux al. 1 et 2.</p>
                                                    <div class="fns">
                                                        <p>
                                                            <small><a name="fn-#a6-1"><sup>1</sup></a> Introduite par le ch.
                                                                I de la LF du 20 juin 2003, en vigueur depuis le
                                                                1<sup>er</sup> avr. 2004 (<a
                                                                        href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                    <strong>2004</strong> 1385</a>; <a
                                                                        href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                    <strong>2002</strong> 1911</a> 5128).
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="a7 subpage" id="a7">
                                                    <div class="articleTitle"><h5><a href="index.html#a7"><strong>Art.  7</strong> Pratiques illicites d'entreprises ayant une
                                                                position dominante</a></h5></div>
                                                    <p><sup><a name="1">1</a></sup>Les pratiques d'entreprises
                                                        ayant une position dominante sont réputées illicites lorsque
                                                        celles-ci abusent de leur position et entravent ainsi l'accès
                                                        d'autres entreprises à la concurrence ou son exercice, ou
                                                        désavantagent les partenaires commerciaux.</p>

                                                    <p><sup><a name="2">2</a></sup>Sont en particulier réputés illicites:</p>
                                                    <dl compact="compact">
                                                        <dt>a.</dt>
                                                        <dd>le refus d'entretenir des relations commerciales (p.ex.
                                                            refus de livrer ou d'acheter des marchandises);
                                                        </dd>
                                                        <dt>b.</dt>
                                                        <dd>la discrimination de partenaires commerciaux en matière de prix
                                                            ou d'autres conditions commerciales;
                                                        </dd>
                                                        <dt>c.</dt>
                                                        <dd>le fait d'imposer des prix ou d'autres conditions commerciales
                                                            inéquitables;
                                                        </dd>
                                                        <dt>d.</dt>
                                                        <dd>la sous-enchère en matière de prix ou d'autres conditions
                                                            commerciales, dirigée contre un concurrent déterminé;
                                                        </dd>
                                                        <dt>e.</dt>
                                                        <dd>la limitation de la production, des débouchés ou du
                                                            développement technique;
                                                        </dd>
                                                        <dt>f.</dt>
                                                        <dd>le fait de subordonner la conclusion de contrats à la condition
                                                            que les partenaires acceptent ou fournissent des prestations
                                                            supplémentaires.
                                                        </dd>
                                                    </dl>
                                                </div>
                                                <div class="a8 subpage" id="a8">
                                                    <div class="articleTitle"><h5><a href="index.html#a8"><strong>Art. 8</strong> Autorisation exceptionnelle fondée sur des
                                                                intérêts publics prépondérants</a></h5></div>
                                                    <p>Les accords en matière de concurrence et les pratiques
                                                        d'entreprises ayant une position dominante dont l'autorité
                                                        compétente a constaté le caractère illicite peuvent être autorisés
                                                        par le Conseil fédéral à la demande des entreprises concernées si, à
                                                        titre exceptionnel, ils sont nécessaires à la sauvegarde d'intérêts
                                                        publics prépondérants.</p></div>
                                                </div>
                                                <a name="id-2-2"></a>

                                            <h2 class="title clickable"><span class="expanderComparator"></span>Section 2 Concentrations d'entreprises</h2>
                                            <div class="collapseable">
                                                <div class="a9 subpage" id="a9">
                                                    <div class="articleTitle"><h5><a href="index.html#a9"><strong>Art. 9</strong> Notification des opérations de concentration</a></h5></div>
                                                    <p><sup><a name="1">1</a></sup>Les opérations de
                                                        concentration d'entreprises doivent être notifiées avant leur
                                                        réalisation à la Commission de la concurrence lorsque, dans le
                                                        dernier exercice précédant la concentration:</p>
                                                    <dl compact="compact">
                                                        <dt>a.</dt>
                                                        <dd>les entreprises participantes ont réalisé ensemble un chiffre
                                                            d'affaires minimum de 2 milliards de francs ou un chiffre
                                                            d'affaires en Suisse d'au moins 500 millions de francs, et
                                                        </dd>
                                                        <dt>b.</dt>
                                                        <dd>au moins deux des entreprises participantes ont réalisé
                                                            individuellement en Suisse un chiffre d'affaires minimum de 100
                                                            millions de francs.
                                                        </dd>
                                                    </dl>
                                                    <p><sup><a name="2">2</a></sup>…<sup><a href="#fn-#a9-1">1</a></sup></p>
                                                    <p><sup><a name="3">3</a></sup>Pour les sociétés d'assurances, il
                                                        est tenu compte, au lieu du chiffre d'affaires, du montant total des
                                                        primes brutes annuelles; pour les banques et les autres
                                                        intermédiaires financiers soumis aux dispositions de la loi du 8novembre
                                                        1934 sur les banques<sup><a href="#fn-#a9-2">2</a></sup> relatives à
                                                        l'établissement des comptes, il est tenu compte du produit
                                                        brut.<sup><a href="#fn-#a9-3">3</a></sup></p>

                                                    <p><sup><a name="4">4</a></sup>Nonobstant les al. 1 à 3, la
                                                        notification est obligatoire lorsque, au terme d'une procédure
                                                        engagée en vertu de la présente loi, une décision passée en force
                                                        établit qu'une entreprise participante occupe en Suisse une position
                                                        dominante sur un marché, et lorsque la concentration concerne soit
                                                        ce marché, soit un marché voisin ou situé en amont ou en aval.</p>

                                                    <p><sup><a name="5">5</a></sup>L'Assemblée fédérale peut, par voie
                                                        d'arrêté de portée générale non soumis au référendum:</p>
                                                    <dl compact="compact">
                                                        <dt>a.</dt>
                                                        <dd>adapter aux circonstances les montants fixés aux al. 1 à 3;</dd>
                                                        <dt>b.</dt>
                                                        <dd>assortir de conditions spéciales l'obligation de notifier des
                                                            concentrations d'entreprises dans certaines branches de
                                                            l'économie.
                                                        </dd>
                                                    </dl>
                                                    <hr>
                                                    <div class="fns">
                                                        <p>
                                                            <small><a name="fn-#a9-1"><sup>1</sup></a> Abrogé par le ch. I
                                                                de la LF du 20 juin 2003, avec effet au 1<sup>er</sup> avr.
                                                                2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                    <strong>2004</strong> 1385</a>; <a
                                                                        href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                    <strong>2002</strong> 1911</a> 5128).<a
                                                                        name="fn-#a9-2"><sup>2</sup></a> RS <strong><a
                                                                            href="http://www.admin.ch/ch/f/rs/c952_0.html">952.0</a></strong><a
                                                                        name="fn-#a9-3"><sup>3</sup></a> Nouvelle teneur
                                                                selon le ch. I de la LF du 20 juin 2003, en vigueur depuis
                                                                le 1<sup>er</sup> avr. 2004 (<a
                                                                        href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                    <strong>2004</strong> 1385</a>; <a
                                                                        href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                    <strong>2002</strong> 1911</a> 5128).
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="a10 subpage" id="a10">
                                                    <div class="articleTitle"><h5><a href="index.html#a10"><strong>Art.  10</strong> Appréciation des concentrations  d'entreprises</a></h5></div>
                                                    <p><sup><a name="1">1</a></sup>Les concentrations
                                                        d'entreprises soumises à l'obligation de notifier font l'objet d'un
                                                        examen par la Commission de la concurrence lorsqu'un examen
                                                        préalable (art.32, al. 1) fait apparaître des indices qu'elles
                                                        créent ou renforcent une position dominante.</p>

                                                    <p><sup><a name="2">2</a></sup>La Commission de la concurrence
                                                        peut interdire la concentration ou l'autoriser moyennant des
                                                        conditions ou des charges lorsqu'il résulte de l'examen que la
                                                        concentration:</p>
                                                    <dl compact="compact">
                                                        <dt>a.</dt>
                                                        <dd>crée ou renforce une position dominante capable de supprimer une
                                                            concurrence efficace, et
                                                        </dd>
                                                        <dt>b.</dt>
                                                        <dd>ne provoque pas une amélioration des conditions de concurrence
                                                            sur un autre marché, qui l'emporte sur les inconvénients de la
                                                            position dominante.
                                                        </dd>
                                                    </dl>
                                                    <p><sup><a name="3">3</a></sup>Lorsqu'une concentration de banques
                                                        au sens de la loi du 8 novembre 1934 sur les banques<sup><a
                                                                    href="#fn-#a10-1">1</a></sup> est jugée nécessaire par
                                                        l'Autorité fédérale de surveillance des marchés financiers (FINMA)
                                                        pour protéger les créanciers, il peut être tenu compte en priorité
                                                        des intérêts de ces derniers. Dans ce cas, la FINMA se substitue à
                                                        la Commission de la concurrence, qu'elle invite à donner son
                                                        avis.<sup><a href="#fn-#a10-2">2</a></sup></p>

                                                    <p><sup><a name="4">4</a></sup>En évaluant les effets d'une
                                                        concentration d'entreprises sur l'efficacité de la concurrence, la
                                                        Commission de la concurrence tient aussi compte de l'évolution du
                                                        marché ainsi que de la position des entreprises dans la concurrence
                                                        internationale.</p>
                                                    <div class="fns">
                                                        <p>
                                                            <small><a name="fn-#a10-1"><sup>1</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c952_0.html">952.0</a></strong>
                                                                <a name="fn-#a10-2"><sup>2</sup></a> Nouvelle teneur
                                                                selon le ch. 8 de l'annexe à la LF du 22 juin 2007 sur la
                                                                surveillance des marchés financiers, en vigueur depuis le   1<sup>er</sup> janv. 2009
                                                                (<a  href="http://www.admin.ch/ch/f/as/2008/5207.pdf">RO
                                                                    <strong>2008</strong> 5207</a>; <a  href="http://www.admin.ch/ch/f/ff/2006/2741.pdf">FF
                                                                    <strong>2006</strong> 2741</a>).
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="a11 subpage" id="a11">
                                                    <div class="articleTitle"><h5><a href="index.html#a11"><strong>Art. 11</strong> Autorisation exceptionnelle fondée sur des  intérêts publics prépondérants</a></h5></div>
                                                     <p>Une concentration d'entreprises qui a été interdite en vertu
                                                        de l'art. 10 peut être autorisée par le Conseil fédéral à la demande
                                                        des entreprises participantes si, à titre exceptionnel, elle est
                                                        nécessaire à la sauvegarde d'intérêts publics prépondérants.
                                                     </p>
                                                </div>
                                            </div>
                                        </div>

                                        <a name="id-3"></a>
                                            <h1 class="title clickable"><span class="expanderComparator"></span>Chapitre 3 Dispositions de procédure civile</h1>
                                            <div class="collapseable"><div class="a12 subpage" id="a12"><div class="articleTitle"><h5><a href="index.html#a12"><strong>Art. 12</strong> Actions découlant d'une entrave à la concurrence</a></h5></div> <p><sup><a name="1">1</a></sup>La personne qu'une restriction illicite à la concurrence entrave dans l'accès à la concurrence ou l'exercice de celle-ci, peut demander:</p><dl compact="compact"><dt>a.</dt><dd>la suppression ou la cessation de l'entrave;</dd><dt>b.</dt><dd>la réparation du dommage et du tort moral conformément au code des obligations<sup><a href="#fn-#a12-1">1</a></sup>;</dd><dt>c.</dt><dd>la remise du gain réalisé indûment selon les dispositions sur la gestion d'affaires.</dd></dl><p><sup><a name="2">2</a></sup>Constituent en particulier une entrave à la concurrence le refus de traiter des affaires ou l'adoption de mesures discriminatoires.</p><p><sup><a name="3">3</a></sup>Les actions prévues à l'al. 1 peuvent aussi être intentées par la personne qui, en raison d'une restriction licite à la concurrence, subit une entrave plus grave que ne l'exigerait l'application de ladite restriction.</p><hr><div class="fns"><p><small><a name="fn-#a12-1"><sup>1</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c220.html">220</a></strong></small></p></div></div><div class="a13 subpage" id="a13"><div class="articleTitle"><h5><a href="index.html#a13"><strong>Art. 13</strong> Exercice des actions en suppression ou en cessation de l'entrave</a></h5></div>  <p>Afin d'assurer la suppression ou la cessation de l'entrave à la concurrence, le juge, à la requête du demandeur, peut notamment décider que:</p><dl compact="compact"><dt>a.</dt><dd>des contrats sont nuls en tout ou en partie;</dd><dt>b.</dt><dd>celui qui est à l'origine de l'entrave à la concurrence doit conclure avec celui qui la subit des contrats conformes au marché et aux conditions usuelles de la branche.</dd></dl></div><div class="a14 subpage" id="a14"><div class="articleTitle"><h5><a href="index.html#a14"><strong>Art. 14</strong></a><sup><a href="#fn-#a14-1">1</a></sup><a href="index.html#a14"></a></h5></div>  <hr><div class="fns"><p><small><a name="fn-#a14-1"><sup>1</sup></a> Abrogé par le ch. II 16 de l'annexe 1 au CPC du 19 déc. 2008, avec effet au 1<sup>er</sup> janv. 2011 (<a href="http://www.admin.ch/ch/f/as/2010/1739.pdf">RO <strong>2010</strong> 1739</a>; <a href="http://www.admin.ch/ch/f/ff/2006/6841.pdf">FF <strong>2006</strong> 6841</a>).</small></p></div></div><div class="a15 subpage" id="a15"><div class="articleTitle"><h5><a href="index.html#a15"><strong>Art. 15</strong> Appréciation du caractère licite d'une restriction à la concurrence</a></h5></div>  <p><sup><a name="1">1</a></sup>Lorsque la licéité d'une restriction à la concurrence est mise en cause au cours d'une procédure civile, l'affaire est transmise pour avis à la Commission de la concurrence.</p><p><sup><a name="2">2</a></sup>Lorsqu'une restriction à la concurrence en soi illicite est présentée comme étant nécessaire à la sauvegarde d'intérêts publics prépondérants, la question est transmise au Conseil fédéral, qui statue.</p></div><div class="a16 subpage" id="a16"><div class="articleTitle"><h5><a href="index.html#a16"><strong>Art. 16</strong> et <strong>17</strong></a><sup><a href="#fn-#a16-1">1</a></sup><a href="index.html#a16"></a></h5></div>  <hr><div class="fns"><p><small><a name="fn-#a16-1"><sup>1</sup></a> Abrogés par le ch. II 16 de l'annexe 1 au CPC du 19 déc. 2008, avec effet au 1<sup>er</sup> janv. 2011 (<a href="http://www.admin.ch/ch/f/as/2010/1739.pdf">RO <strong>2010</strong> 1739</a>; <a href="http://www.admin.ch/ch/f/ff/2006/6841.pdf">FF <strong>2006</strong> 6841</a>).</small></p></div></div></div>

                                        <a name="id-4"></a>
                                            <h1 class="title clickable"><span class="expanderComparator"></span>Chapitre 4 Dispositions de procédure administrative</h1>
                                            <div class="collapseable"><a name="id-4-1"></a><h2 class="title clickable"><span class="expanderComparator"></span>Section 1 Autorités en matière de concurrence</h2><div class="collapseable"><div class="a18 subpage" id="a18"><div class="articleTitle"><h5><a href="index.html#a18"><strong>Art. 18</strong> Commission de la concurrence</a></h5></div>  <p><sup><a name="1">1</a></sup>Le Conseil fédéral institue la Commission de la concurrence (commission) et nomme les membres de la présidence.<sup><a href="#fn-#a18-1">1</a></sup></p><p><sup><a name="2">2</a></sup>La commission comprend entre onze et quinze membres. Ceux-ci sont en majorité des experts indépendants.</p><p><sup><a name="2bis">2bis</a></sup>Les membres de la commission signalent leurs intérêts dans un registre des intérêts.<sup><a href="#fn-#a18-2">2</a></sup></p><p><sup><a name="3">3</a></sup>Elle prend toutes les décisions qui ne sont pas expressément réservées à une autre autorité. Elle adresse des recommandations (art. 45, al. 2) et des préavis (art. 46, al.2) aux autorités politiques, et élabore des avis (art. 47, al. 1).</p><hr><div class="fns"><p><small><a name="fn-#a18-1"><sup>1</sup></a> Nouvelle teneur selon le ch. I de la LF du 20 juin 2003, en vigueur depuis le 1<sup>er</sup> avr. 2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF <strong>2002</strong> 1911</a> 5128).<a name="fn-#a18-2"><sup>2</sup></a> Introduit par le ch. I de la LF du 20 juin 2003, en vigueur depuis le 1<sup>er</sup> avr. 2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF <strong>2002</strong> 1911</a> 5128).</small></p></div></div><div class="a19 subpage" id="a19"><div class="articleTitle"><h5><a href="index.html#a19"><strong>Art. 19</strong> Organisation</a></h5></div>  <p><sup><a name="1">1</a></sup>La commission est indépendante des autorités administratives. Elle peut se composer de chambres dotées chacune du pouvoir de décision. Elle peut, dans des cas particuliers, charger un membre de sa présidence de régler des affaires urgentes ou d'importance mineure.</p><p><sup><a name="2">2</a></sup>La commission est rattachée administrativement au Département fédéral de l'économie, de la formation et de la recherche (DEFR)<sup><a href="#fn-#a19-1">1</a></sup>.</p><hr><div class="fns"><p><small><a name="fn-#a19-1"><sup>1</sup></a> Nouvelle expression selon le ch. I 6 de l'O du 15 juin 2012 (Réorganisation des départements), en vigueur depuis le 1<sup>er</sup> janv. 2013 (<a href="http://www.admin.ch/ch/f/as/2012/3655.pdf">RO <strong>2012</strong> 3655</a>). Il a été tenu compte de cette mod. dans tout le texte.</small></p></div></div><div class="a20 subpage" id="a20"><div class="articleTitle"><h5><a href="index.html#a20"><strong>Art. 20</strong> Règlement interne</a></h5></div>  <p><sup><a name="1">1</a></sup>La commission édicte un règlement qui fixe les détails de son organisation et notamment ses propres compétences, celles des membres de sa présidence et de chacune des chambres.</p><p><sup><a name="2">2</a></sup>Le règlement interne est soumis à l'approbation du Conseil fédéral.</p></div><div class="a21 subpage" id="a21"><div class="articleTitle"><h5><a href="index.html#a21"><strong>Art. 21</strong> Décisions</a></h5></div>  <p><sup><a name="1">1</a></sup>La commission et les chambres délibèrent valablement lorsque la moitié au moins des membres sont présents, ce nombre ne pouvant en aucun cas être inférieur à trois.</p><p><sup><a name="2">2</a></sup>Elles prennent leurs décisions à la majorité simple des membres présents; en cas d'égalité des voix, celle du président est prépondérante.</p></div><div class="a22 subpage" id="a22"><div class="articleTitle"><h5><a href="index.html#a22"><strong>Art. 22</strong> Récusation de membres de la commission</a></h5></div>  <p><sup><a name="1">1</a></sup>Tout membre de la commission doit se récuser lorsqu'il existe un motif de récusation en vertu de l'art. 10 de la loi fédérale du 20 décembre 1968 sur la procédure administrative<sup><a href="#fn-#a22-1">1</a></sup>.</p><p><sup><a name="2">2</a></sup>En règle générale, un membre de la commission n'est pas réputé avoir un intérêt personnel dans l'affaire ni donner lieu à un autre motif de récusation du simple fait qu'il représente une association faîtière.</p><p><sup><a name="3">3</a></sup>Si la récusation est contestée, la commission ou la chambre concernée statue en l'absence du membre en cause.</p><hr><div class="fns"><p><small><a name="fn-#a22-1"><sup>1</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c172_021.html">172.021</a></strong></small></p></div></div><div class="a23 subpage" id="a23"><div class="articleTitle"><h5><a href="index.html#a23"><strong>Art. 23</strong> Tâches du secrétariat</a></h5></div>  <p><sup><a name="1">1</a></sup>Le secrétariat prépare les affaires de la commission, mène les enquêtes et prend, avec un membre de sa présidence, les décisions de procédure. Il fait des propositions à la commission et exécute ses décisions. Il traite directement avec les intéressés, les tiers et les autorités.</p><p><sup><a name="2">2</a></sup>Le secrétariat établit des préavis (art. 46, al. 1) et conseille les services officiels et les entreprises sur des questions se rapportant à l'application de la loi.</p></div><div class="a24 subpage" id="a24"><div class="articleTitle"><h5><a href="index.html#a24"><strong>Art. 24</strong> Personnel du secrétariat</a></h5></div>  <p><sup><a name="1">1</a></sup>Le Conseil fédéral désigne la direction du secrétariat, et la commission, le reste de son personnel.</p><p><sup><a name="2">2</a></sup>Les rapports de service sont régis par la législation applicable au personnel de l'administration fédérale.</p></div><div class="a25 subpage" id="a25"><div class="articleTitle"><h5><a href="index.html#a25"><strong>Art. 25</strong> Secret de fonction et secrets d'affaires</a></h5></div>  <p><sup><a name="1">1</a></sup>Les autorités en matière de concurrence sont assujetties au secret de fonction.</p><p><sup><a name="2">2</a></sup>Les informations recueillies dans l'exercice de leurs fonctions ne peuvent être utilisées qu'à des fins de renseignement ou d'enquête.</p><p><sup><a name="3">3</a></sup>Elles peuvent communiquer au Surveillant des prix toutes les données nécessaires à l'accomplissement de sa tâche.</p><p><sup><a name="4">4</a></sup>Les publications des autorités en matière de concurrence ne doivent révéler aucun secret d'affaires.</p></div></div><a name="id-4-2"></a><h2 class="title clickable"><span class="expanderComparator"></span>Section 2 Enquêtes concernant des restrictions à la concurrence</h2><div class="collapseable"><div class="a26 subpage" id="a26"><div class="articleTitle"><h5><a href="index.html#a26"><strong>Art. 26</strong> Enquêtes préalables</a></h5></div>  <p><sup><a name="1">1</a></sup>Le secrétariat peut mener des enquêtes préalables d'office, à la demande des entreprises concernées ou sur dénonciation de tiers.</p><p><sup><a name="2">2</a></sup>Il peut proposer des mesures pour supprimer ou empêcher des restrictions à la concurrence.</p><p><sup><a name="3">3</a></sup>La procédure d'enquête préalable n'implique pas le droit de consulter les dossiers.</p></div><div class="a27 subpage" id="a27"><div class="articleTitle"><h5><a href="index.html#a27"><strong>Art. 27</strong> Ouverture d'une enquête</a></h5></div>  <p><sup><a name="1">1</a></sup>S'il existe des indices d'une restriction illicite à la concurrence, le secrétariat ouvre une enquête, d'entente avec un membre de la présidence de la commission. Il le fait dans tous les cas s'il y est invité par la commission ou par le DEFR.</p><p><sup><a name="2">2</a></sup>La commission arrête l'ordre dans lequel les enquêtes qui ont été ouvertes doivent être traitées.</p></div><div class="a28 subpage" id="a28"><div class="articleTitle"><h5><a href="index.html#a28"><strong>Art. 28</strong> Communication</a></h5></div>  <p><sup><a name="1">1</a></sup>Le secrétariat communique l'ouverture d'une enquête par publication officielle.</p><p><sup><a name="2">2</a></sup>Cette communication mentionne l'objet et les parties concernées par l'enquête. Elle contient en outre un avis invitant les tiers concernés à s'annoncer dans un délai de 30 jours s'ils désirent participer à l'enquête.</p><p><sup><a name="3">3</a></sup>L'absence de publication ne fait pas obstacle à la poursuite de l'enquête.</p></div><div class="a29 subpage" id="a29"><div class="articleTitle"><h5><a href="index.html#a29"><strong>Art. 29</strong> Accord amiable</a></h5></div>  <p><sup><a name="1">1</a></sup>Si le secrétariat considère qu'une restriction à la concurrence est illicite, il peut proposer aux entreprises concernées un accord amiable portant sur les modalités de la suppression de la restriction.</p><p><sup><a name="2">2</a></sup>L'accord requiert la forme écrite et doit être approuvé par la commission.</p></div><div class="a30 subpage" id="a30"><div class="articleTitle"><h5><a href="index.html#a30"><strong>Art. 30</strong> Décision</a></h5></div>  <p><sup><a name="1">1</a></sup>Sur proposition du secrétariat, la commission prend sa décision sur les mesures à prendre ou sur l'approbation de l'accord amiable.</p><p><sup><a name="2">2</a></sup>Les participants à l'enquête peuvent communiquer leur avis par écrit sur la proposition du secrétariat. La commission peut procéder à des auditions et charger le secrétariat de prendre des mesures supplémentaires pour les besoins de l'enquête.</p><p><sup><a name="3">3</a></sup>Si l'état de fait ou la situation juridique se sont modifiés de manière importante, la commission peut, sur proposition du secrétariat ou des intéressés, révoquer ou modifier sa décision.</p></div><div class="a31 subpage" id="a31"><div class="articleTitle"><h5><a href="index.html#a31"><strong>Art. 31</strong> Autorisation exceptionnelle</a></h5></div>  <p><sup><a name="1">1</a></sup>Lorsque la commission a rendu une décision reconnaissant le caractère illicite d'une restriction à la concurrence, les intéressés peuvent présenter dans les 30 jours au DEFR une demande d'autorisation exceptionnelle du Conseil fédéral fondée sur des intérêts publics prépondérants. Si une telle demande est présentée, le délai pour former un recours devant le Tribunal administratif fédéral ne commence à courir qu'après la notification de la décision du Conseil fédéral.<sup><a href="#fn-#a31-1">1</a></sup></p><p><sup><a name="2">2</a></sup>La demande d'autorisation exceptionnelle du Conseil fédéral peut également être présentée dans les 30 jours à compter de l'entrée en force d'une décision du Tribunal administratif fédéral ou du Tribunal fédéral.<sup><a href="#fn-#a31-2">2</a></sup></p><p><sup><a name="3">3</a></sup>L'autorisation exceptionnelle est de durée limitée et peut être assortie de conditions et de charges.</p><p><sup><a name="4">4</a></sup>Le Conseil fédéral peut, à la demande des intéressés, prolonger l'autorisation exceptionnelle lorsque les conditions de son octroi demeurent remplies.</p><hr><div class="fns"><p><small><a name="fn-#a31-1"><sup>1</sup></a> Nouvelle teneur de la phrase selon le ch. 27 de l'annexe à la LF du 17 juin 2005 sur le TAF, en vigueur depuis le 1<sup>er</sup> janv. 2007 (<a href="http://www.admin.ch/ch/f/as/2006/2197.pdf">RO <strong>2006</strong> 2197</a> 1069; <a href="http://www.admin.ch/ch/f/ff/2001/4000.pdf">FF <strong>2001</strong> 4000</a>).<a name="fn-#a31-2"><sup>2</sup></a> Nouvelle teneur selon le ch. 27 de l'annexe à la LF du 17 juin 2005 sur le TAF, en vigueur depuis le 1<sup>er</sup> janv. 2007 (<a href="http://www.admin.ch/ch/f/as/2006/2197.pdf">RO <strong>2006</strong> 2197</a> 1069; <a href="http://www.admin.ch/ch/f/ff/2001/4000.pdf">FF <strong>2001</strong> 4000</a>).</small></p></div></div></div><a name="id-4-3"></a><h2 class="title clickable"><span class="expanderComparator"></span>Section 3 Examen des concentrations d'entreprises</h2><div class="collapseable"><div class="a32 subpage" id="a32"><div class="articleTitle"><h5><a href="index.html#a32"><strong>Art. 32</strong> Ouverture de la procédure d'examen</a></h5></div>  <p><sup><a name="1">1</a></sup>A la réception de la notification d'une concentration d'entreprises (art.9), la commission décide s'il y a lieu de procéder à un examen de l'opération de concentration. La commission communique, dans le délai d'un mois à compter de la notification de l'opération de concentration, l'ouverture de l'examen de la concentration aux entreprises participantes. Faute de communication dans ce délai, la concentration peut être réalisée sans réserve.</p><p><sup><a name="2">2</a></sup>Les entreprises participantes s'abstiennent de réaliser la concentration pendant le délai d'un mois suivant sa notification, à moins que, à leur requête, la commission ne les ait autorisées à le faire pour des motifs importants.</p></div><div class="a33 subpage" id="a33"><div class="articleTitle"><h5><a href="index.html#a33"><strong>Art. 33</strong> Procédure d'examen</a></h5></div>  <p><sup><a name="1">1</a></sup>Si la commission décide de procéder à un examen, le secrétariat publie le contenu essentiel de la notification de la concentration et indique le délai dans lequel des tiers peuvent communiquer leur avis sur la concentration notifiée.</p><p><sup><a name="2">2</a></sup>La commission décide, au début de l'examen, si la concentration peut être provisoirement réalisée à titre exceptionnel ou si elle reste suspendue.</p><p><sup><a name="3">3</a></sup>La commission doit achever l'examen dans les quatre mois, à moins d'en être empêchée pour des causes imputables aux entreprises participantes.</p></div><div class="a34 subpage" id="a34"><div class="articleTitle"><h5><a href="index.html#a34"><strong>Art. 34</strong> Effets juridiques</a></h5></div>  <p>Les effets de droit civil d'une concentration soumise à l'obligation de notifier sont suspendus, sous réserve de l'écoulement du délai selon l'art. 32, al. 1, et de l'autorisation de réalisation provisoire. Faute de décision de la commission dans le délai imparti à l'art. 33, al. 3, la concentration est réputée autorisée, à moins que la commission constate dans une décision qu'elle a été empêchée de conduire l'examen pour des causes imputables aux entreprises participantes.</p></div><div class="a35 subpage" id="a35"><div class="articleTitle"><h5><a href="index.html#a35"><strong>Art. 35</strong> Violation de l'obligation de notifier</a></h5></div>  <p>Lorsqu'une concentration d'entreprises a été réalisée sans la notification dont elle aurait dû faire l'objet, la procédure selon les art. 32 à 38 sera engagée d'office. Le délai selon l'art. 32, al. 1, commence dans ce cas à courir lorsque l'autorité de concurrence est en possession des informations que doit contenir une notification.</p></div><div class="a36 subpage" id="a36"><div class="articleTitle"><h5><a href="index.html#a36"><strong>Art. 36</strong> Procédure d'autorisation exceptionnelle</a></h5></div>  <p><sup><a name="1">1</a></sup>Si la commission a interdit la concentration, les entreprises participantes peuvent présenter dans les 30 jours au DEFR une demande d'autorisation exceptionnelle du Conseil fédéral fondée sur des intérêts publics prépondérants. Si une telle demande est présentée, le délai pour former un recours devant le Tribunal administratif fédéral ne commence à courir qu'après la notification de la décision du Conseil fédéral.<sup><a href="#fn-#a36-1">1</a></sup></p><p><sup><a name="2">2</a></sup>La demande d'autorisation exceptionnelle du Conseil fédéral peut également être présentée dans les 30 jours à compter de l'entrée en force d'une décision du Tribunal administratif fédéral ou du Tribunal fédéral.<sup><a href="#fn-#a36-2">2</a></sup></p><p><sup><a name="3">3</a></sup>Le Conseil fédéral prend sa décision si possible dans les quatre mois suivant la réception de la demande.</p><hr><div class="fns"><p><small><a name="fn-#a36-1"><sup>1</sup></a> Nouvelle teneur de la phrase selon le ch. 27 de l'annexe à la LF du 17 juin 2005 sur le TAF, en vigueur depuis le 1<sup>er</sup> janv. 2007 (<a href="http://www.admin.ch/ch/f/as/2006/2197.pdf">RO <strong>2006</strong> 2197</a> 1069; <a href="http://www.admin.ch/ch/f/ff/2001/4000.pdf">FF <strong>2001</strong> 4000</a>).<a name="fn-#a36-2"><sup>2</sup></a> Nouvelle teneur selon le ch. 27 de l'annexe à la LF du 17 juin 2005 sur le TAF, en vigueur depuis le 1<sup>er</sup> janv. 2007 (<a href="http://www.admin.ch/ch/f/as/2006/2197.pdf">RO <strong>2006</strong> 2197</a> 1069; <a href="http://www.admin.ch/ch/f/ff/2001/4000.pdf">FF <strong>2001</strong> 4000</a>).</small></p></div></div><div class="a37 subpage" id="a37"><div class="articleTitle"><h5><a href="index.html#a37"><strong>Art. 37</strong> Rétablissement d'une concurrence efficace</a></h5></div>  <p><sup><a name="1">1</a></sup>Lorsqu'une concentration interdite est réalisée ou qu'une concentration est interdite après sa réalisation et qu'une autorisation exceptionnelle n'a pas été demandée ni octroyée pour la concentration, les entreprises participantes sont tenues de prendre les mesures rendues nécessaires par le rétablissement d'une concurrence efficace.</p><p><sup><a name="2">2</a></sup>La commission peut exiger des entreprises participantes qu'elles fassent des propositions qui les lient en vue du rétablissement d'une concurrence efficace. Elle leur impartit un délai à cette fin.</p><p><sup><a name="3">3</a></sup>Si la commission accepte les mesures proposées, elle peut décider comment et dans quel délai les entreprises participantes devront les mettre en oeuvre.</p><p><sup><a name="4">4</a></sup>Si la commission ne reçoit pas les propositions demandées ou qu'elle les rejette, elle peut décider:</p><dl compact="compact"><dt>a.</dt><dd>la séparation des entreprises ou des actifs regroupés;</dd><dt>b.</dt><dd>la cessation des effets du contrôle;</dd><dt>c.</dt><dd>d'autres mesures à même de rétablir une concurrence efficace.</dd></dl></div><div class="a38 subpage" id="a38"><div class="articleTitle"><h5><a href="index.html#a38"><strong>Art. 38</strong> Révocation et révision</a></h5></div>  <p><sup><a name="1">1</a></sup>La commission peut rapporter une autorisation ou décider l'examen d'une concentration malgré l'écoulement du délai de l'art. 32, al. 1, lorsque:</p><dl compact="compact"><dt>a.</dt><dd>les entreprises participantes ont fourni des indications inexactes;</dd><dt>b.</dt><dd>l'autorisation a été obtenue frauduleusement;</dd><dt>c.</dt><dd>les entreprises participantes contreviennent gravement à une charge dont a été assortie l'autorisation.</dd></dl><p><sup><a name="2">2</a></sup>Le Conseil fédéral peut rapporter une autorisation exceptionnelle pour les mêmes motifs.</p></div></div><a name="id-4-4"></a><h2 class="title clickable"><span class="expanderComparator"></span>Section 4 Procédure et voies de droit</h2><div class="collapseable"><div class="a39 subpage" id="a39"><div class="articleTitle"><h5><a href="index.html#a39"><strong>Art. 39</strong> Principe</a></h5></div>  <p>La loi fédérale du 20 décembre 1968 sur la procédure administrative<sup><a href="#fn-#a39-1">1</a></sup> est applicable aux procédures, dans la mesure où il n'y est pas dérogé dans les dispositions qui suivent.</p><hr><div class="fns"><p><small><a name="fn-#a39-1"><sup>1</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c172_021.html">172.021</a></strong></small></p></div></div><div class="a40 subpage" id="a40"><div class="articleTitle"><h5><a href="index.html#a40"><strong>Art. 40</strong> Obligation de renseigner</a></h5></div>  <p>Les parties à des ententes, les entreprises puissantes sur le marché, celles qui participent à des concentrations d'entreprises ainsi que les tiers concernés sont tenus de fournir aux autorités en matière de concurrence tous les renseignements utiles et de produire toutes les pièces nécessaires. Le droit de refuser de fournir des renseignements est régi par les art.16 et 17 de la loi fédérale du 20décembre 1968 sur la procédure administrative<sup><a href="#fn-#a40-1">1</a></sup>.<sup><a href="#fn-#a40-2">2</a></sup></p><hr><div class="fns"><p><small><a name="fn-#a40-1"><sup>1</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c172_021.html">172.021</a></strong><a name="fn-#a40-2"><sup>2</sup></a> Nouvelle teneur de la phrase selon le ch. I 3 de la LF du 28 sept. 2012 sur l'adaptation de disp. de procédure relatives au secret professionnel des avocats, en vigueur depuis le 1<sup>er</sup> mai 2013 (<a href="http://www.admin.ch/ch/f/as/2013/847.pdf">RO <strong>2013</strong> 847</a>; <a href="http://www.admin.ch/ch/f/ff/2011/7509.pdf">FF <strong>2011</strong> 7509</a>).</small></p></div></div><div class="a41 subpage" id="a41"><div class="articleTitle"><h5><a href="index.html#a41"><strong>Art. 41</strong> Entraide administrative</a></h5></div>  <p>Les services de la Confédération et des cantons sont tenus de coopérer aux recherches des autorités en matière de concurrence et de mettre à leur disposition les pièces nécessaires.</p></div><div class="a42 subpage" id="a42"><div class="articleTitle"><h5><a href="index.html#a42"><strong>Art. 42</strong></a><sup><a href="#fn-#a42-1">1</a></sup><a href="index.html#a42">Mesures d'enquête</a></h5></div>  <p><sup><a name="1">1</a></sup>Les autorités en matière de concurrence peuvent entendre des tiers comme témoins et contraindre les parties à l'enquête à faire des dépositions. L'art. 64 de la loi fédérale de procédure civile fédérale du 4 décembre 1947<sup><a href="#fn-#a42-2">2</a></sup> est applicable par analogie.</p><p><sup><a name="2">2</a></sup>Les autorités en matière de concurrence peuvent ordonner des perquisitions et saisir des pièces à conviction. Les art. 45 à 50 de la loi fédérale du 22 mars 1974 sur le droit pénal administratif<sup><a href="#fn-#a42-3">3</a></sup> sont applicables par analogie à ces mesures de contrainte. Les perquisitions et saisies sont ordonnées, sur demande du secrétariat, par un membre de la présidence.</p><hr><div class="fns"><p><small><a name="fn-#a42-1"><sup>1</sup></a> Nouvelle teneur selon le ch. I de la LF du 20 juin 2003, en vigueur depuis le 1<sup>er</sup> avr. 2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF <strong>2002</strong> 1911</a> 5128).<a name="fn-#a42-2"><sup>2</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c273.html">273</a></strong><a name="fn-#a42-3"><sup>3</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c313_0.html">313.0</a></strong></small></p></div></div><div class="a42a subpage" id="a42a"><div class="articleTitle"><h5><a href="index.html#a42a"><strong>Art. 42</strong><em>a</em></a><sup><a href="#fn-#a42a-1">1</a></sup><a href="index.html#a42a">Enquêtes lors de procédures engagées au titre de l'accord sur le transport aérien entre la Suisse et la CE</a></h5></div>  <p><sup><a name="1">1</a></sup>La commission est l'autorité suisse qui collabore avec les institutions de la Communauté européenne selon l'art. 11 de l'accord du 21 juin 1999 entre la Confédération suisse et la Communauté européenne sur le transport aérien<sup><a href="#fn-#a42a-2">2</a></sup>.</p><p><sup><a name="2">2</a></sup>Si, lors d'une procédure engagée selon l'art. 11 de cet accord, une entreprise s'oppose à la vérification, des mesures d'enquête au sens de l'art. 42 peuvent être engagées à la demande de la Commission de la Communauté européenne; l'art. 44 est applicable.</p><hr><div class="fns"><p><small><a name="fn-#a42a-1"><sup>1</sup></a> Introduit par le ch. I de la LF du 20 juin 2003, en vigueur depuis le 1<sup>er</sup> avr. 2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF <strong>2002</strong> 1911</a> 5128).<a name="fn-#a42a-2"><sup>2</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c0_748_127_192_68.html">0.748.127.192.68</a></strong></small></p></div></div><div class="a42b subpage" id="a42b"><div class="articleTitle"><h5><a href="index.html#a42b"><strong>Art.42</strong><em>b</em></a><sup><a href="#fn-#a42b-1">1</a></sup><a href="index.html#a42b">Communication de données à une autorité étrangère en matière de concurrence</a></h5></div>  <p><sup><a name="1">1</a></sup>La communication de données à une autorité étrangère en matière de concurrence n'est autorisée que si elle se fonde sur une loi ou sur un accord international, ou avec le consentement des entreprises concernées.</p><p><sup><a name="2">2</a></sup>En l'absence du consentement des entreprises concernées, les autorités en matière de concurrence peuvent communiquer à une autorité étrangère en matière de concurrence des données confidentielles, notamment des secrets d'affaires, sur la base d'un accord international et uniquement lorsque:</p><dl compact="compact"><dt>a.</dt><dd>les pratiques faisant l'objet d'une enquête dans l'Etat destinataire sont également illicites selon le droit suisse;</dd><dt>b.</dt><dd>les deux autorités en matière de concurrence enquêtent sur des pratiques ou actes juridiques identiques ou connexes;</dd><dt>c.</dt><dd>les données sont utilisées par l'autorité étrangère uniquement en vue de l'application des dispositions du droit des cartels et à titre de moyens de preuve en ce qui concerne l'objet de l'enquête auquel se rapporte sa requête;</dd><dt>d.</dt><dd>les données ne sont pas utilisées dans le cadre d'une procédure pénale ou civile;</dd><dt>e.</dt><dd>les droits des parties et le secret de fonction sont garantis dans le droit de procédure étranger; et</dd><dt>f.</dt><dd>les données confidentielles ne sont pas communiquées à l'autorité étrangère dans le cadre d'un accord amiable (art. 29) ou de la coopération à la mise au jour et à la suppression d'une restriction à la concurrence (art. 49<em>a</em>, al. 2).</dd></dl><p><sup><a name="3">3</a></sup>Avant de transmettre les données à l'autorité étrangère, les autorités en matière de concurrence informent les entreprises concernées et les invitent à prendre position.</p><hr><div class="fns"><p><small><a name="fn-#a42b-1"><sup>1</sup></a> Introduit par l'annexe à l'AF du 20 juin 2014 portant approbation et mise en oeuvre de l'Ac. entre la Suisse et l'UE concernant la coopération en matière d'application de leurs droits de la concurrence, en vigueur depuis le 1<sup>er</sup> déc. 2014 (<a href="http://www.admin.ch/ch/f/as/2014/3711.pdf">RO <strong>2014</strong> 3711</a>; <a href="http://www.admin.ch/ch/f/ff/2013/3477.pdf">FF <strong>2013</strong> 3477</a>).</small></p></div></div><div class="a43 subpage" id="a43"><div class="articleTitle"><h5><a href="index.html#a43"><strong>Art. 43</strong> Participation de tiers à l'enquête</a></h5></div>  <p><sup><a name="1">1</a></sup>Peuvent s'annoncer afin de participer à l'enquête concernant une restriction à la concurrence:</p><dl compact="compact"><dt>a.</dt><dd>les personnes qui ne peuvent accéder à la concurrence ou l'exercer du fait de la restriction à la concurrence;</dd><dt>b.</dt><dd>les associations professionnelles ou économiques que leurs statuts autorisent à défendre les intérêts économiques de leurs membres, pour autant que des membres de l'association ou de l'une de ses sections puissent participer à l'enquête;</dd><dt>c.</dt><dd>les organisations d'importance nationale ou régionale qui se consacrent statutairement à la protection des consommateurs.</dd></dl><p><sup><a name="2">2</a></sup>Le secrétariat peut exiger que les groupes de plus de cinq participants à l'enquête, ayant des intérêts identiques, désignent un représentant commun lorsque, à défaut, l'enquête s'en trouverait compliquée à l'excès. Il peut si nécessaire limiter la participation à une audition; les droits des parties découlant de la loi fédérale du 20 décembre 1968 sur la procédure administrative<sup><a href="#fn-#a43-1">1</a></sup> sont réservés.</p><p><sup><a name="3">3</a></sup>Les al. 1 et 2 sont applicables par analogie à la procédure d'octroi par le Conseil fédéral de l'autorisation exceptionnelle d'une restriction illicite à la concurrence (art.8).</p><p><sup><a name="4">4</a></sup>Dans la procédure d'examen des concentrations d'entreprises, seules les entreprises participantes ont qualité de parties.</p><hr><div class="fns"><p><small><a name="fn-#a43-1"><sup>1</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c172_021.html">172.021</a></strong></small></p></div></div><div class="a44 subpage" id="a44"><div class="articleTitle"><h5><a href="index.html#a44"><strong>Art. 44</strong></a><sup><a href="#fn-#a44-1">1</a></sup><a href="index.html#a44"></a></h5></div>  <hr><div class="fns"><p><small><a name="fn-#a44-1"><sup>1</sup></a> Abrogé par le ch. 27 de l'annexe à la LF du 17 juin 2005 sur le TAF, avec effet au 1<sup>er</sup> janv. 2007 (<a href="http://www.admin.ch/ch/f/as/2006/2197.pdf">RO <strong>2006</strong> 2197</a> 1069; <a href="http://www.admin.ch/ch/f/ff/2001/4000.pdf">FF <strong>2001</strong> 4000</a>).</small></p></div></div></div><a name="id-4-5"></a><h2 class="title clickable"><span class="expanderComparator"></span>Section 5 Autres tâches et compétences des autorités en matière de concurrence</h2><div class="collapseable"><div class="a45 subpage" id="a45"><div class="articleTitle"><h5><a href="index.html#a45"><strong>Art. 45</strong> Recommandations aux autorités</a></h5></div>  <p><sup><a name="1">1</a></sup>La commission observe de façon suivie la situation de la concurrence.</p><p><sup><a name="2">2</a></sup>Elle peut adresser aux autorités des recommandations visant à promouvoir une concurrence efficace, notamment en ce qui concerne l'élaboration et l'application des prescriptions de droit économique.</p></div><div class="a46 subpage" id="a46"><div class="articleTitle"><h5><a href="index.html#a46"><strong>Art. 46</strong> Préavis</a></h5></div>  <p><sup><a name="1">1</a></sup>Le secrétariat examine les projets d'actes normatifs de la Confédération, notamment en matière de droit économique, qui sont à même d'influencer la concurrence. Il détermine s'ils n'ont pas pour effet d'introduire des distorsions ou des restrictions excessives de celle-ci.</p><p><sup><a name="2">2</a></sup>Dans la procédure de consultation, la commission se détermine sur les projets d'actes normatifs de la Confédération qui limitent ou influencent de quelque manière la concurrence. Elle peut émettre des préavis sur les projets d'actes normatifs de droit cantonal.</p></div><div class="a47 subpage" id="a47"><div class="articleTitle"><h5><a href="index.html#a47"><strong>Art. 47</strong> Avis</a></h5></div>  <p><sup><a name="1">1</a></sup>La commission élabore des avis à l'intention d'autres autorités sur des questions de principe touchant la concurrence. Dans des cas d'importance mineure, elle peut charger le secrétariat de cette tâche.</p><p><sup><a name="2">2</a></sup>…<sup><a href="#fn-#a47-1">1</a></sup></p><hr><div class="fns"><p><small><a name="fn-#a47-1"><sup>1</sup></a> Abrogé par le ch. I de la LF du 20 juin 2003, avec effet au 1<sup>er</sup> avr. 2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF <strong>2002</strong> 1911</a> 5128).</small></p></div></div><div class="a48 subpage" id="a48"><div class="articleTitle"><h5><a href="index.html#a48"><strong>Art. 48</strong> Publication de décisions et de jugements</a></h5></div>  <p><sup><a name="1">1</a></sup>Les autorités en matière de concurrence peuvent publier leurs décisions.</p><p><sup><a name="2">2</a></sup>Les tribunaux doivent transmettre au secrétariat, sans en être requis, une version complète des jugements qu'ils ont rendus en vertu de la présente loi. Le secrétariat rassemble ces jugements et peut les publier périodiquement.</p></div><div class="a49 subpage" id="a49"><div class="articleTitle"><h5><a href="index.html#a49"><strong>Art. 49</strong> Devoir d'informer</a></h5></div>  <p><sup><a name="1">1</a></sup>Le secrétariat et la commission informent le public de leurs activités.</p><p><sup><a name="2">2</a></sup>La commission établit à l'intention du Conseil fédéral un rapport annuel d'activité.</p></div></div><a name="id-4-6"></a><h2 class="title clickable"><span class="expanderComparator"></span>Section 6 Sanctions administratives<sup><a href="#fn6">6</a></sup></h2><div class="collapseable"><div class="a49a subpage" id="a49a"><div class="articleTitle"><h5><a href="index.html#a49a"><strong>Art. 49</strong><em>a</em></a><sup><a href="#fn-#a49a-1">1</a></sup><a href="index.html#a49a">Sanction en cas de restrictions illicites à la concurrence</a></h5></div>  <p><sup><a name="1">1</a></sup>L'entreprise qui participe à un accord illicite aux termes de l'art. 5, al. 3 et 4, ou qui se livre à des pratiques illicites aux termes de l'art. 7, est tenue au paiement d'un montant pouvant aller jusqu'à 10% du chiffre d'affaires réalisé en Suisse au cours des trois derniers exercices. L'art. 9, al. 3, est applicable par analogie. Le montant est calculé en fonction de la durée et de la gravité des pratiques illicites. Le profit présumé résultant des pratiques illicites de l'entreprise est dûment pris en compte pour le calcul de ce montant.</p><p><sup><a name="2">2</a></sup>Si l'entreprise coopère à la mise au jour et à la suppression de la restriction à la concurrence, il est possible de renoncer, en tout ou en partie, à une sanction.</p><p><sup><a name="3">3</a></sup>Aucune sanction n'est prise si:</p><dl compact="compact"><dt>a.</dt><dd>l'entreprise annonce la restriction à la concurrence avant que celle-ci ne déploie ses effets; toutefois une sanction peut tout de même être prise si, dans un délai de cinq mois à compter de l'annonce, l'ouverture d'une procédure au sens des art. 26 à 30 est communiquée à l'entreprise et que celle-ci maintient la restriction<sup><a href="#fn-#a49a-2">2</a></sup>;</dd><dt>b.</dt><dd>la restriction à la concurrence a cessé de déployer ses effets plus de cinq ans avant l'ouverture de l'enquête;</dd><dt>c.</dt><dd>le Conseil fédéral a autorisé une restriction à la concurrence en vertu de l'art.8.</dd></dl><hr><div class="fns"><p><small><a name="fn-#a49a-1"><sup>1</sup></a> Introduit par le ch. I de la LF du 20 juin 2003, en vigueur depuis le 1<sup>er</sup> avr. 2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF <strong>2002</strong> 1911</a> 5128). Voir aussi les disp. fin. de cette mod. à la fin du texte.<a name="fn-#a49a-2"><sup>2</sup></a> Rectifié par la CdR de l'Ass. féd. (art. 58 al. 1 LParl; RS <strong><a href="http://www.admin.ch/ch/f/rs/c171_10.html">171.10</a></strong>).</small></p></div></div><div class="a50 subpage" id="a50"><div class="articleTitle"><h5><a href="index.html#a50"><strong>Art. 50</strong></a><sup><a href="#fn-#a50-1">1</a></sup><a href="index.html#a50">Inobservation d'accords amiables et de décisions administratives</a></h5></div>  <p>L'entreprise qui contrevient à son profit à un accord amiable, à une décision exécutoire prononcée par les autorités en matière de concurrence ou à une décision rendue par une instance de recours est tenue au paiement d'un montant pouvant aller jusqu'à 10% du chiffre d'affaires réalisé en Suisse au cours des trois derniers exercices. L'art. 9, al. 3, est applicable par analogie. Le profit présumé résultant des pratiques illicites de l'entreprise est dûment pris en compte pour le calcul de ce montant.</p><hr><div class="fns"><p><small><a name="fn-#a50-1"><sup>1</sup></a> Nouvelle teneur selon le ch. I de la LF du 20 juin 2003, en vigueur depuis le 1<sup>er</sup> avr. 2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF <strong>2002</strong> 1911</a> 5128).</small></p></div></div><div class="a51 subpage" id="a51"><div class="articleTitle"><h5><a href="index.html#a51"><strong>Art. 51</strong> Cas d'inobservation liés à une concentration d'entreprises</a></h5></div>  <p><sup><a name="1">1</a></sup>L'entreprise qui aura réalisé une concentration sans procéder à la notification dont elle aurait dû faire l'objet ou n'aura pas observé l'interdiction provisoire de réaliser la concentration, ou aura contrevenu à une charge dont a été assortie l'autorisation, aura réalisé une concentration qui a été interdite ou n'aura pas mis en oeuvre une mesure destinée à rétablir une concurrence efficace, sera tenue au paiement d'un montant de 1 million de francs au plus.</p><p><sup><a name="2">2</a></sup>En cas de récidive concernant une charge dont a été assortie l'autorisation, l'entreprise sera tenue au paiement d'un montant de 10 pour cent au plus du chiffre d'affaires total réalisé en Suisse par l'ensemble des entreprises participantes. L'art. 9, al. 3, est applicable par analogie.</p></div><div class="a52 subpage" id="a52"><div class="articleTitle"><h5><a href="index.html#a52"><strong>Art. 52</strong> Autres cas d'inobservation</a></h5></div>  <p>L'entreprise qui n'aura pas exécuté son obligation de renseigner ou de produire des documents, ou ne l'aura fait qu'en partie, sera tenue au paiement d'un montant de 100000 francs au plus.</p></div><div class="a53 subpage" id="a53"><div class="articleTitle"><h5><a href="index.html#a53"><strong>Art. 53</strong> Procédure</a><sup><a href="#fn-#a53-1">1</a></sup><a href="index.html#a53"></a></h5></div>  <p><sup><a name="1">1</a></sup>Les cas d'inobservation sont instruits par le secrétariat, d'entente avec un membre de la présidence. La commission statue.</p><p><sup><a name="2">2</a></sup>…<sup><a href="#fn-#a53-2">2</a></sup></p><hr><div class="fns"><p><small><a name="fn-#a53-1"><sup>1</sup></a> Nouvelle teneur selon le ch. 27 de l'annexe à la LF du 17 juin 2005 sur le TAF, en vigueur depuis le 1<sup>er</sup> janv. 2007 (<a href="http://www.admin.ch/ch/f/as/2006/2197.pdf">RO <strong>2006</strong> 2197</a> 1069; <a href="http://www.admin.ch/ch/f/ff/2001/4000.pdf">FF <strong>2001</strong> 4000</a>).<a name="fn-#a53-2"><sup>2</sup></a> Abrogé par le ch. 27 de l'annexe à la LF du 17 juin 2005 sur le TAF, avec effet au 1<sup>er</sup> janv. 2007 (<a href="http://www.admin.ch/ch/f/as/2006/2197.pdf">RO <strong>2006</strong> 2197</a> 1069; <a href="http://www.admin.ch/ch/f/ff/2001/4000.pdf">FF <strong>2001</strong> 4000</a>).</small></p></div></div></div><a name="id-4-7"></a><h2 class="title clickable"><span class="expanderComparator"></span>Section 7<sup><a href="#fn7">7</a></sup> Emoluments</h2><div class="collapseable"><div class="a53a subpage" id="a53a"><div class="articleTitle"><h5><a href="index.html#a53a"><strong>Art. 53</strong><em>a</em></a></h5></div>  <p><sup><a name="1">1</a></sup>Les autorités en matière de concurrence prélèvent des émoluments pour:</p><dl compact="compact"><dt>a.</dt><dd>les décisions relatives aux enquêtes concernant des restrictions à la concurrence aux termes des art. 26 à 31;</dd><dt>b.</dt><dd>l'examen des concentrations d'entreprises aux termes des art. 32 à 38;</dd><dt>c.</dt><dd>les avis et autres services.</dd></dl><p><sup><a name="2">2</a></sup>Les émoluments sont calculés en fonction du temps consacré à l'affaire.</p><p><sup><a name="3">3</a></sup>Le Conseil fédéral fixe le taux des émoluments et en règle les modalités de perception. Il peut déterminer les procédures et prestations non soumises aux émoluments, notamment lorsque la procédure est classée sans suite.</p></div></div></div>

                                        <a name="id-5"></a>
                                            <h1 class="title clickable"><span class="expanderComparator"></span>Chapitre 5 Sanctions pénales</h1>
                                            <div class="collapseable"><div class="a54 subpage" id="a54"><div class="articleTitle"><h5><a href="index.html#a54"><strong>Art. 54</strong> Violation d'accords amiables et de décisions administratives</a></h5></div>  <p>Quiconque aura intentionnellement contrevenu à un accord amiable, à une décision en force prononcée par les autorités en matière de concurrence ou à une décision rendue par une instance de recours, sera puni d'une amende de 100000 francs au plus.</p></div><div class="a55 subpage" id="a55"><div class="articleTitle"><h5><a href="index.html#a55"><strong>Art. 55</strong> Autres violations</a></h5></div>  <p>Quiconque, intentionnellement, n'aura pas exécuté, ou ne l'aura fait qu'en partie, une décision des autorités en matière de concurrence concernant l'obligation de renseigner (art. 40), aura réalisé une concentration d'entreprises sans procéder à la notification dont elle aurait dû faire l'objet ou aura violé des décisions liées à des concentrations d'entreprises, sera puni d'une amende de 20000 francs au plus.</p></div><div class="a56 subpage" id="a56"><div class="articleTitle"><h5><a href="index.html#a56"><strong>Art. 56</strong> Prescription</a></h5></div>  <p><sup><a name="1">1</a></sup>L'action pénale se prescrit par cinq ans pour les violations d'accords amiables et de décisions administratives (art. 54). Elle est en tout cas prescrite lorsque, du fait d'une interruption, ce délai est dépassé de moitié.</p><p><sup><a name="2">2</a></sup>Elle se prescrit par deux ans pour les autres infractions (art. 55).</p></div><div class="a57 subpage" id="a57"><div class="articleTitle"><h5><a href="index.html#a57"><strong>Art. 57</strong> Procédure et voies de droit</a></h5></div>  <p><sup><a name="1">1</a></sup>La loi fédérale du 22 mars 1974 sur le droit pénal administratif<sup><a href="#fn-#a57-1">1</a></sup> est applicable à la poursuite et au jugement des infractions.</p><p><sup><a name="2">2</a></sup>L'autorité de poursuite est le secrétariat, d'entente avec un membre de la présidence. La commission statue.</p><hr><div class="fns"><p><small><a name="fn-#a57-1"><sup>1</sup></a> RS <strong><a href="http://www.admin.ch/ch/f/rs/c313_0.html">313.0</a></strong></small></p></div></div></div>

                                        <a name="id-6"></a>
                                            <h1 class="title clickable"><span class="expanderComparator"></span>Chapitre 6 Exécution d'accords internationaux</h1>
                                            <div class="collapseable"><div class="a58 subpage" id="a58"><div class="articleTitle"><h5><a href="index.html#a58"><strong>Art. 58</strong> Etablissement des faits</a></h5></div> <p><sup><a name="1">1</a></sup>Lorsqu'une partie à un accord international fait valoir qu'une restriction à la concurrence est incompatible avec l'accord, le DEFR peut charger le secrétariat de procéder à une enquête préalable.</p><p><sup><a name="2">2</a></sup>Sur proposition du secrétariat, le DEFR décide de la suite à donner à l'affaire. Il entend auparavant les intéressés.</p></div><div class="a59 subpage" id="a59"><div class="articleTitle"><h5><a href="index.html#a59"><strong>Art. 59</strong> Suppression des incompatibilités</a></h5></div>  <p><sup><a name="1">1</a></sup>Si, dans l'exécution d'un accord international, il est constaté qu'une restriction à la concurrence est incompatible avec l'accord, le DEFR peut, d'entente avec le Département fédéral des affaires étrangères, proposer aux parties concernées un accord amiable en vue de la suppression de l'incompatibilité.</p><p><sup><a name="2">2</a></sup>Si un accord amiable ne peut être réalisé à temps et qu'une partie à l'accord international menace de prendre des mesures à l'encontre de la Suisse, le DEFR peut, d'entente avec le Département fédéral des affaires étrangères, ordonner les mesures nécessaires à la suppression de la restriction à la concurrence.</p></div></div><a name="id-6a"></a><h1 class="title clickable"><span class="expanderComparator"></span>Chapitre 6<em>a</em><sup><a href="#fn8">8</a></sup> Evaluation</h1><div class="collapseable"><div class="a59a subpage" id="a59a"><div class="articleTitle"><h5><a href="index.html#a59a"><strong>Art. 59</strong><em>a</em></a></h5></div>  <p><sup><a name="1">1</a></sup>Le Conseil fédéral veille à ce que l'exécution de la présente loi et l'efficacité des mesures prises fassent l'objet d'une évaluation.</p><p><sup><a name="2">2</a></sup>Le Conseil fédéral présente un rapport au Parlement lorsque l'évaluation est terminée, mais au plus tard cinq ans après l'entrée en vigueur de la présente disposition, et lui soumet des propositions quant à la suite à donner à l'évaluation.</p></div></div>

                                        <a name="id-7"></a>
                                            <h1 class="title clickable"><span class="expanderComparator"></span>Chapitre 7 Dispositions finales</h1>
                                                <div class="collapseable">
                                                    <div class="a60 subpage" id="a60">
                                                        <div class="articleTitle"><h5><a href="index.html#a60"><strong>Art. 60</strong> Exécution</a></h5></div>
                                                        <p>Le Conseil fédéral édicte les dispositions d'exécution.</p></div>
                                                    <div class="a61 subpage" id="a61">
                                                        <div class="articleTitle"><h5><a href="index.html#a61"><strong>Art.  61</strong> Abrogation du droit en vigueur</a></h5></div>
                                                        <p>La loi du 20 décembre 1985<sup><a href="#fn-#a61-1">1</a></sup> sur les cartels et organisations analogues est abrogée.</p>
                                                        <div class="fns">
                                                            <p>
                                                                <small><a name="fn-#a61-1"><sup>1</sup></a> [RO <strong>1986</strong> 874, <strong>1992</strong> 288 annexe ch. 12]</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="a62 subpage" id="a62">
                                                        <div class="articleTitle"><h5><a href="index.html#a62"><strong>Art.  62</strong> Dispositions transitoires</a></h5></div>
                                                        <p><sup><a name="1">1</a></sup>&nbsp;Les procédures en cours devant
                                                            la Commission des cartels relatives à des accords en matière de
                                                            concurrence sont suspendues dès l'entrée en vigueur de la présente loi;
                                                            si nécessaire, elles seront poursuivies selon le nouveau droit à
                                                            l'expiration d'un délai de six mois.
                                                        </p>
                                                        <p><sup><a name="2">2</a></sup>&nbsp;Une nouvelle procédure devant la
                                                            commission relative à des accords en matière de concurrence ne pourra
                                                            être introduite qu'à l'expiration d'un délai de six mois à compter de
                                                            l'entrée en vigueur de la loi, à moins que les destinataires potentiels
                                                            d'une décision n'aient demandé qu'il soit procédé plus tôt à une
                                                            enquête. L'enquête préalable peut être menée en tout temps.
                                                        </p>
                                                        <p><sup><a name="3">3</a></sup>&nbsp;Les décisions en force et les
                                                            recommandations acceptées en vertu de la loi fédérale du 20 décembre
                                                            1985<sup><a href="#fn-#a62-1">1</a></sup> sur les cartels et
                                                            organisations analogues continuent à être régies par l'ancien droit, y
                                                            compris en ce qui concerne les sanctions.
                                                        </p>
                                                        <div class="fns">
                                                            <p>
                                                                <small><a name="fn-#a62-1"><sup>1</sup></a> [RO <strong>1986</strong> 874, <strong>1992</strong> 288 annexe ch. 12]</small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="a63 subpage" id="a63">
                                                        <div class="articleTitle"><h5><a href="index.html#a63"><strong>Art. 63</strong> Référendum et entrée en vigueur</a></h5></div>
                                                        <p><sup><a name="1">1</a></sup>&nbsp;La présente loi est sujette au référendum facultatif.</p>
                                                        <p><sup><a name="2">2</a></sup>&nbsp;Le Conseil fédéral fixe la date de
                                                            l'entrée en vigueur.
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>Date de l'entrée en vigueur: 1<sup>er</sup> juillet 1996<sup><a href="#fn9">9</a></sup></p>
                                                <p>Art. 18 à 25: 1<sup>er</sup> février 1996<sup><a href="#fn10">10</a></sup></p><a  name="id-final1"></a>

                                                <div class="bloc" id="signatures">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>Conseil national, 6 octobre 1995</p>
                                                            <p>Le président: Claude Frey <br/>Le secrétaire: Duvillard </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>Conseil des Etats, 6 octobre 1995 </p>
                                                            <p>Le président: Ktichler <br/>Le secrétaire: Lanz </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="formule">
                                                    <div class="bloc">
                                                        <p><cite>Expiration du délai référendaire et entrée en vigueur </cite></p>
                                                        <p><sup>1</sup> Le délai référendaire s'appliquant à la présente loi a expiré le 15 janvier 1996 sans avoir été utilisé. <sup>2</sup>) </p>
                                                        <p><sup>2</sup> Les articles 18 à 25 de la présente loi entrent en vigueur le 1" février 1996. L'entrée en vigueur des autres dispositions sera fixée ultérieurement. </p>
                                                    </div>
                                                    <div class="row bloc">
                                                        <div class="col-md-6">
                                                            26 janvier 1996
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>Au nom du Conseil fédéral suisse: </p>
                                                            <p>Le président de la Confédération, Delamuraz <br/>Le chancelier de la Confédération, Couchepin </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <h1 class="title clickable">
                                                    <span class="expanderComparator"></span>Dispositions  finales de la modification du 20 juin 2003<sup><a href="#fn11">11</a></sup>
                                                </h1>
                                                <div class="collapseable">
                                                    <p>Aucune sanction prévue à l'art. 49<em>a</em> n'est
                                                        prise lorsqu'une restriction à la concurrence est annoncée ou supprimée dans
                                                        l'année qui suit l'entrée en vigueur de cette disposition.
                                                    </p>
                                                </div>

                                                <div class="app1 subpage" id="app1">
                                                    <h1 class="title clickable" id="ahref0"><span class="expanderComparator"></span><em>Annexe</em></h1>
                                                    <div class="collapseable"><h2 id="ahref1">Modification du droit en vigueur</h2>
                                                        <p>…<sup><a href="#fn-#app1-1">1</a></sup></p>
                                                        <div class="fns">
                                                            <p>
                                                                <small><a name="fn-#app1-1"><sup>1</sup></a> Les mod. peuvent être consultées au RO <strong>1996</strong> 546. </small>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <a name="fuss"></a><p>&nbsp;RO <strong>1996</strong> 546</p>
                                                </div>
                                                <div class="fns">
                                                    <p>
                                                        <small><a name="fn1"><sup>1</sup></a> Cette disp. correspond à l'art.
                                                            31<sup>bis</sup> de la cst. du 29 mai 1874 (RS <strong>1</strong>
                                                            3).<br><a name="fn2"><sup>2</sup></a> Cette disp. correspond à l'art. 64
                                                            de la cst. du 29 mai 1874 (RS <strong>1</strong> 3).<br><a  name="fn3"><sup>3</sup></a> RS <strong>101</strong><br>
                                                            <a name="fn4"><sup>4</sup></a> Nouvelle teneur selon le ch. I de la
                                                            LF du 20 juin 2003, en vigueur depuis le 1<sup>er</sup> avr. 2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                <strong>2004</strong> 1385</a>; <a
                                                                    href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                <strong>2002</strong> 1911</a> 5128).<br><a name="fn5"><sup>5</sup></a>
                                                            FF <strong>1995</strong> I 472<br><a name="fn6"><sup>6</sup></a>
                                                            Anciennement avant art. 50.<br><a name="fn7"><sup>7</sup></a> Introduite
                                                            par le ch. I de la LF du 20 juin 2003, en vigueur depuis le
                                                            1<sup>er</sup> avr. 2004 (<a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                <strong>2002</strong> 1911</a> 5128).<br><a name="fn8"><sup>8</sup></a>
                                                            Introduit par le ch. I de la LF du 20 juin 2003, en vigueur depuis le
                                                            1<sup>er</sup> avr. 2004 (<a  href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                <strong>2002</strong> 1911</a> 5128).<br><a name="fn9"><sup>9</sup></a>
                                                            O du 17 juin 1996 (RO <strong>1996</strong> 1805)<br><a name="fn10"><sup>10</sup></a> ACF du 26 janv. 1996<br>
                                                            <a name="fn11"><sup>11</sup></a>
                                                            <a href="http://www.admin.ch/ch/f/as/2004/1385.pdf">RO
                                                                <strong>2004</strong> 1385</a>; <a href="http://www.admin.ch/ch/f/ff/2002/1911.pdf">FF
                                                                <strong>2002</strong> 1911</a> 5128
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- End article -->

                                </div>
                            </div>
                        </div><!-- row end -->

                    </div><!-- course content end -->
                </div>
            </div><!-- row end -->
        </div><!-- inner custom column end -->
    </div><!-- doc body wrapper end -->
</div><!-- row end -->

@stop