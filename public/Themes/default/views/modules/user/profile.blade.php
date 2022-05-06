@extends('home::layouts.master')

@section('content')
    <main id="main" role="main">
        <div class="Pane Pane--full Pane--dirtDark">
            <div class="Pane-bg">
                <div class="Pane-overlay"></div>
            </div>
            <div class="Pane-content">
                <div class="Pane Pane--underSiteNav Pane--cropMax Pane--transparent"
                    data-url="//bnetcmsus-a.akamaihd.net/cms/template_resource/ri/RI8Q9HOWY4U01465961118458.jpg">
                    <div class="Pane-bg"
                        style="background-image:url('https://bnetcmsus-a.akamaihd.net/cms/page_media/pd/PDBCM917Y5ZT1461949019886.jpg');">
                        <div class="Pane-overlay"></div>
                    </div>
                    <div class="Pane-content">
                        <div class="space-medium"></div>
                        <div class="Pane Pane--transparent">
                            <div class="Pane-bg">
                                <div class="Pane-overlay"></div>
                            </div>
                            <div class="Pane-content">
                                <div class="ProfilePage-header">
                                    <div class="CharacterHeader-wrapper padding-top-medium">
                                        <div class="CharacterHeader CharacterHeader--WARRIOR padding-bottom-small">
                                            <div class="CharacterHeader-character">
                                                <div class="CharacterHeader-logoArea"
                                                    style="transition-duration: 300ms; opacity: 1; animation-name: big-scale-in-bounce; animation-duration: 600ms;">
                                                    <div class="Logo Logo--smaller Logo--horde CharacterHeader-logo"></div>
                                                </div>
                                                <div class="CharacterHeader-nameArea"
                                                    style="opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 600ms;">
                                                    <div class="CharacterHeader-nameTitle">
                                                        <a aria-current="page" class="CharacterHeader-name hover-white" href="/de-de/character/eu/antonidas/dueltroll">
                                                            {{ $username }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="CharacterHeader-info"
                                                style="opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 1000ms;">
                                                <div class="CharacterHeader-links"><a
                                                        class="CharacterHeader-achievement hover-white"
                                                        href="/de-de/character/eu/antonidas/dueltroll/achievements">
                                                        <div class="Media--flush Media--tiny CharacterHeader-media Media"
                                                            data-queryselectoralways-ignore="true">
                                                            <div class="Media-image"><span
                                                                    class="Icon Media-icon Icon--achievement-shield Icon--svg"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 64 64" class="injected-svg Icon-svg"
                                                                        data-src="https://assets.worldofwarcraft.com/static/components/Icon/svg/achievement-shield.69931dc20a64225f093d504faf2afb34.svg#achievement-shield"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        data-queryselectoralways-ignore="">
                                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                                            d="M51.492 3.677c-5.941 1.654-14.886 3.906-19.494 3.906-4.611 0-13.553-2.252-19.495-3.906-2.937-.815-5.875 1.255-5.875 4.144v34.684c0 1.336.657 2.597 1.778 3.415l20.792 15.176a4.765 4.765 0 002.8.904c.989 0 1.981-.3 2.805-.904L55.594 45.92c1.122-.818 1.778-2.08 1.778-3.415V7.823c-.002-2.888-2.942-4.961-5.88-4.146z"
                                                                            id="achievement-shield-1"></path>
                                                                    </svg></span></div>
                                                            <div class="Media-text">6170</div>
                                                        </div>
                                                    </a><a aria-current="page" class="CharacterHeader-ilvl hover-white"
                                                        href="/de-de/character/eu/antonidas/dueltroll">
                                                        <div class="Media--flush Media--tiny CharacterHeader-media Media"
                                                            data-queryselectoralways-ignore="true">
                                                            <div class="Media-image"><span
                                                                    class="Icon Media-icon Icon--swords Icon--svg"><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 64 64" class="injected-svg Icon-svg"
                                                                        data-src="https://assets.worldofwarcraft.com/static/components/Icon/svg/swords.01e57e65afe77495544524c74b7cd100.svg#swords"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        data-queryselectoralways-ignore="">
                                                                        <path xmlns="http://www.w3.org/2000/svg"
                                                                            d="M13.593 18.962l-6.729 7.035c-.135.142-.061.383.128.417l3.932.683a.23.23 0 00.205-.068l3.428-3.584 7.684 7.93 3.927-4.106.346-.362 3.725-3.896-7.684-7.928 3.646-3.814a.252.252 0 00.066-.213l-.654-4.112a.232.232 0 00-.398-.133l-6.853 7.167L7.485 4.401V.428A.42.42 0 007.075 0H.791a.419.419 0 00-.409.428v6.571c0 .236.183.427.409.427h3.512l9.29 11.536zm27.505 15.599l-3.8 3.972-.24.251-3.958 4.139 18.652 19.411L61.562 64l-1.671-9.882-18.793-19.557zM63.209.017h-6.283a.418.418 0 00-.409.428v3.672L45.483 13.83l-6.728-7.034c-.135-.143-.366-.065-.397.132l-.654 4.111a.253.253 0 00.066.214l3.428 3.585L4.002 53.726 2.408 63.983l9.451-1.748 37.336-39.036 3.646 3.812a.23.23 0 00.205.069l3.931-.684c.188-.031.263-.274.128-.415l-6.854-7.166L59.41 7.442h3.799a.418.418 0 00.409-.428V.444a.418.418 0 00-.409-.427z"
                                                                            id="swords-2"></path>
                                                                    </svg></span></div>
                                                            <div class="Media-text">GsST 8</div>
                                                        </div>
                                                    </a></div>
                                                <div class="CharacterHeader-details">
                                                    <div class="CharacterHeader-detail"><span
                                                            class="margin-right-xSmall">10</span><span
                                                            class="margin-right-xSmall">Zandalaritroll</span><span>Waffen
                                                            Krieger</span></div>
                                                    <div class="CharacterHeader-detail margin-left-xSmall">Antonidas</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="HorizontalNav HorizontalNav--flex HorizontalNav--gutters HorizontalNav--upper margin-bottom-small">
                                        <div class="HorizontalNav-itemsContainer">
                                            <div class="MediaAwareSlider MediaAwareSlider--disabled HorizontalNav-items">
                                                <a class="HorizontalNav-link align-center is-selected List-item" href="/de-de/character/eu/antonidas/dueltroll/">
                                                    <div class="HorizontalNav-item">Charakter</div>
                                                </a>
                                                <a class="HorizontalNav-link align-center List-item"
                                                    href="/de-de/character/eu/antonidas/dueltroll/achievements">
                                                    <div class="HorizontalNav-item">Erfolge</div>
                                                </a>
                                                <a class="HorizontalNav-link align-center List-item"
                                                    href="/de-de/character/eu/antonidas/dueltroll/collections/pets">
                                                    <div class="HorizontalNav-item">Sammlungen</div>
                                                </a>
                                                <a class="HorizontalNav-link align-center List-item"
                                                    href="/de-de/character/eu/antonidas/dueltroll/pve/raids">
                                                    <div class="HorizontalNav-item">Dungeons &amp; Schlachtzüge</div>
                                                </a>
                                                <a class="HorizontalNav-link align-center List-item"
                                                    href="/de-de/character/eu/antonidas/dueltroll/pvp">
                                                    <div class="HorizontalNav-item">Spieler gegen Spieler</div>
                                                </a>
                                                @if ($id == session('session_id'))
                                                <a class="HorizontalNav-link align-center List-item"
                                                    href="/de-de/character/eu/antonidas/dueltroll/reputation">
                                                    <div class="HorizontalNav-item">Settings</div>
                                                </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Divider Divider--opaque Divider--thin margin-bottom-normal"
                                        data-queryselectoralways-ignore="true"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
