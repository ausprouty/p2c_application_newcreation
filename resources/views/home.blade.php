<!DOCTYPE html>
<html>
<head>
    <title>New Creations</title>
    <meta http-equiv=“Expires” content=”-1″>
    <meta charset="utf-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=5.0"
    />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-155675539-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-155675539-1');
    </script>

    <link rel="apple-touch-icon" href="{{asset('./icons/apple-touch-icon-iphone-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('./icons/apple-touch-icon-ipad-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('./icons/apple-touch-icon-iphone-retina-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('./icons/apple-touch-icon-ipad-retina-152x152.png')}}">
    <link rel="shortcut icon" href="{{asset('./icons/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('./icons/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('./icons/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('site.manifest')}}">
    <meta name="msapplication-config" content="{{asset('./icons/browserconfig.xml')}}">
    <link rel="mask-icon"  color="#1b6e0d" href="{{asset('./icons/safari-pinned-tab.svg')}}">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('./ratchet/css/ratchet.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./css/styles.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./css/newcreation.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./css/basic.css') }}" rel="stylesheet"/>
    <link href="{{ asset('./css/ebook.css') }}" rel="stylesheet"/>
</head>
<script type="text/javascript">
    window.onload = function () {
        document.addEventListener("deviceready", init, false);
        init();
    };

    function init() {
    }
</script>
<body>
<script id="home-tpl" type="text/template">
    <header class="bar bar-nav nav-front">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <img class="nav-front" src="{{ asset('files/images/NavFront.png')}}">
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('homeDropdown')" class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavFrontLanguages.png')}}">
                </a>
                <div id="homeDropdown" class="dropdown-content">
                    <a href="#ar/index">(Arabic) عربى</a>
                    <a href="#en/index">English</a>
                    <a href="#fa/index">(Farsi) فارسی</a>
                    <a href="#ur/index">(Urdu) اردو</a>
                </div>
            </div>
           
            <div class = "nav-column-share">
                <a onclick="share()" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavFrontShare.png')}}">
                </a>
            </div>
            
        </div>
    </header>
    <div class="content blue">
        @{{{text}}}
    </div>
</script>

<script id="ebook-tpl" type="text/template">
    <header class="bar bar-nav nav-path">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#">
                    <img class="nav-path" src="{{ asset('files/images/NavPath.png')}}">
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('ebookTplDropdown')" class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavPathLanguages.png')}}">
                    <div id="ebookTplDropdown" class="dropdown-content">
                    <a href="#ar/index">EbookTpl(Arabic) عربى</a>
                    <a href="#en/index">English</a>
                    <a href="#fa/index">(Farsi) فارسی</a>
                    <a href="#ur/index">(Urdu) اردو</a>
                </div>
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="share()" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavPathShare.png')}}">
                </a>
            </div>
           
        </div>
    </header>
    <div class="content">
        <a id="prev" href="#prev" class="navlink">...</a>
        <div id="viewer" class="scrolled"></div>
        <a id="next" href="#next" class="navlink">...</a>
        
    </div>
</script>

<script id="page-tpl" type="text/template">
    <header class="bar bar-nav nav-back">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#">
                    <img class="nav-back" src="{{ asset('files/images/NavPrinciples.png')}}">
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('pageTmpDropdown')" class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavPrinciplesLanguages.png')}}">
                    <div id="pageTmpDropdown" class="dropdown-content">
                        <a href="#ar/principles">(Arabic) عربى</a>
                        <a href="#en/principles">English</a>
                        <a href="#fa/principles">(Farsi) فارسی</a>
                        <a href="#ur/principles">(Urdu) اردو</a>
                    </div>
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="share()" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavPrinciplesShare.png')}}">
                </a>
            </div>
            
    </header>
    <div class="content">
        @{{{text}}}
    </div>
</script>

<script id="book-list-tpl" type="text/template">
    <header class="bar bar-nav nav-bible">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#">
                    <img class="nav-bible" src="{{ asset('files/images/NavBibleBack.png')}}">
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('bookListTplDropdown')" class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavBibleLanguages.png')}}">
                    <div id="bookListTplDropdown" class="dropdown-content">
                        <a href="#ar/bible">(Arabic) عربى</a>
                        <a href="#en/bible">English</a>
                        <a href="#fa/bible">(Farsi) فارسی</a>
                        <a href="#ur/bible">(Urdu) اردو</a>
                    </div>
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="share()" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavBibleShare.png')}}">
                </a>
            </div>
        </div>
    </header>
    <div class="content" dir = "@{{dir}}">
        <h2 class="brown select-book ml-10 @{{dir}}"> @{{title}}</h2>
      @{{isox}}
        <ul class="table-view @{{dir}}">
            @{{#each books}}
            <li class="table-view-cell bible-book @{{dir}}">
                <a class="table-link  bible-book @{{dir}}" href="@{{link}}">
                    @{{{book_name_selected}}}
                </a>
            </li>
            @{{/each}}
        </ul>
    </div>
</script>

<script id="chapter-list-tpl" type="text/template">
    <header class="bar bar-nav nav-bible">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#bible">
                    <img class="nav-bible" src="{{ asset('files/images/NavBibleBack.png')}}">
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('çhapterListTplDropdown')" class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavBibleLanguages.png')}}">
                    <div id="çhapterListTplDropdown" class="dropdown-content">
                        <a href="#ar/book/@{{bid}}">(Arabic) عربى</a>
                        <a href="#en/book/@{{bid}}">English</a>
                        <a href="#fa/book/@{{bid}}">(Farsi) فارسی</a>
                        <a href="#ur/book/@{{bid}}">(Urdu) اردو</a>
                    </div>
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="share()" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavBibleShare.png')}}">
                </a>
            </div>
        </div>
    </header>
    <div class="content bible-chapter-list">
        @{{{table}}}
        <br>
    </div>
</script>

<script id="chapter-tpl" type="text/template">
    <header class="bar bar-nav nav-bible">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#bible">
                    <img class="nav-bible" src="{{ asset('files/images/NavBibleBack.png')}}">
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('çhapterTplDropdown')"  class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavBibleLanguages.png')}}">
                    <div id="çhapterTplDropdown" class="dropdown-content">
                        <a href="#ar/index">(ChapterTplArabic) عربى</a>
                        <a href="#en/index">English</a>
                        <a href="#fa/index">(Farsi) فارسی</a>
                        <a href="#ur/index">(Urdu) اردو</a>
                    </div>
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="share()" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavBibleShare.png')}}">
                </a>
            </div>
            
        </div>
    </header>
    <div class="content">
        <p class="chapter_spacer"></p>
        @{{{this}}}
        <br>
        <hr>
    </div>
</script>

<script src="{{ asset('lib/jquery-3.4.1.min.js')}}"></script>
<script src="{{ asset('lib/router.js')}}"></script>
<script src="{{ asset('lib/jszip.min.js')}}"></script>
<script src="{{ asset('lib/jszip-utils.min.js')}}"></script>
<script src="{{ asset('lib/pageslider.js')}}"></script>
<script src="{{ asset('lib/lz-string.min.js')}}"></script>
<script src="{{ asset('lib/handlebars.min-v4.5.3.js')}}"></script>
<script src="{{ asset('js/services/BibleService.js?')}}"></script>
<script src="{{ asset('js/services/PageService.js')}}"></script>
<script src="{{ asset('js/BookListView.js')}}"></script>
<script src="{{ asset('js/ChapterListView.js')}}"></script>
<script src="{{ asset('js/ChapterView.js')}}"></script>
<script src="{{ asset('js/EbookView.js')}}"></script>
<script src="{{ asset('js/HomeView.js')}}"></script>
<script src="{{ asset('js/Language.js')}}"></script>
<script src="{{ asset('js/PageView.js')}}"></script>
<script src="{{ asset('js/Share.js')}}"></script>
<script src="{{ asset('js/app.js')}}"></script>
<script src="{{ asset('js/epub/2020/dist/epub.js')}}"></script>




</body>
</html>
