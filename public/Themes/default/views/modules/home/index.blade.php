@extends('home::layouts.master')

@section('content')
    <main id="main" role="main">
        <div class="page-Home">
            <div class="page-Home-masthead">
                <x-home::videopanel />
                <div class="page-Guide-section position-relative">
                    <div class="Divider"></div>
                    <div class="Panel Panel--small Panel--alignCenter bordered Panel--stacked Panel--normal hide"
                        media-wide="hide" queryselectoralways="0 32"
                        media-original="Panel Panel--small Panel--alignCenter bordered Panel--stacked Panel--normal">
                        <div class="Panel-bg"
                            data-background-image="https://bnetcmsus-a.akamaihd.net/cms/template_resource/IC6BX8KLLITN1649781770300.png">
                        </div>
                        <div class="Panel-area SyncHeight-item">
                            <div class="Panel-box">
                                <div class="Panel-content">
                                    <h3 class="Panel-subtitle">Wrath of the Lich King Classic</h3>
                                    <h2 class="Panel-title">The Lich King Returns</h2>
                                    <div class="Content Content--onDark Panel-desc">The Lich King’s forces await you in the
                                        icy continent of Northrend. World of Warcraft®: Wrath of the Lich King® Classic™ is
                                        coming, and with it another chance to relive the legend and face one of Azeroth's
                                        greatest villains. Return to Burning Crusade Classic™ today and prepare to face the
                                        Lich King in 2022.</div>
                                    <div class="Panel-buttons"><a
                                            class="Link Link--external Button Button--ghost Panel-button Button--purchase"
                                            href="https://shop.battle.net/product/world-of-warcraft-subscription?utm_source=worldofwarcraft.com&amp;utm_campaign=bop-wow-global-subscription-classic&amp;utm_medium=internal&amp;utm_content=hp-panel"
                                            data-analytics="homepage-panel"
                                            data-analytics-placement="Shop: Classic Subscription">
                                            <div class="Button-outer">
                                                <div class="Button-inner">
                                                    <div class="Button-label" data-text="Subscribe Now">Subscribe Now
                                                    </div>
                                                </div>
                                            </div>
                                        </a><a class="Link Link--external Button Button--ghost Panel-button"
                                            href="https://wowclassic.blizzard.com" data-analytics="homepage-panel"
                                            data-analytics-placement="Page: Wrath Classic">
                                            <div class="Button-outer">
                                                <div class="Button-inner">
                                                    <div class="Button-label" data-text="Learn More">Learn More</div>
                                                </div>
                                            </div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @foreach (getAllRealms() as $realm )
                    <div class="Panel bordered Panel--normal @if ($realm->exp == 7) Panel--right Panel--alignRight @else Panel--left Panel--alignLeft @endif Panel--overflowing">
                        <div class="Panel-bg" style="background-image: url({{ url('/img/exp/'.$realm->exp.'.jpg') }}); background-size: cover;">
                            <div class="Panel-fg"></div>
                        </div>
                        <div class="Panel-area SyncHeight-item">
                            <div class="Panel-box">
                                <div class="Panel-content">
                                    <h2 class="Panel-title">{{ $realm->realmname }}</h2>
                                    <div class="Content Content--onDark Panel-desc">The Lich King’s forces await you in the
                                        icy continent of Northrend. World of Warcraft®: Wrath of the Lich King® Classic™ is
                                        coming, and with it another chance to relive the legend and face one of Azeroth's
                                        greatest villains. Return to Burning Crusade Classic™ today and prepare to face the
                                        Lich King in 2022.</div>
                                    <div class="Panel-buttons">
                                        <a class="Link Link--external Button Button--ghost Panel-button Button--purchase" href="{{ url('realms/'.$realm->id) }}">
                                            <div class="Button-outer">
                                                <div class="Button-inner">
                                                    <div class="Button-label" data-text="Subscribe Now">View Realm
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
