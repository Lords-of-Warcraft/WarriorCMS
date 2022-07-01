<div class="List List--gutters">
    <div class="List-item font-semp-small-white text-upper">{{ lang('content.latest_news') }}</div>
    <div class="List-item fontFamily-blizzard">
        <a class="Link Link--text" href="{{ url('/news') }}" data-analytics="homepage-panel"
            data-analytics-placement="News || Home - View All News">{{ lang('content.show_all_news') }}</a>
    </div>
</div>

<div class="gutter-normal gutter-negative">
    <div class="MastheadFeaturedNewsMount" style="min-height: 250px;" queryselectoralways="54">
        <div class="Grid Grid--gutter Grid--gutters">
            @foreach ($news as $news)
            @php
             $date = $news->created_at;
            @endphp
            <div class="Grid-1of4">
                <div class="ArticleTile">
                    <div class="ArticleTile-content">
                        <div class="Tile ArticleTile-tile">
                            <div class="Tile-area">
                                <div class="Tile-bg"
                                    style="background-image: url('{{ url('img/news/'.$news->images)}}');">
                                </div>
                                <div class="Tile-content"></div>
                            </div>
                        </div>
                        <div class="ArticleTile-fade"></div>
                        <div class="ArticleTile-play">
                            <div class="ArticleTile-playArrow"></div>
                        </div>
                        <div class="ArticleTile-bottom">
                            <div class="ArticleTile-bottomInner">
                                <div class="ArticleTile-left">
                                    <div class="ArticleTile-subtitle"><time datetime="{{ $news->created_at }}">{{ date('d.F Y', strtotime($date)); }}</time></div>
                                    <div class="ArticleTile-title">{{ $news->title }}</div>
                                </div>
                                <div class="ArticleTile-right"></div>
                            </div>
                        </div><a href="/news/{{ $news->id }}"
                            class="Link ArticleTile-link Link--cursor"></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
