<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Castle Nathria Notes</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="/fonts/proto-sans/proto-sans.css"/>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script async src="/js/app.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-133659095-2"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-133659095-2');
        </script>

        <script>var whTooltips = {colorLinks: true, iconizeLinks: true, renameLinks: true};</script>
        <script src="https://wow.zamimg.com/widgets/power.js"></script>
    </head>
    <body class="bg-dark">
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark bg-secondary fixed-top bg-nwc">
                <a class="navbar-brand" href="/">
                    <img src="https://s3.amazonaws.com/noxguild/notes/nox-notes-logo-no-bg.png" alt="NWC Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    </ul>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://noxguild.us">noxguild.us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="container raid-title">
            <h1 class="text-center text-light">Ny'alotha, the Waking City</h1>
        </div>
        <nav class="boss-nav navbar navbar-expand">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav mx-auto justify-content-center text-center text-light">
                    <li class="nav-item @if($boss == 'shriekwing') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'shriekwing') {{ 'active' }} @endif" href="/"><img src="https://s3.amazonaws.com/noxguild/notes/shriekwing-icon.jpg" alt="shriekwing"></a><span>shriekwing</span>
                    </li>
                    <li class="nav-item @if($boss == 'huntsman-altimor') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'huntsman-altimor') {{ 'active' }} @endif" href="/huntsman-altimor"><img src="https://s3.amazonaws.com/noxguild/notes/huntsman-altimor-icon.jpg" alt="huntsman-altimor"></a><span>huntsman-altimor</span>
                    </li>
                    <li class="nav-item @if($boss == 'hungering-destroyer') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'hungering-destroyer') {{ 'active' }} @endif" href="/hungering-destroyer"><img src="https://s3.amazonaws.com/noxguild/notes/hungering-destroyer-icon.jpg" alt="hungering-destroyer"></a><span>hungering-destroyer</span>
                    </li>
                    <li class="nav-item @if($boss == 'artificer-xymox') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'artificer-xymox') {{ 'active' }} @endif" href="/artificer-xymox"><img src="https://s3.amazonaws.com/noxguild/notes/artificer-xymox-icon.jpg" alt="artificer-xymox"></a><span>artificer-xymox</span>
                    </li>
                    <li class="nav-item @if($boss == 'sun-kings-salvation') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'sun-kings-salvation') {{ 'active' }} @endif" href="/sun-kings-salvation"><img src="https://s3.amazonaws.com/noxguild/notes/sun-kings-salvation-icon.jpg" alt="sun-kings-salvation"></a><span>sun-kings-salvation</span>
                    </li>
                    <li class="nav-item @if($boss == 'lady-inerva-darkvein') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'lady-inerva-darkvein') {{ 'active' }} @endif" href="/lady-inerva-darkvein"><img src="https://s3.amazonaws.com/noxguild/notes/lady-inerva-darkvein-icon.jpg" alt="lady-inerva-darkvein"></a><span>lady-inerva-darkvein</span>
                    </li>
                    <li class="nav-item @if($boss == 'council-of-blood') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'council-of-blood') {{ 'active' }} @endif" href="/council-of-blood"><img src="https://s3.amazonaws.com/noxguild/notes/council-of-blood-icon.jpg" alt="council-of-blood"></a><span>council-of-blood</span>
                    </li>
                    <li class="nav-item @if($boss == 'sludgefist') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'sludgefist') {{ 'active' }} @endif" href="/sludgefist"><img src="https://s3.amazonaws.com/noxguild/notes/sludgefist-icon.jpg" alt="sludgefist"></a><span>sludgefist</span>
                    </li>
                    <li class="nav-item @if($boss == 'stone-legion-generals') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'stone-legion-generals') {{ 'active' }} @endif" href="/stone-legion-generals"><img src="https://s3.amazonaws.com/noxguild/notes/stone-legion-generals-icon.jpg" alt="stone-legion-generals"></a><span>stone-legion-generals</span>
                    </li>
                    <li class="nav-item @if($boss == 'sire-denathrius') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'sire-denathrius') {{ 'active' }} @endif" href="/sire-denathrius"><img src="https://s3.amazonaws.com/noxguild/notes/sire-denathrius-icon.jpg" alt="sire-denathrius"></a><span>sire-denathrius</span>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('page-body')

        <div class="flex-center position-relative bg-secondary text-light text-center notes-footer">
            <div class="container py-5">
                <p>&copy; 2020 Sanoks Dev | Made by: <a target="_blank" href="https://sanoks.tv/">sanoks.tv</a></p>
            </div>
        </div>
    </body>
</html>