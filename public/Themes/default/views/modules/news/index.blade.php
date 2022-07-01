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
                        style="background-image:url(&quot;//bnetcmsus-a.akamaihd.net/cms/template_resource/ri/RI8Q9HOWY4U01465961118458.jpg&quot;);">
                        <div class="Pane-overlay"></div>
                    </div>
                    <div class="Pane-content">
                        <div class="space-medium"></div>
                        <div class="Pane Pane--transparent">
                            <div class="Pane-bg">
                                <div class="Pane-overlay"></div>
                            </div>
                            <div class="Pane-content">
                                <div class="Grid SyncHeight gutter-small gutter-all gutter-negative">
                                    @foreach ($news->latest()->get() as $news)
                                    @php
                                        $date = $news->created_at;
                                    @endphp
                                    <div class="ArticleTile ArticleTile--gutter Grid-full Grid-2of3">
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
                                                        <div class="ArticleTile-title">{{ $news->title }}</div>
                                                    </div>
                                                    <div class="ArticleTile-right">
                                                        <div class="ArticleTile-commentTotal List-right">
                                                            <a class="Link Link--external ArticleTile-comments" href="https://eu.forums.blizzard.com/de/wow/t/187488">
                                                                <div
                                                                    class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                                    <span
                                                                        class="Icon Icon--comment Icon--small CommentTotal-icon"><svg class="Icon-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                                                                            <use
                                                                                xlink:href="/static/components/Icon/svg/comment.88a6bb267bb247fed6a4ae5b51ea531d.svg#comment">
                                                                            </use>
                                                                        </svg></span>
                                                                    <div class="CommentTotal-number">50</div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><a class="Link ArticleTile-link" href="/de-de/news/23783667/alle-neuigkeiten-zu-world-of-warcraft-enthüllungen"></a>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="ArticleTile ArticleTile--gutter Grid-full Grid-1of3">
                                        <div class="ArticleTile-content">
                                            <div class="Tile ArticleTile-tile">
                                                <div class="Tile-area">
                                                    <div class="Tile-bg"
                                                        style="background-image:url(&quot;//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5e/5EXAQLJQ8M8L1653669962444.jpg&quot;);">
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
                                                        <div class="ArticleTile-subtitle"><span class="LocalizedDateMount"
                                                                data-props="{&quot;format&quot;:&quot;LL&quot;,&quot;iso8601&quot;:&quot;2022-06-03T17:00:00.000Z&quot;}"
                                                                queryselectoralways="54"><time
                                                                    datetime="2022-06-03T19:00:00+02:00">3. Juni
                                                                    2022</time></span></div>
                                                        <div class="ArticleTile-title">Talentvorschau für World of Warcraft:
                                                            Dragonflight</div>
                                                    </div>
                                                    <div class="ArticleTile-right">
                                                        <div class="ArticleTile-commentTotal List-right"><a
                                                                class="Link Link--external ArticleTile-comments"
                                                                href="https://eu.forums.blizzard.com/de/wow/t/191580"
                                                                data-analytics="panel-news"
                                                                data-analytics-panel="slot:1 - type:blog - id:23815986 || Talentvorschau für World of Warcraft: Dragonflight">
                                                                <div
                                                                    class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                                    <span
                                                                        class="Icon Icon--comment Icon--small CommentTotal-icon"><svg
                                                                            class="Icon-svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            viewBox="0 0 64 64" focusable="false">
                                                                            <use
                                                                                xlink:href="/static/components/Icon/svg/comment.88a6bb267bb247fed6a4ae5b51ea531d.svg#comment">
                                                                            </use>
                                                                        </svg></span>
                                                                    <div class="CommentTotal-number">34</div>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div><a class="Link ArticleTile-link"
                                                href="/de-de/news/23797209/talentvorschau-für-world-of-warcraft-dragonflight"
                                                data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/5e/5EXAQLJQ8M8L1653669962444.jpg"
                                                data-analytics="panel-news"
                                                data-analytics-panel="slot:1 - type:blog - id:23815986 || Talentvorschau für World of Warcraft: Dragonflight"></a>
                                        </div>
                                    </div>
                                    <div class="ArticleTile ArticleTile--gutter Grid-full Grid-1of3" media-small="Grid-full"
                                        media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3" queryselectoralways="0"
                                        media-original="ArticleTile ArticleTile--gutter">
                                        <div class="ArticleTile-content">
                                            <div class="Tile ArticleTile-tile">
                                                <div class="Tile-area">
                                                    <div class="Tile-bg"
                                                        style="background-image:url(&quot;//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/mq/MQN8X69AJCNK1653505249887.png&quot;);">
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
                                                        <div class="ArticleTile-subtitle">Loggt euch jetzt ein und entdeckt
                                                            das Inhaltsupdate 9.2.5 für Shadowlands!</div>
                                                        <div class="ArticleTile-title">Shadowlands: Inhaltsupdate 9.2.5 ist
                                                            jetzt live</div>
                                                    </div>
                                                    <div class="ArticleTile-right">
                                                        <div class="ArticleTile-commentTotal List-right"><a
                                                                class="Link Link--external ArticleTile-comments"
                                                                href="https://eu.forums.blizzard.com/de/wow/t/190491"
                                                                data-analytics="panel-news"
                                                                data-analytics-panel="slot:2 - type:blog - id:23811620 || Shadowlands: Inhaltsupdate 9.2.5 ist jetzt live">
                                                                <div
                                                                    class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                                    <span
                                                                        class="Icon Icon--comment Icon--small CommentTotal-icon"><svg
                                                                            class="Icon-svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            viewBox="0 0 64 64" focusable="false">
                                                                            <use
                                                                                xlink:href="/static/components/Icon/svg/comment.88a6bb267bb247fed6a4ae5b51ea531d.svg#comment">
                                                                            </use>
                                                                        </svg></span>
                                                                    <div class="CommentTotal-number">161</div>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div><a class="Link ArticleTile-link"
                                                href="/de-de/news/23801631/shadowlands-inhaltsupdate-925-ist-jetzt-live"
                                                data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/mq/MQN8X69AJCNK1653505249887.png"
                                                data-analytics="panel-news"
                                                data-analytics-panel="slot:2 - type:blog - id:23811620 || Shadowlands: Inhaltsupdate 9.2.5 ist jetzt live"></a>
                                        </div>
                                    </div>
                                    <div class="Grid-full" media-wide="!hide" queryselectoralways="0"
                                        media-original="Grid-full hide"></div>
                                    <div class="ArticleTile ArticleTile--gutter Grid-full Grid-1of3" media-small="Grid-full"
                                        media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3" queryselectoralways="0"
                                        media-original="ArticleTile ArticleTile--gutter">
                                        <div class="ArticleTile-content">
                                            <div class="Tile ArticleTile-tile">
                                                <div class="Tile-area">
                                                    <div class="Tile-bg"
                                                        style="background-image:url(&quot;//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/u2/U27SQGEBSZD71650384162498.png&quot;);">
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
                                                        <div class="ArticleTile-subtitle">Durch die gefrorene Tundra von
                                                            Nordend reisen.</div>
                                                        <div class="ArticleTile-title">Kehrt in World of Warcraft®: Wrath of
                                                            the Lich King Classic™ zurück in das vereiste Reich Nordend
                                                        </div>
                                                    </div>
                                                    <div class="ArticleTile-right">
                                                        <div class="ArticleTile-commentTotal List-right"><a
                                                                class="Link Link--external ArticleTile-comments"
                                                                href="https://eu.forums.blizzard.com/de/wow/t/187436"
                                                                data-analytics="panel-news"
                                                                data-analytics-panel="slot:3 - type:blog - id:23798397 || Kehrt in World of Warcraft®: Wrath of the Lich King Classic™ zurück in das vereiste Reich Nordend">
                                                                <div
                                                                    class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                                    <span
                                                                        class="Icon Icon--comment Icon--small CommentTotal-icon"><svg
                                                                            class="Icon-svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            viewBox="0 0 64 64" focusable="false">
                                                                            <use
                                                                                xlink:href="/static/components/Icon/svg/comment.88a6bb267bb247fed6a4ae5b51ea531d.svg#comment">
                                                                            </use>
                                                                        </svg></span>
                                                                    <div class="CommentTotal-number">200</div>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div><a class="Link ArticleTile-link"
                                                href="/de-de/news/23793177/kehrt-in-world-of-warcraft-wrath-of-the-lich-king-classic™-zurück-in-das-vereiste-reich-nordend"
                                                data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/u2/U27SQGEBSZD71650384162498.png"
                                                data-analytics="panel-news"
                                                data-analytics-panel="slot:3 - type:blog - id:23798397 || Kehrt in World of Warcraft®: Wrath of the Lich King Classic™ zurück in das vereiste Reich Nordend"></a>
                                        </div>
                                    </div>
                                    <div class="ArticleTile ArticleTile--gutter Grid-full Grid-1of3"
                                        media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3"
                                        queryselectoralways="0" media-original="ArticleTile ArticleTile--gutter">
                                        <div class="ArticleTile-content">
                                            <div class="Tile ArticleTile-tile">
                                                <div class="Tile-area">
                                                    <div class="Tile-bg"
                                                        style="background-image:url(&quot;//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/u6/U6DZXCTVMQYG1651769294024.jpg&quot;);">
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
                                                        <div class="ArticleTile-subtitle">Burning Crusade Classic</div>
                                                        <div class="ArticleTile-title">Das Sonnenbrunnenplateau ist jetzt
                                                            verfügbar!</div>
                                                    </div>
                                                    <div class="ArticleTile-right">
                                                        <div class="ArticleTile-commentTotal List-right"><a
                                                                class="Link Link--external ArticleTile-comments"
                                                                href="https://eu.forums.blizzard.com/de/wow/t/188938"
                                                                data-analytics="panel-news"
                                                                data-analytics-panel="slot:4 - type:blog - id:23807811 || Das Sonnenbrunnenplateau ist jetzt verfügbar!">
                                                                <div
                                                                    class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                                    <span
                                                                        class="Icon Icon--comment Icon--small CommentTotal-icon"><svg
                                                                            class="Icon-svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            viewBox="0 0 64 64" focusable="false">
                                                                            <use
                                                                                xlink:href="/static/components/Icon/svg/comment.88a6bb267bb247fed6a4ae5b51ea531d.svg#comment">
                                                                            </use>
                                                                        </svg></span>
                                                                    <div class="CommentTotal-number">74</div>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div><a class="Link ArticleTile-link"
                                                href="/de-de/news/23789253/burning-crusade-classic-das-sonnenbrunnenplateau-ist-jetzt-verfügbar"
                                                data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/u6/U6DZXCTVMQYG1651769294024.jpg"
                                                data-analytics="panel-news"
                                                data-analytics-panel="slot:4 - type:blog - id:23807811 || Das Sonnenbrunnenplateau ist jetzt verfügbar!"></a>
                                        </div>
                                    </div>
                                    <div class="ArticleTile ArticleTile--gutter Grid-full Grid-1of3"
                                        media-small="Grid-full" media-medium="Grid-1of2" media-wide="!Grid-1of2 Grid-1of3"
                                        queryselectoralways="0" media-original="ArticleTile ArticleTile--gutter">
                                        <div class="ArticleTile-content">
                                            <div class="Tile ArticleTile-tile">
                                                <div class="Tile-area">
                                                    <div class="Tile-bg"
                                                        style="background-image:url(&quot;//bnetcmsus-a.akamaihd.net/cms/blog_header/31/314ZH7ODO0MC1635798824477.jpg&quot;);">
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
                                                        <div class="ArticleTile-subtitle">Spielupdates</div>
                                                        <div class="ArticleTile-title">Hotfixes</div>
                                                    </div>
                                                    <div class="ArticleTile-right">
                                                        <div class="ArticleTile-commentTotal List-right"><a
                                                                class="Link Link--external ArticleTile-comments"
                                                                href="https://eu.forums.blizzard.com/de/wow/t/191138"
                                                                data-analytics="panel-news"
                                                                data-analytics-panel="slot:5 - type:blog - id:21050308 || Hotfixes">
                                                                <div
                                                                    class="CommentTotal CommentTotal--horizontal CommentTotal--right ArticleTile-commentTotal">
                                                                    <span
                                                                        class="Icon Icon--comment Icon--small CommentTotal-icon"><svg
                                                                            class="Icon-svg"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            viewBox="0 0 64 64" focusable="false">
                                                                            <use
                                                                                xlink:href="/static/components/Icon/svg/comment.88a6bb267bb247fed6a4ae5b51ea531d.svg#comment">
                                                                            </use>
                                                                        </svg></span>
                                                                    <div class="CommentTotal-number">9</div>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div><a class="Link ArticleTile-link"
                                                href="/de-de/news/23800887/hotfixes-9-juni-2022"
                                                data-thumb="//bnetcmsus-a.akamaihd.net/cms/blog_header/31/314ZH7ODO0MC1635798824477.jpg"
                                                data-analytics="panel-news"
                                                data-analytics-panel="slot:5 - type:blog - id:21050308 || Hotfixes"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
