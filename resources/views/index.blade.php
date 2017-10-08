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
        <style>
        @charset "UTF-8";a,table{background-color:transparent}button,h1,input{font-family:inherit}.initialism,button{text-transform:none}.container:after,.panel-body:after,.row:after{clear:both}.input-group,.input-group .form-control,.input-group-btn,.input-group-btn>.btn,.pagination>li>a,.pagination>li>span,body,html,sub{position:relative}.main-content,.table a,a{text-decoration:none}main,section{display:block}.container:after,.container:before,.row:after,.row:before{display:table;content:" "}a{color:#3097D1}strong{font-weight:700}sub{font-size:75%;line-height:0;vertical-align:baseline;bottom:-.25em}img{border:0;vertical-align:middle}button,input{color:inherit;font:inherit;margin:0}button{overflow:visible;-webkit-appearance:button}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}table{border-collapse:collapse;border-spacing:0}td,th{padding:0}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;font-size:10px}body{margin:0;font-size:14px;line-height:1.6}button,input{font-size:inherit;line-height:inherit}h1{margin:22px 0 11px;font-weight:500;line-height:1.1;color:inherit;font-size:36px}.text-right{text-align:right}#browser-loader,.btn,.content,.label,.table th{text-align:center}ul{margin-top:0;margin-bottom:11px}.initialism{font-size:90%}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.row{margin-left:-15px;margin-right:-15px}.col-md-1,.col-md-12,.col-md-2,.col-md-7{position:relative;min-height:1px;padding-left:15px;padding-right:15px}@media (min-width:992px){.col-md-1,.col-md-12,.col-md-2,.col-md-7{float:left}.col-md-1{width:8.33333333%}.col-md-2{width:16.66666667%}.col-md-7{width:58.33333333%}.col-md-12{width:100%}}th{text-align:left}.table{width:100%;max-width:100%;margin-bottom:22px}.table>tbody>tr>td,.table>thead>tr>th{padding:8px;line-height:1.6;vertical-align:top;border-top:1px solid #ddd}.btn,.form-control{background-image:none;padding:6px 12px;font-size:14px;line-height:1.6}.table>thead>tr>th{vertical-align:bottom;border-bottom:2px solid #ddd}.btn,.input-group-btn{vertical-align:middle;white-space:nowrap}.table>thead:first-child>tr:first-child>th{border-top:0}.table-responsive{overflow-x:auto;min-height:.01%}@media screen and (max-width:767px){.table-responsive{width:100%;margin-bottom:16.5px;overflow-y:hidden;-ms-overflow-style:-ms-autohiding-scrollbar;border:1px solid #ddd}}.form-control{display:block;width:100%;height:36px;color:#555;background-color:#fff;border:1px solid #ccd0d2}.form-control::-moz-placeholder{color:#b1b7ba;opacity:1}.form-control:-ms-input-placeholder{color:#b1b7ba}.form-control::-webkit-input-placeholder{color:#b1b7ba}.form-control::-ms-expand{border:0;background-color:transparent}.btn{display:inline-block;margin-bottom:0;font-weight:400;-ms-touch-action:manipulation;touch-action:manipulation;border:1px solid transparent;border-radius:4px}.collapse{display:none}.input-group{display:table;border-collapse:separate}.input-group .form-control{z-index:2;float:left;width:100%;margin-bottom:0}.input-group .form-control,.input-group-btn{display:table-cell}.input-group-btn{width:1%;font-size:0}.input-group .form-control:first-child{border-bottom-right-radius:0;border-top-right-radius:0}.input-group-btn:last-child>.btn{border-bottom-left-radius:0;border-top-left-radius:0;z-index:2;margin-left:-1px}.pagination{display:inline-block;padding-left:0;margin:22px 0;border-radius:4px}.label,.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{float:left;padding:6px 12px;line-height:1.6;text-decoration:none;background-color:#fff;margin-left:-1px}.pagination>li:first-child>span{margin-left:0;border-bottom-left-radius:4px;border-top-left-radius:4px}.pagination>li:last-child>a{border-bottom-right-radius:4px;border-top-right-radius:4px}.pagination>.active>span{z-index:3;color:#fff;background-color:#3097D1;border-color:#3097D1}.pagination>.disabled>span{color:#777;background-color:#fff;border-color:#ddd}.label{padding:.2em .6em .3em;font-size:75%;font-weight:700;line-height:1;color:#fff;white-space:nowrap;vertical-align:baseline;border-radius:.25em}.label-info{background-color:#8eb4cb}.panel{margin-bottom:22px;background-color:#fff;border-radius:4px}.panel-body:after,.panel-body:before{content:" ";display:table}.panel-heading{padding:10px 15px;border-top-right-radius:3px;border-top-left-radius:3px}@-ms-viewport{width:device-width}body,html{background-color:#f2f3f8;color:#636b6f;font-family:Poppins,sans-serif}.home h1{font-family:Kalam,cursive;display:inline-block;font-weight:600;font-size:5em}.home h1 span{font-weight:100;-webkit-transform:rotate(15deg);transform:rotate(15deg);display:inline-block}.container{overflow:hidden}.main-content{color:#636b6f;padding:25px;font-weight:400;letter-spacing:.1rem}.form-control{border-color:#ebedf2;border-radius:.25rem;-webkit-box-shadow:none;box-shadow:none}.search{margin-top:1.5em}.search button,.search input{height:45px}.search button{color:#fff!important;background-color:#34bfa3;border-color:#34bfa3;outline:0!important}.pagination .disabled span{background:0 0!important;border:none}.pagination>li.active span{color:#fff!important;background-color:#34bfa3;border-color:#34bfa3}.pagination>li>a,.pagination>li>span{color:#8eb4cb!important;margin:0 .2em;border:1px solid #e6e6e6;border-radius:.25em}.table{margin:0;font-size:12px}.table a{display:block}.table th{color:#fff;background-color:#212529;border-bottom:0!important}.panel{border:1px solid #ebedf2;-webkit-box-shadow:0 1px 15px 1px rgba(113,106,202,.08);box-shadow:0 1px 15px 1px rgba(113,106,202,.08)}.panel-body{padding:0}.panel-body td{border-color:#ebedf2;border-bottom-style:dashed}.panel-body tr:last-child td{border-bottom:0}.panel-heading{border-bottom:1px solid #ebedf2}.price{font-size:11px}.la-link{font-size:16px;font-weight:600}.loading{position:fixed;top:0;left:0;right:0;margin:auto;bottom:0}#browser-loader{display:block;position:absolute;z-index:3;width:100%;background:#0b0c0e;height:100%;opacity:.4;-webkit-box-shadow:inset #1F2D3D -1px 0 0;box-shadow:inset #1F2D3D -1px 0 0}.animated{-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-fill-mode:both;animation-fill-mode:both}@-webkit-keyframes bounceInUp{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(0,3000px,0);transform:translate3d(0,3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}75%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}90%{-webkit-transform:translate3d(0,-5px,0);transform:translate3d(0,-5px,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}@keyframes bounceInUp{0%,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(.215,.61,.355,1);animation-timing-function:cubic-bezier(.215,.61,.355,1)}0%{opacity:0;-webkit-transform:translate3d(0,3000px,0);transform:translate3d(0,3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}75%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}90%{-webkit-transform:translate3d(0,-5px,0);transform:translate3d(0,-5px,0)}to{-webkit-transform:translateZ(0);transform:translateZ(0)}}.bounceInUp{-webkit-animation-name:bounceInUp;animation-name:bounceInUp}
        </style>
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