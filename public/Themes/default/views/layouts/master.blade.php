
<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ Config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="{{ Theme::assets('core/uikit/css/uikit.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ Theme::assets('core/css/main.css') }}">
    <script src="{{ Theme::assets('core/uikit/js/uikit.min.js') }}"></script>
    <script src="{{ Theme::assets('core/uikit/js/uikit-icons.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/fd98eabb0b.js" crossorigin="anonymous"></script>
    <script>
        var optimizelyEnabled = false;
        try {
            optimizelyEnabled = JSON.parse("true");
        } catch (err) {
            console.log(err);
        }
    </script>
    <script>
        var optimizelyLoaded = (function() {

            var OPTIMIZELY_AGENT_LOADED_EVENT = "OptimizelyWebLoaded";
            var OPTIMIZELY_FULLSTACK_DATAFILE_LOADED_EVENT = "OptimizelyFullstackDataFileLoaded";

            function initOptimizely() {
                var agentScript = document.createElement("script");
                agentScript.src = "https://cdn.optimizely.com/js/8520856750.js";
                agentScript.onload = function() {
                    optimizelyLoaded = true;
                    trigger(OPTIMIZELY_AGENT_LOADED_EVENT);
                };
                document.head.appendChild(agentScript);

                var optimizelySdkKey = "6WXZo8UVWkPQHnS8ss4BQ";
                var optimizelySdkEnabled = false;
                try {
                    optimizelySdkEnabled = JSON.parse("true");
                } catch (err) {
                    console.log(err);
                }
                if (optimizelySdkKey && optimizelySdkEnabled) {
                    var dataFileScript = document.createElement("script");
                    dataFileScript.src = "https://cdn.optimizely.com/datafiles/" + optimizelySdkKey +
                    ".json/tag.js";
                    dataFileScript.onload = function() {
                        trigger(OPTIMIZELY_FULLSTACK_DATAFILE_LOADED_EVENT);
                    };
                    document.head.appendChild(dataFileScript);
                }
            }

            var optimizelyLoaded = false;
            var cookieConsentEnabled = JSON.parse("true");
            if (cookieConsentEnabled === false) {
                initOptimizely();
            } else {
                var COOKIE_CONSENT_EVENT = "CookieConsentChange";
                var cookieConsentChangeEventListener = window.addEventListener(COOKIE_CONSENT_EVENT, function() {
                    if (BlzCookieConsent.isPerformanceStorageAllowed()) {
                        initOptimizely();
                    }
                    window.removeEventListener(COOKIE_CONSENT_EVENT, cookieConsentChangeEventListener);
                });
            }

            return function() {
                return optimizelyLoaded;
            };
        })();
    </script>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5BZVX9');
    </script>
    <script src="{{ Theme::assets('core/js/core.66a3d362300af79ba147.js') }}"></script>
    <script id="init">
        window.trigger("init");
    </script>
    <link rel="stylesheet" href="{{ Theme::assets('core/css/core.f0a1c125520131b6cb88.css') }}">
    <link rel="stylesheet" href="{{ Theme::assets('core/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ Theme::assets('core/css/photoswipe.css') }}">
    <link rel="stylesheet" href="{{ Theme::assets('core/css/izimodal.css') }}">
    <link rel="stylesheet" href="{{ Theme::assets('core/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ Theme::assets('core/css/3.130ed27842b953a05ff8.css') }}">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "worldofwarcraft.com",
            "potentialAction": {
                "@type": "SearchAction",
                "query-input": "required name=search_term_string",
                "target": "https://worldofwarcraft.com/search?q={search_term_string}"
            },
            "url": "https://worldofwarcraft.com"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "VideoGame",
            "name": "World of Warcraft",
            "operatingSystem": "Macintosh operating systems, Microsoft Windows",
            "applicationCategory": "Game",
            "gamePlatform": ["Mac", "PC"],
            "author": {
                "@type": "Organization",
                "name": "Blizzard Entertainment",
                "logo": {
                    "@type": "ImageObject",
                    "url": "https://bnetcmsus-a.akamaihd.net/cms/template_resource/vv/VVJVJIDMCPSU1513896602867.png",
                    "width": 136
                },
                "url": "https://blizzard.com"
            },
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "https://worldofwarcraft.com"
            },
            "image": {
                "@type": "ImageObject",
                "url": "https://bnetcmsus-a.akamaihd.net/cms/template_resource/lg/LGFPX8WVDSVK1585943512598.png",
                "width": 293
            }
        }
    </script>
</head>

<body class="en-gb">
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BZVX9" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
        ! function(i, d, e, n) {
            i[e] = i[e] || {}, i[e][n] || (i[e][n] = function(i, e, n) {
                if (void 0 !== i) {
                    e = void 0 === e ? 0 : e, n = void 0 === n ? 0 : n;
                    var a = d.createElement("iframe");
                    a.width = e, a.height = n, a.hidden = !0, a.src = i, d.body.appendChild(a)
                }
            })
        }(window, document, "analytics", "appendFrame");
    </script>
    <div class="body">
        <div class="page">
            <x-home::menu />
            @yield('content')
            <x-home::footer />
        </div>
    </div>

    @include('sweetalert::alert')
    <script src='https://cdn.jsdelivr.net/npm/@widgetbot/crate@3' async defer>
        new Crate({
            server: '{{ Config('warriorcms.discord_server') }}',
            channel: '{{ Config('warriorcms.discord_channel') }}'
        })
    </script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script src="{{ Theme::assets('core/js/main.js') }}"></script>
    <script src="{{ Theme::assets('core/js/navbar.js') }}"></script>
    <script src="{{ Theme::assets('core/js/runtime.15ccb5b3ab6d70be0680.js') }}"></script>
    <script src="{{ Theme::assets('core/js/vendor.f85485fed4e8af52dc96.js') }}"></script>
    <script src="{{ Theme::assets('core/js/3.3f71f790ca75774820bf.js') }}"></script>
    <script src="{{ Theme::assets('core/js/legacy-components.ee66e0dd5257fdd82677.js') }}"></script>
</body>

</html>
