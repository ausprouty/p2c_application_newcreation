<!DOCTYPE html>
<html>
  <head>
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
    <link href="{{ asset('./css/examples.css') }}" rel="stylesheet"/>

    <script src="{{ asset('lib/jszip.min.js')}}"></script>
    <script src="{{ asset('./js/epub/dist/epub.min.js')}}"></script>
    
    <script src="{{ asset('./js/Share.js')}}"></script>

  </head>
  <body>
    <header class="bar bar-nav nav-path">
      <div class = "nav-row">
        <div class = "nav-column-main">
            <a href="../#en/index">
                <img class="nav-path" src="{{ asset('files/images/NavPath.png')}}">
            </a>
        </div>
        <div class = "nav-column-share">
            <a onclick="share()" href="javascript:void(0);">
                <img class="nav-share" src="{{ asset('files/images/NavPathShare.png')}}">
            </a>
        </div>
      </div>
    </header>
    <div id="viewer" class="spreads"></div>
    <div id="prev" class="arrow">‹</div>
    <div id="next" class="arrow">›</div>
    <script>

      var params =
        URLSearchParams &&
        new URLSearchParams(document.location.search.substring(1));
      var url =
        params && params.get("url") && decodeURIComponent(params.get("url"));
      console.log ( 'url is  ' + url);
      var currentSectionIndex = 'house.html';
        console.log (currentSectionIndex);

      // Load the opf
      window.book = ePub( "./files/ur/epub3/UrduEpub3.epub");
      var rendition = book.renderTo("viewer", {
        manager: "continuous",
        flow: "paginated",
        width: "100%",
        height: "100%"
      });

      var displayed = rendition.display(currentSectionIndex);
      localStorage.setItem('currentSectionIndex', currentSectionIndex);

      displayed.then(function(renderer) {
        // -- do stuff
      });

      // Navigation loaded
      book.loaded.navigation.then(function(toc) {
        // console.log(toc);
      });

      book.ready.then(() => {
        var next = document.getElementById("next");

        next.addEventListener(
          "click",
          function(e) {
            book.package.metadata.direction === "rtl"
              ? rendition.prev()
              : rendition.next();
            e.preventDefault();
          },
          false
        );

        var prev = document.getElementById("prev");
        prev.addEventListener(
          "click",
          function(e) {
            book.package.metadata.direction === "rtl"
              ? rendition.next()
              : rendition.prev();
            e.preventDefault();
          },
          false
        );

        var keyListener = function(e) {
          // Left Key
          if ((e.keyCode || e.which) == 37) {
            book.package.metadata.direction === "rtl"
              ? rendition.next()
              : rendition.prev();
          }

          // Right Key
          if ((e.keyCode || e.which) == 39) {
            book.package.metadata.direction === "rtl"
              ? rendition.prev()
              : rendition.next();
          }
        };

        rendition.on("keyup", keyListener);
        document.addEventListener("keyup", keyListener, false);
      });

      rendition.on("selected", function(range) {
        console.log("selected", range);
      });

      rendition.on("layout", function(layout) {
        let viewer = document.getElementById("viewer");

        if (layout.spread) {
          viewer.classList.remove("single");
        } else {
          viewer.classList.add("single");
        }
      });

      rendition.on("relocated", function(location) {
        console.log('rendition.on');
        console.log(location);
        console.log(location.start.href);
        localStorage.setItem("currentSectionIndex",location.start.href);
        var next =
          book.package.metadata.direction === "rtl"
            ? document.getElementById("prev")
            : document.getElementById("next");
        var prev =
          book.package.metadata.direction === "rtl"
            ? document.getElementById("next")
            : document.getElementById("prev");

        if (location.atEnd) {
          next.style.visibility = "hidden";
        } else {
          next.style.visibility = "visible";
        }

        if (location.atStart) {
          prev.style.visibility = "hidden";
        } else {
          prev.style.visibility = "visible";
        }
      });

      book.loaded.navigation.then(function(toc) {
        var select = document.getElementById("toc"),
          docfrag = document.createDocumentFragment();
  
        toc.forEach(function(chapter) {
          var option = document.createElement("option");
          option.textContent = chapter.label;
          option.ref = chapter.href;

          docfrag.appendChild(option);
        });
        console.log (docfrag + 'is docfrag');

        select.appendChild(docfrag);

        select.onchange = function() {
          var index = select.selectedIndex,
            url = select.options[index].ref;
          rendition.display(url);
          return false;
        };
      });
    </script>
   
  </body>
</html>
