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
        <div class="footer">
        </div>
    </div>
</script>

<!---<script id="ebook-tpl" type="text/template">
    <header class="bar bar-nav nav-path">
        <div class = "nav-row">
            <div class = "nav-column-main">
                <a href="#@{{iso}}/index">
                    <img class="nav-path" src="files/images/NavPath-@{{iso}}.png'">
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
        <div class="footer">
        </div>
    </div>
</script>
-->
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
        <div class="footer">
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
        <div class = "download-banner">
            <button class = "download-banner @{{download}}"  id= "download-bible" onclick="downloadBible('@{{iso}}' )"  > 
                Download Bible for offline use
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
            <p>Bible ready for offline use</p>
            <p><a href= "#" onclick="removeStoredBible('@{{iso}}');return false;">Remove Bible from local storage</a></p>
        </div>
        <div class="footer">
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
        <div id = "download_button" class = "download-banner green  @{{download}}">
            <button class = "download-banner" 
                id= "download-book" 
                onclick="downloadBook('@{{iso}} ', '@{{file_name}}','@{{chapters}}')"> 
                Download @{{book_name}} for offline use
            </button>
        </div>
        @{{{table}}}
        <div id = "book-downloaded" class="downloaded  @{{downloaded}}">
            <p>@{{book_name}} ready for offline use</p>
            <p><a href= "#" onclick="removeStoredBook('@{{file_name}}');return false;">Remove @{{book_name}} from local storage</p>
        </div>
        <div class="footer">
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
                        <a href="#en/chapter/en--@{{page}}">English</a>
                        <a href="#fa/chapter/fa--@{{page}}">(Farsi) فارسی</a>
                        <a href="#ur/chapter/ur--@{{page}}">(Urdu) اردو</a>
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
        <p class="chapter_spacer"></p>
        @{{{text}}}
        <br>
        <hr>
        <div class="footer">
        </div>
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
<script src="{{ asset('js/services/DownloadService.js')}}"></script>
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
