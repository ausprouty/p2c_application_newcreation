<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>New Creations</title>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no"
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
    <link href="{{asset('./ratchet/css/ratchet.css') }}" rel="stylesheet"/>
    <link href="{{asset('./css/styles.css') }}" rel="stylesheet"/>
    <link href="{{asset('./css/newcreation.css') }}" rel="stylesheet"/>
    <link href="{{asset('./css/basic.css') }}" rel="stylesheet"/>
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
                <img class="nav-front" src="files/images/NavFront.png">
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('homeDropdown')" class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavFrontLanguages.png')}}">
                </a>
                <div id="homeDropdown" class="dropdown-content">
                    <a href="#ar/index">(Arabic) عربى</a>
                    <a href="#bn/index">বাংলা(Bengali)</a>
                    <a href="#en/index">English</a>
                    <a href="#fa/index">(Farsi) فارسی</a>
                    <a href="#id/index">Bahasa(Indoneisan)</a>
                    <a href="#ps/index">(Pashto)پښتو</a>
                    <a href="#ur/index">(Urdu) اردو</a>
                </div>
            </div>

            <div class = "nav-column-share">
                <a onclick="share('@{{iso}}')" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavFrontShare.png')}}">
                </a>
            </div>

        </div>
    </header>
    <div class="content">
        @{{{text}}}
        <div class="footer">
        <p>NCBM (C) Copyright 2017, 2020 AFI Intl.</p>
        </div>
    </div>
</script>


<script id="page-tpl" type="text/template">
    <header class="bar bar-nav nav-back">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#@{{iso}}/index">
                    <img class="nav-back" src="files/images/NavPrinciples-@{{iso}}.png">
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('pageTmpDropdown')" class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavPrinciplesLanguages.png')}}">
                    <div id="pageTmpDropdown" class="dropdown-content">
                        <a href="#ar/principles">(Arabic) عربى</a>
                        <a href="#bn/principles">বাংলা(Bengali)</a>
                        <a href="#en/principles">English</a>
                        <a href="#fa/principles">(Farsi) فارسی</a>
                        <a href="#id/principles">Bahasa(Indoneisan)</a>
                        <a href="#ps/principles">(Pashto)پښتو</a>
                        <a href="#ur/principles">(Urdu) اردو</a>
                    </div>
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="share('@{{iso}}')" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavPrinciplesShare.png')}}">
                </a>
            </div>

    </header>
    <div class="content">
        @{{{text}}}
        <div class="footer">
        <p>NCBM (C) Copyright 2017, 2020 AFI Intl</p>
        </div>
    </div>

</script>

<script id="book-list-tpl" type="text/template">
    <header class="bar bar-nav nav-bible">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#@{{iso}}/index">
                    <img class="nav-bible" src="files/images/NavBibleBack-@{{iso}}.png">
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('bookListTplDropdown')" class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavBibleLanguages.png')}}">
                    <div id="bookListTplDropdown" class="dropdown-content">
                        <a href="#ar/bible">(Arabic) عربى</a>
                        <a href="#bn/bible">বাংলা(Bengali)</a>
                        <a href="#en/bible">English</a>
                        <a href="#fa/bible">(Farsi) فارسی</a>
                        <a href="#id/index">Bahasa(Indoneisan)</a>
                        <a href="#ps/bible">(Pashto)پښتو</a>
                        <a href="#ur/bible">(Urdu) اردو</a>
                    </div>
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="share('@{{iso}}')" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavBibleShare.png')}}">
                </a>
            </div>
        </div>
    </header>
    <div class="content" dir = "@{{dir}}">
        <div class = "download-banner">
            <button class = "download-banner @{{download}}"  id= "download-bible" onclick="downloadBible('@{{iso}}' )"  >
                 @{{download_bible}}
            </button>
        </div>
        <h2 class="brown select-book ml-10 @{{dir}}"> @{{title}}</h2>
        <ul class="table-view @{{dir}}">
            @{{#each books}}
            <li class="table-view-cell bible-book @{{dir}}">
                <a class="table-link  bible-book @{{dir}}" href="@{{link}}">
                    @{{{book_name_selected}}}
                </a>
            </li>
            @{{/each}}
        </ul>
        <div id = "bible-downloaded" class="downloaded  @{{downloaded}}">
            <p>'@{{bible_ready}}</p>
            <p><a href= "#" onclick="removeStoredBible('@{{iso}}');return false;">@{{remove_bible}}</a></p>
        </div>
        <div class="footer">
        <p>NCBM (C) Copyright 2017, 2020 AFI Intl.</p>
        </div>
    </div>
</script>

<script id="chapter-list-tpl" type="text/template">
    <header class="bar bar-nav nav-bible">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#@{{iso}}/bible">
                    <img class="nav-bible" src="files/images/NavBibleBack-@{{iso}}.png">
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('çhapterListTplDropdown')" class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavBibleLanguages.png')}}">
                    <div id="çhapterListTplDropdown" class="dropdown-content">
                        <a href="#ar/book/@{{bid}}">(Arabic) عربى</a>
                        <a href="#bn/book/@{{bid}}">বাংলা(Bengali)</a>
                        <a href="#en/book/@{{bid}}">English</a>
                        <a href="#fa/book/@{{bid}}">(Farsi) فارسی</a>
                        <a href="#id/book/@{{bid}}">Bahasa (Indonesian)</a>
                        <a href="#ps/book/@{{bid}}">(Pashto)پښتو</a>
                        <a href="#ur/book/@{{bid}}">(Urdu) اردو</a>
                    </div>
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="share('@{{iso}}')" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavBibleShare.png')}}">
                </a>
            </div>
        </div>
    </header>

    <div class="content bible-chapter-list">
        <div id = "download_button" class = "download-banner green  @{{download}}">
            <button class = "download-banner"
                id= "download-book"
                onclick="downloadBook('@{{iso}}', '@{{file_name}}','@{{chapters}}')">
                 @{{download_book}}
            </button>
        </div>
        @{{{table}}}
        <div id = "book-downloaded" class="downloaded  @{{downloaded}}">
            <p>@{{book_ready}}</p>
            <p><a href= "#" onclick="removeStoredBook('@{{file_name}}');return false;">@{{remove_item}}</p>
        </div>
        <div class="footer">
        <p>NCBM (C) Copyright 2017, 2020 AFI Intl.</p>
        </div>
    </div>
</script>

<script id="chapter-tpl" type="text/template">
    <header class="bar bar-nav nav-bible">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#@{{iso}}/bible">
                    <img class="nav-bible" src="files/images/NavBibleBack-@{{iso}}.png">
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="languageMenu('çhapterTplDropdown')"  class="dropbtn" href="javascript:void(0);">
                    <img class="nav-share dropbtn" src="{{ asset('files/images/NavBibleLanguages.png')}}">
                    <div id="çhapterTplDropdown" class="dropdown-content">
                        <a href="#ar/chapter/ar--@{{page}}">(Arabic) عربى</a>
                        <a href="#bn/chapter/bn--@{{page}}">বাংলা(Bengali)</a>
                        <a href="#en/chapter/en--@{{page}}">English</a>
                        <a href="#id/chapter/id--@{{page}}">Bahasa(Indonesian)</a>
                        <a href="#fa/chapter/fa--@{{page}}">(Farsi) فارسی</a>
                        <a href="#ps/chapter/ps--@{{page}}">(Pashto)پښتو</a>
                        <a href="#ur/chapter/ur--@{{page}}">(Urdu) اردو</a>
                    </div>
                </a>
            </div>
            <div class = "nav-column-share">
                <a onclick="share('@{{iso}}')" href="javascript:void(0);">
                    <img class="nav-share" src="{{ asset('files/images/NavBibleShare.png')}}">
                </a>
            </div>
        </div>
    </header>
    <div class="content" dir = "@{{dir}}">
        <p class="chapter_spacer"></p>
        <div>
        @{{{text}}}
        <br>
        <hr>
        <div class="footer">
            <p>NCBM (C) Copyright 2017, 2020 AFI Intl.</p>
        </div>
    </div>
</script>
<script src="lib/jquery-3.4.1.min.js?v=2.18"></script>
<script src="lib/router.js?v=2.18"></script>
<script src="lib/jszip.min.js?v=2.18"></script>
<script src="lib/jszip-utils.min.js?v=2.18"></script>
<script src="lib/pageslider.js?v=2.18"></script>
<script src="lib/lz-string.min.js?v=2.18"></script>
<script src="lib/handlebars.min-v4.5.3.js?v=2.18"></script>
<script src="js/services/BibleService.js?v=2.18"></script>
<script src="js/services/PageService.js?v=2.18"></script>
<script src="js/services/DownloadService.js?v=2.18"></script>
<script src="js/BookListView.js?v=2.18"></script>
<script src="js/ChapterListView.js?v=2.18"></script>
<script src="js/ChapterView.js?v=2.18"></script>
<script src="js/EbookView.js?v=2.18"></script>
<script src="js/HomeView.js?v=2.18"></script>
<script src="js/Language.js?v=2.18"></script>
<script src="js/PageView.js?v=2.18"></script>
<script src="js/Share.js?v=2.18"></script>
<script src="js/app.js?v=2.18"></script>
<script src="js/epub/2020/dist/epub.js?v=2.18"></script>
</body>
</html>
