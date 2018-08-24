<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Activisme_BE | Kindereren sluit men niet op Theo Francken.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta property="og:description" content="{ Social media text snippet}" />

    <link href="images/favicon.ico" rel="icon" type="image/png">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic%7CRoboto:400,300,500,700,900%7CCutive+Mono" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet">
    <link href="{{ asset('css/patternbolt.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fs.boxer.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fs.wallpaper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" media="screen" rel="stylesheet">

    <style>
        body{
            overflow-x: hidden;
            overflow-y: scroll;
        }
    </style>
</head>
<body data-spy="scroll" data-target="#main-nav" data-offset="60" class="one-page">
<header id="header" role="banner">
    <nav role="navigation" id="main-nav">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <label class="toggle-nav-label visible-xs" for="toggle-main-nav"><i class="fa fa-bars fa-lg"></i></label>
                    <input type="checkbox" id="toggle-main-nav" class="toggle-nav-input">
                    <ul id="main-menu" class="menu nav">
                        <li class="menu-item active">
                            <a href="#home" class="smooth-scroll"><i class="fa fa-home"></i></a>
                        </li>
                        <li class="menu-item">
                            <a href="#petition" class="smooth-scroll">Petitie</a>
                        </li>
                        <li class="menu-item">
                            <a href="#letter" class="smooth-scroll">Email</a>
                        </li>
                        <li class="menu-item">
                            <a href="#news" class="smooth-scroll">Updates</a>
                        </li>
                        <li class="menu-item">
                            <a href="#sign-it" class="smooth-scroll">Teken!</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<article id="content">
    <section id="home" class="crossfade pb-pattern o-lines-light" data-crossfade-start="{{ asset('images/splash.jpg') }}" data-crossfade-end="{{ asset('images/splash.jpg') }}">
        <div id="splash" class="midway-horizontal midway-vertical midway animated">
            <h1>Meneer de Staatssecretaris, Excellentie. <small>Kinderen sluit je niet op in 127b.</small></h1>
            <a href="#petition" class="btn btn-primary btn-lg smooth-scroll hidden-xs">Steun deze petitie!</a>
        </div>
        <div id="counter" class="midway-horizontal midway animated">
            <div>Met <strong class="counter" data-number="{{ $counter['signatures'] }}">{{ $counter['signatures'] }}</strong> Supporters</div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $counter['signatures'] }}" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">{{ $counter['percent'] }}% Compleet</span>
                </div>
            </div>
            <div class="text-right">Hebben we nog <strong class="counter" data-number="{{ $counter['remain'] }}">0</strong> Supporters nodig.</div>
        </div>
    </section>
    <section id="petition">
        <div class="container">
            <div class="row content-padding-lg">
                <div class="col-sm-12 text-center">
                    <h2 class="section-title">De petitie</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h6 id="petition-to">De petitie gegevens:</h6>
                </div>
            </div>
        </div>
        <div id="petitioned">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <strong>Petitie gestart door:</strong>
                        VZW Activisme_BE.
                    </div>
                    <div class="col-sm-3">
                        <strong>Mails worden verzonden naar:</strong>
                        Het kabinet van Theo Francken.
                    </div>
                    <div class="col-sm-3">
                        <strong>In naam van:</strong>
                        De Belgische bevolking.
                    </div>
                    <div class="col-sm-3">
                        <strong>Petitie uitgever:</strong>
                        <a href="http://www.activisme.be">www.activisme.be</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="affix">
            <div class="row content-padding padding-bottom-none">
                <div class="col-sm-5 col-md-4 equal-height">
                    <div id="side">
                        <a href="{{ asset('images/photo-02.jpg') }}" class="link-image" rel="lightbox" title="Syrisch kindje in vluchtelingenkamp"><img src="{{ asset('images/photo-02.jpg') }}" alt=""/></a>
                        <ul class="block-grid-2">
                            <li>
                                <a href="{{ asset('images/photo-03.jpg') }}" class="link-image" rel="lightbox" title="Aleppo"><img src="{{ asset('images/photo-03.jpg') }}" alt=""/></a>
                            </li>
                            <li>
                                <a href="{{ asset('images/photo-04.jpg') }}" class="link-image" rel="lightbox" title="Sta op voor syrie"><img src="{{ asset('images/photo-04.jpg') }}" alt=""/></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-7 col-md-7 col-md-offset-1 equal-height">
                    <h1>Meneer de Staatssecretaris, Excellentie.</h1>
                    <div id="author">
                        <img src="{{ asset('images/banner.jpg') }}" alt="Activisme_BE"/>
                        <!-- Petitie door, <br/> -->
                        <strong>Activisme_BE</strong><br/>
                        Ieper, Belgie
                    </div>

                    <p class="lead">
                        Ik hoor in het nieuws dat U opnieuw zinnens bent om kinderen op te sluiten. U zal dat doen in zogeheten 'family units' in centrum 127b.
                        En U voert daarmee een maatregel in, zo hoor ik, die tien jaar terug opgeheven was omwille van de kritiek van nationale en internationale organisaties begaan met
                        mensenrechten en kinderrechten. De maatregel botst immers met een hele reeks bepalingen van verdragen die door ons land zijn ondertekend en geratificeerd.
                        We zijn terecht trots op het feit dat ons land door die ratificaties behoort tot de delen van de wereld waar mensen- en kinderrechten geen dode letter zijn.
                    </p>

                    <p>
                        U voert die maatregel nu weer in. Meteen kreeg U tonnen kritiek van een hele reeks actoren, gaande van de UNHCR en de Raad van Europa tot de Orde van Vlaamse Balies.
                        U wimpelde die kritiek snel af, hetzij door de critici als activisten af te doen die pleiten voor open grenzen,
                        hetzij door te beweren dat alles wat U doet perfect in orde is met de wetten en gebruiken die ook elders in Europa gelden.
                    </p>

                    <p>
                        Welnu, ik ben een gewone burger en ik pleit niet voor open grenzen. Niemand doet dat. Ik verzet me echter met klem tegen de maatregel waarbij kinderen nogmaals worden
                        opgesloten in instellingen die in zowat elk opzicht identiek zijn aan gevangenissen, ook al noemt U ze 'family units'. Wanneer die maatregel tien jaar geleden al zeer
                        zware kritiek te verduren kreeg, dan gelden die kritieken ook vandaag nog, en samen met zeer vele anderen deel ik die kritieken. In een land zoals Belgie sluiten
                        wij geen kinderen op. Om Uw eigen woorden even te citeren, 'nu niet, nooit niet'.
                    </p>

                    <p>
                        Ik begrijp dat U electoraal wil scoren met dit soort maatregelen. Elke politicus doet dat, en moet dat. Maar niet op de kap van kinderen. Het wordt de hoogste tijd dat
                        Uw beleid zich terug plaatst waar het hoort: binnen het geheel van waarden en normen die wij als Westerse samenleving in mensen- en kinderrechtenverdragen hebben gegoten.
                        Met deze maatregel geeft U nogmaals blijk van een groot misprijzen voor die grote waarden en normen. Ik pik dat niet meer.
                    </p>

                    <p>
                        Hoogachtend, <br>
                        Activisme_BE
                    </p>

                    <h6>Ondersteun ons door deze petitie te delen:</h6>

                    <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/nl_BE/sdk.js#xfbml=1&version=v2.8";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>

                        <div class="fb-share-button" data-href="http://www.kinderrechten.activisme.be" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.asiel.activisme.be%2F&amp;src=sdkpreparse">Delen</a></div>
                </div>
            </div>
        </div>
    </section>
    <section id="letter" class="animated">
        <div class="container">
            <div class="row content-padding-lg">
                <div class="col-sm-12 text-center">
                    <h2 class="section-title">De petitie mail.</h2>
                </div>
            </div>
        </div>
        <div id="letter-container">
            <div class="container">
                <div class="row content-padding-xs">
                    <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                        <p>Beste meneer de staatssecretaris,</p>

                        <p>
                            Ik hoor in het nieuws dat U opnieuw zinnens bent om kinderen op te sluiten. U zal dat doen in zogeheten 'family units' in centrum 127b.
                            En U voert daarmee een maatregel in, zo hoor ik, die tien jaar terug opgeheven was omwille van de kritiek van nationale en internationale organisaties begaan met
                            mensenrechten en kinderrechten. De maatregel botst immers met een hele reeks bepalingen van verdragen die door ons land zijn ondertekend en geratificeerd.
                            We zijn terecht trots op het feit dat ons land door die ratificaties behoort tot de delen van de wereld waar mensen- en kinderrechten geen dode letter zijn.
                        </p>

                        <p>
                            U voert die maatregel nu weer in. Meteen kreeg U tonnen kritiek van een hele reeks actoren, gaande van de UNHCR en de Raad van Europa tot de Orde van Vlaamse Balies.
                            U wimpelde die kritiek snel af, hetzij door de critici als activisten af te doen die pleiten voor open grenzen,
                            hetzij door te beweren dat alles wat U doet perfect in orde is met de wetten en gebruiken die ook elders in Europa gelden.
                        </p>

                        <p>
                            Welnu, ik ben een gewone burger en ik pleit niet voor open grenzen. Niemand doet dat. Ik verzet me echter met klem tegen de maatregel waarbij kinderen nogmaals worden
                            opgesloten in instellingen die in zowat elk opzicht identiek zijn aan gevangenissen, ook al noemt U ze 'family units'. Wanneer die maatregel tien jaar geleden al zeer
                            zware kritiek te verduren kreeg, dan gelden die kritieken ook vandaag nog, en samen met zeer vele anderen deel ik die kritieken. In een land zoals Belgie sluiten
                            wij geen kinderen op. Om Uw eigen woorden even te citeren, 'nu niet, nooit niet'.
                        </p>

                        <p>
                            Ik begrijp dat U electoraal wil scoren met dit soort maatregelen. Elke politicus doet dat, en moet dat. Maar niet op de kap van kinderen. Het wordt de hoogste tijd dat
                            Uw beleid zich terug plaatst waar het hoort: binnen het geheel van waarden en normen die wij als Westerse samenleving in mensen- en kinderrechtenverdragen hebben gegoten.
                            Met deze maatregel geeft U nogmaals blijk van een groot misprijzen voor die grote waarden en normen. Ik pik dat niet meer.
                        </p>

                        <p>Hoogachtend, [uw naam] wonend te, [wonende te]</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="news" class="animated">
        <div class="container">
            <div class="row content-padding-lg animated animated_off" style="display: block; opacity: 1; transform: translateY(0px);">
                <div class="col-sm-12 text-center">
                    <h2 class="section-title">Nieuws &amp; Updates</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div id="timeline">
                        <div class="entry animated animated_off" style="display: block; opacity: 1; transform: translateY(0px);">
                            <time datetime="2018-08-24">24 Augustus, 2018</time>
                            <div>
                                <h5><a href="https://www.facebook.com/events/531118163983294/" target="_blank">Actie Kinderen sluit je niet op - nooit!</a></h5>

                                <p>
                                    Deze actie gaat door op 28 Augustus 2018 - van 18u30 tot 20u in het Baudelpark te Gent.
                                </p>
                            </div>
                        </div>
                        <div class="entry sticky animated animated_off" style="display: block; opacity: 1; transform: translateY(0px);">
                            <time datetime="2018-08-13">13 Augustus, 2018</time>
                            <div>
                                <h5>De petitie is gestart.</h5>
                            </div>
                        </div>
                        <div class="entry animated animated_off" style="display: block; opacity: 1; transform: translateY(0px);">
                            <time datetime="2018-08-06">12 Augustus, 2018</time>
                            <div>
                                <p>Bij deze bedanken wij jullie deze actie te ondersteunen. Voor onze werking optimaal te laten werken, moeten wij als vzw rekenen op steungiften.</p>
                                <p>Bij deze is het mogelijk ons te steunen op rekeningnr. : <strong>BE61 0689 0830 7017</strong> Mededeling gift</p>
                                <p>Met vriendelijk groeten Activisme_be team</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sign-it" class="content-padding-lg animated">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section-title">Teken en deel deze Petitie!</h2>
                </div>
            </div>
        </div>
        <div class="container" id="sign-row">
            <div class="row">
                <div class="col-sm-5 col-md-3 col-md-offset-2 text-right">
                    <ul id="sign-list">
                        <li><a target="_blank" href="{{ $social['facebook'] }}" class="btn btn-block btn-primary facebook"><i class="fa fa-facebook"></i> Deel op Facebook</a></li>
                        <li><a target="_blank" href="{{ $social['twitter'] }}" class="btn btn-block btn-primary twitter"><i class="fa fa-twitter"></i> Deel op Twitter</a></li>
                        <li><a target="_blank" href="{{ $social['gplus'] }}" class="btn btn-block btn-primary google"><i class="fa fa-google-plus"></i> Deel op Google</a></li>
                        <li><a target="_blank" href="{{ $social['linkedin'] }}" class="btn btn-block btn-primary linkedin"><i class="fa fa-linkedin"></i> Deel op LinkedIn</a></li>
                        <li><a target="_blank" href="{{ $social['pinterest'] }}" class="btn btn-block btn-primary pinterest"><i class="fa fa-pinterest"></i>Deel op Pinterest</a></li>
                    </ul>
                </div>
                <div class="col-sm-5 col-sm-offset-2 col-md-3 col-md-offset-2">
                    <form id="signature" method="post" action="{{ route('signature.store') }}">
                        @csrf {{-- Form field protection --}}

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" value="" placeholder="Voor en Achternaam"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email"value="" placeholder="E-mail Adres"/>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="city" placeholder="Woonplaats. bv. 1000, Brussel" rows="3"></textarea>
                        </div>

                        <div>
                            <button type="submit" class="btn btn-block btn-primary">Teken deze petitie!</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</article>
<footer id="footer" role="contentinfo">
    <div class="container">
        <div class="row" id="absolute-footer">
            <div class="col-sm-4">
                <p>V.U: <a href="http://www.activisme.be">www.activisme.be</a></p>
            </div>
            <div class="col-sm-4 text-center"></div>
            <div class="col-sm-4 text-right">
                <p><a href="{{ route('privacy') }}">Privacybeleid</a> | <a href="{{ route('terms') }}">Gebruikersvoorwaarden</a></p>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.velocity.min.js') }}"></script>
<script src="{{ asset('js/velocity.ui.js') }}"></script>
<script src="{{ asset('js/midway.min.js') }}"></script>
<script src="{{ asset('js/jquery.crossfade.js') }}"></script>
<script src="{{ asset('js/jquery.fs.boxer.min.js') }}"></script>
<script src="{{ asset('js/jquery.fs.wallpaper.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky-kit.min.js') }}"></script>
<script src="{{ asset('js/jquery.matchHeight-min.js') }}"></script>
<script src="{{ asset('js/jquery.animateNumbers.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>