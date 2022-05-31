<div class="VideoPane VideoPane--fadeBottom VideoPane--underSiteNav"
    media-wide="VideoPane--underSiteNav !VideoPane--disabled" queryselectoralways="0 53"
    media-original="VideoPane VideoPane--fadeBottom VideoPane--disabled">
    <div class="VideoPane-bg">
        <video class="VideoPane-video" src="{{ Config('warriorcms.video_url') }}"
            data-src="{{ Config('warriorcms.video_url') }}" loop="loop" muted="muted" autoplay="autoplay"
            playsinline="playsinline"></video>
        <div class="VideoPane-overlay"></div>
        <div class="VideoPane-fallback BackgroundVideo-fallback"
            style="background-image: url('https://bnetcmsus-a.akamaihd.net/cms/template_resource/P1JT1I9ITNLB1650382032025.jpg');">
        </div>
    </div>
    <div class="VideoPane-content">
        <div class="gutter-normal gutter-negative hide" media-wide="hide" queryselectoralways="0"
            media-original="gutter-normal gutter-negative">
            <div class="Art Art--fadeBottom" style="margin-bottom:-52.5%;" queryselectoralways="4">
                <div class="Art-size" style="padding-top:90%"></div>
                <div class="Art-image"
                    style="background-image:url(https://bnetcmsus-a.akamaihd.net/cms/template_resource/YMXU7CYT34VZ1650382032003.jpg);">
                </div>
                <div class="Art-overlay"></div>
            </div>
        </div>
        <div class="" media-wide="!hide" queryselectoralways="0" media-original="hide">
            <div class="space-huge"></div>
            <div class="space-large"></div>
        </div>
        <div class="align-left">
            <div media-small="gutter-vertical" media-large="!gutter-vertical" queryselectoralways="0" media-original=""
                class="">
                <div class="" media-wide="!align-center" queryselectoralways="0"
                    media-original="align-center">
                    <h1 class="margin-none font-semp-xxxLarge-white text-upper">
                        {{ dbLang('default_theme_head_heading') }} {{ config('warriorcms.website_name') }}</h1>
                    <div class="contain-masthead contain-left" media-wide="contain-left" queryselectoralways="0"
                        media-original="contain-masthead">
                        <div class="space-rhythm-medium"></div>
                        <p class="margin-none font-bliz-light-medium-beige">{{ dbLang('default_theme_head_desc') }}
                        </p>
                        <div class="space-rhythm-medium"></div>
                        <div class="space-rhythm-large"></div>
                        <div class="List List--gutters List--left" media-large="!List--vertical"
                            media-wide="!List--center List--left" queryselectoralways="0"
                            media-original="List List--gutters List--center List--vertical">
                            <a class="Link Link--external Button Button--ghost Panel-button Button--purchase"
                                href="https://shop.battle.net/product/world-of-warcraft-subscription?utm_source=worldofwarcraft.com&amp;utm_campaign=bop-wow-global-subscription&amp;utm_medium=internal&amp;utm_content=hp-masthead"
                                data-analytics="shop-link" data-analytics-placement="Shop: Subscribe">
                                <div class="Button-outer">
                                    <div class="Button-inner">
                                        <div class="Button-label" data-text="Join us Now">{{ lang('content.join_now') }}</div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="" media-wide="!hide" queryselectoralways="0" media-original="hide">
            <div class="space-large"></div>
        </div>
        <div class="space-large space-huge" media-wide="space-huge" queryselectoralways="0"
            media-original="space-large"></div>
        <x-latest_news />
        <div class="space-normal"></div>
    </div>
</div>
