@extends('layouts.master')

@section('content')
    <main id="main" role="main">
        <div class="page-Home">
            <div class="page-Home-masthead">
                <x-videopanel :news="$news"/>
                    @foreach (getAllRealms()->get() as $realm )
                    <div class="page-Guide-section position-relative">
                        <div class="Divider"></div>
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
                        <div class="Divider"></div>
                    <div class="Panel Panel--small Panel--alignCenter bordered Panel--stacked Panel--normal hide">
                        <div class="Panel-bg" style="background-image: url({{ url('/img/exp/'.$realm->exp.'.jpg') }}); background-size: cover;"></div>
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
                                        <a class="Link Link--external Button Button--ghost Panel-button Button--purchase">
                                            <div class="Button-outer">
                                                <div class="Button-inner">
                                                    <div class="Button-label" data-text="Subscribe Now">View Realm</div>
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
