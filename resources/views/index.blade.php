<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>xRagial</title>

        <!-- Fonts -->
        <link href="//fonts.googleapis.com/css?family=Poppins:300,400,700|Kalam:400,700" rel="preload" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:300,400,700|Kalam:400,700"></noscript>
        <link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="preload" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"></noscript>
        <link href="/css/line-awesome.min.css" rel="preload" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="/css/line-awesome.min.css"></noscript>
        <link href="{{ mix('/css/app.css') }}" rel="preload" as="style" onload="this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ mix('/css/app.css') }}"></noscript>
        <script>
        !function(e){"use strict";var n=function(n,t,o){function i(e){if(a.body)return e();setTimeout(function(){i(e)})}function r(){l.addEventListener&&l.removeEventListener("load",r),l.media=o||"all"}var d,a=e.document,l=a.createElement("link");if(t)d=t;else{var f=(a.body||a.getElementsByTagName("head")[0]).childNodes;d=f[f.length-1]}var s=a.styleSheets;l.rel="stylesheet",l.href=n,l.media="only x",i(function(){d.parentNode.insertBefore(l,t?d:d.nextSibling)});var u=function(e){for(var n=l.href,t=s.length;t--;)if(s[t].href===n)return e();setTimeout(function(){u(e)})};return l.addEventListener&&l.addEventListener("load",r),l.onloadcssdefined=u,u(r),l};"undefined"!=typeof exports?exports.loadCSS=n:e.loadCSS=n}("undefined"!=typeof global?global:this);!function(t){if(t.loadCSS){var e=loadCSS.relpreload={};if(e.support=function(){try{return t.document.createElement("link").relList.supports("preload")}catch(t){return!1}},e.poly=function(){for(var e=t.document.getElementsByTagName("link"),r=0;r<e.length;r++){var n=e[r];"preload"===n.rel&&"style"===n.getAttribute("as")&&(t.loadCSS(n.href,n,n.getAttribute("media")),n.rel=null)}},!e.support()){e.poly();var r=t.setInterval(e.poly,300);t.addEventListener&&t.addEventListener("load",function(){e.poly(),t.clearInterval(r)}),t.attachEvent&&t.attachEvent("onload",function(){t.clearInterval(r)})}}}(this);
        </script>
    </head>

    <div id="browser-loader">
        <img class="loading" src="/images/oval.svg">
    </div>

<body>
    <main>
        <div class="container">
            <div class="content col-md-12">
                <a href="{{ url('/') }}" class="home"><h1><span>x</span>Ragi.al</h1></a>
                <div class="initialism">
                    <strong>Lifehacks*</strong> Sample search "+7 Orcish Axe [Hydra*2:Zipper Bear*2] [4]"<br>
                    Use [4] or +7 to limit results to a specific upgrade or slot count<br>
                    [Hydra*3:Skel Worker] = [(<strong>Monster name</strong>)(<strong>*</strong> times card quantity if more than one)(include <strong>:</strong> for additional card)]
                </div>
                <form action="{{ url('search') }}" class="searc" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group search">
                        <input type="text" name="q" class="form-control" placeholder="Search for Item name..." required>
                        <span class="input-group-btn">
                            <button class="btn" type="submit">Search</button>
                        </span>
                    </div><!-- /input-group -->
                </form>
                <section id="main" class="main-content">
                    @if (!isset($vendorProfile))
                        @include('ajax.content')
                    @else
                        @include('vendor')
                    @endif
                </section>
            </div>
        </div>
    </main>
    <footer class="footer">
        Made with <i class="la la-heart animate-pulse"></i> by Mash ~ KingJ © {{ date('Y') }} xRagial is in no way endorsed by or affiliated with Gravity. Ragnarok Online® is ©2002-2011 Gravity Co., Ltd. & Lee Myoungjin.
    </footer>
    <script async type="text/javascript" src="{{ mix('/js/app.js') }}"></script>
</body>
</html>