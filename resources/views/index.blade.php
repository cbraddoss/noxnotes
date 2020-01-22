<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Nox Notes for Ny'alotha, the Waking City | Nox Guild | US Zul'jin</title>

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
                    <li class="nav-item @if($boss == 'wrathion') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'wrathion') {{ 'active' }} @endif" href="/"><img src="https://s3.amazonaws.com/noxguild/notes/wrathion-icon.jpg" alt="Wrathion"></a><span>Wrathion</span>
                    </li>
                    <li class="nav-item @if($boss == 'maut') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'maut') {{ 'active' }} @endif" href="/maut"><img src="https://s3.amazonaws.com/noxguild/notes/maut-icon.jpg" alt="Maut"></a><span>Maut</span>
                    </li>
                    <li class="nav-item @if($boss == 'skitra') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'skitra') {{ 'active' }} @endif" href="/skitra"><img src="https://s3.amazonaws.com/noxguild/notes/prophet-skitra-icon.jpg" alt="Prophet Skitra"></a><span>Skitra</span>
                    </li>
                    <li class="nav-item @if($boss == 'inquisitor') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'inquisitor') {{ 'active' }} @endif" href="/inquisitor"><img src="https://s3.amazonaws.com/noxguild/notes/dark-inquisitor-icon.jpg" alt="Dark Inquisitor Xanesh"></a><span>Inquisitor</span>
                    </li>
                    <li class="nav-item @if($boss == 'hivemind') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'hivemind') {{ 'active' }} @endif" href="/hivemind"><img src="https://s3.amazonaws.com/noxguild/notes/hivemind-icon.jpg" alt="Hivemind"></a><span>Hivemind</span>
                    </li>
                    <li class="nav-item @if($boss == 'shad-har') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'shad-har') {{ 'active' }} @endif" href="/shad-har"><img src="https://s3.amazonaws.com/noxguild/notes/shadhar-icon.jpg" alt="Shad'har"></a><span>Shad'har</span>
                    </li>
                    <li class="nav-item @if($boss == 'drest-agath') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'drest-agath') {{ 'active' }} @endif" href="/drest-agath"><img src="https://s3.amazonaws.com/noxguild/notes/drestagath-icon.jpg" alt="Drest'agath"></a><span>Drest'agath</span>
                    </li>
                    <li class="nav-item @if($boss == 'vexiona') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'vexiona') {{ 'active' }} @endif" href="/vexiona"><img src="https://s3.amazonaws.com/noxguild/notes/vexiona-icon.jpg" alt="Vexiona"></a><span>Vexiona</span>
                    </li>
                    <li class="nav-item @if($boss == 'il-gynoth') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'il-gynoth') {{ 'active' }} @endif" href="/il-gynoth"><img src="https://s3.amazonaws.com/noxguild/notes/ilgynoth-icon.jpg" alt="Il'gynoth"></a><span>Il'gynoth</span>
                    </li>
                    <li class="nav-item @if($boss == 'ra-den') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'ra-den') {{ 'active' }} @endif" href="/ra-den"><img src="https://s3.amazonaws.com/noxguild/notes/raden-icon.jpg" alt="Ra'den"></a><span>Ra'den</span>
                    </li>
                    <li class="nav-item @if($boss == 'carapace') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'carapace') {{ 'active' }} @endif" href="/carapace"><img src="https://s3.amazonaws.com/noxguild/notes/carapace-nzoth-icon.jpg" alt="Carapace of N'zoth"></a><span>Carapace</span>
                    </li>
                    <li class="nav-item @if($boss == 'n-zoth') {{ 'active' }} @endif">
                        <a class="nav-link @if($boss == 'n-zoth') {{ 'active' }} @endif" href="/n-zoth"><img src="https://s3.amazonaws.com/noxguild/notes/nzoth-icon.jpg" alt="N'zoth"></a><span>N'zoth</span>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('page-body')

        <div class="flex-center position-relative bg-secondary text-light text-center notes-footer">
            <div class="container py-5">
                <p>&copy; 2020 Nox | US Zul'jin | <a target="_blank" href="https://noxguild.us">noxguild.us</a> | Made by: <a target="_blank" href="https://sanoks.tv/">sanoks.tv</a></p>
            </div>
        </div>
    </body>
</html>