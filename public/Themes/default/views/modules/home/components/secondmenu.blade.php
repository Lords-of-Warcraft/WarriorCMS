<?php

$accountName    = '{Placeholder}';

if (session('logged') === TRUE)
{
    $accountName    = session('session_username');
}

?>

<nav class="SiteNav" role="navigation" aria-label="Main">
    <div class="Sticky SiteNav-sticky" style>
        <div class="Sticky-content" style>
            <div class="SiteNav-area">
                <div class="SiteNav-bar">
                    <div class="SiteNav-menu">
                        <a class="Link Link--block SiteNav-logo" href="{{ url('/home') }}" data-analytics="main-nav"
                            data-analytics-placement="Logo">
                            <div class="Logo Logo--wow Logo--wowSitenav SiteNav-logo-full position-absolute"></div>
                            <div class="Logo Logo--wowIcon SiteNav-logo-icon"></div>
                        </a>
                        <div class="SiteNav-sectionLeft">
                            <div class="SiteNav-menuList List">
                                <div class="SiteNav-menuListItem List-item">
                                    <a class="Link Link--block SiteNav-menuListLink text-upper" href="{{ url('/news') }}"
                                        data-analytics="main-nav" data-analytics-placement="News">
                                        <span class="SiteNav-menuListLinkText" data-text="News"><i
                                                class="fa fa-newspaper-o"></i> {{ lang('content.news') }}</span>
                                    </a>
                                </div>
                                <div class="SiteNav-menuListItem List-item">
                                    <a class="Link Link--block SiteNav-menuListLink text-upper"
                                        href="{{ url('/downloads') }}" data-analytics="main-nav"
                                        data-analytics-placement="Forums">
                                        <span class="SiteNav-menuListLinkText" data-text="Forums"><i
                                                class="fa fa-download"></i> {{ lang('content.downloads') }}</span>
                                    </a>
                                </div>
                                <div class="SiteNav-menuListItem List-item">
                                    <a class="Link Link--block SiteNav-menuListLink text-upper"
                                        href="{{ url('/shop') }}"
                                        data-analytics="shop-link" data-analytics-placement="Shop || Nav">
                                        <span class="SiteNav-menuListLinkText" data-text="Shop"><i
                                                class="fa fa-shopping-cart"></i> {{ lang('content.shop') }}</span>
                                    </a>
                                </div>
                                <div class="SiteNav-menuListItem List-item">
                                    <a class="Link Link--block SiteNav-menuListLink" data-dropdown="SiteNav-dropdown-0"
                                        tabindex="0">
                                        <div
                                            class="DropdownLink DropdownLink--gold DropdownLink--goldWithHover text-upper">
                                            <span class="SiteNav-menuListLinkText" data-text="Game">{{ lang('content.more') }}</span>
                                            <span class="SiteNav-dropdownIndicator DropdownLink-indicator"></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="SiteNav-sectionRight">
                            <div class="SiteNav-menuList List">
                                @if (session('logged') === TRUE)
                                <div class="SiteNav-menuListItem SiteNav-menuListItem--user SiteNav-menuListItem--userLoggedIn List-item" data-test-id="2af60ccaec6851cdf2ba4f2108f0efd3">
                                    <div class="SiteNav-menuListItemWrap">
                                        <div class="List">
                                            <div class="List-item">
                                                <a class="Link Link--block" href="/en-us/">
                                                    <div class="Avatar Avatar--anon Avatar--goldLarge SiteNav-avatar">
                                                        <div class="Avatar-image" style="background-image: url('{{ url('/img/profile_icons/'.getProfileImage(getUserDataByID("profile_image", session("session_id"))).'.jpg') }}')!important"></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="List-item">
                                                <a class="Link SiteNav-menuListLink" data-dropdown="SiteNav-user">
                                                    <div class="DropdownLink DropdownLink--gold DropdownLink--goldWithHover">
                                                        <span class="SiteNav-menuListLinkText" data-text="{{ $accountName }}">{{ $accountName }}</span>
                                                        <span class="SiteNav-dropdownIndicator DropdownLink-indicator"></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else
                                <div class="SiteNav-menuListItem List-item"
                                    data-test-id="bfd7f05102e49f81dc3e45badd316e7e">
                                    <a class="Link Link--block SiteNav-menuListLink text-upper" href="{{ url('user/login') }}"
                                        data-analytics="main-nav" data-analytics-placement="Community - Log In"
                                        rel="nofollow">
                                        <span class="SiteNav-menuListLinkText" data-text="Log in">{{ lang('content.log_in') }}</span>
                                    </a>
                                </div>
                                <div class="SiteNav-menuListItem SiteNav-menuListItem--subscribe List-item"
                                    data-test-id="431ae34ff637d8520b62cc2cd795de52">
                                    <div class="SiteNav-menuListItemWrap">
                                        <a class="Link Link--block SiteNav-menuListLink text-upper" href="{{ url('user/register') }}">
                                            <span class="SiteNav-menuListLinkText" data-text="Subscribe">{{ lang('content.register') }}</span>
                                        </a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="Dropdown SiteNav-doormat SiteNav-doormat--tryFreeClarification"
                            name="SiteNav-dropdown-tryFreeClarification">
                            <div class="SiteNav-doormatContent">
                                <div class="Grid Grid--gutters">
                                    <div class="Grid-full">
                                        <div class="margin-bottom-normal align-center contain-medium">
                                            <div class="font-semp-large-white">Play WoW Free to Level 20</div>
                                        </div>
                                        <div class="margin-bottom-normal align-center">
                                            <a class="Link Link--external Button Button--ghost Button--purchase"
                                                href="https://www.blizzard.com/download/confirmation?product=wow"
                                                data-test-id="ebcd57e5e90c06b4e0afe49cb65b02d5"
                                                data-default-tabindex="0" tabindex="-1">
                                                <div class="Button-outer">
                                                    <div class="Button-inner">
                                                        <div class="Button-label" data-text="Download WoW">Download
                                                            WoW</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="gutter-normal padding-top-normal">
                                                <div
                                                    class="LabeledDivider LabeledDivider--inline LabeledDivider--thin LabeledDivider--lightBrown align-center">
                                                    <div
                                                        class="LabeledDivider-children font-bliz-light-xSmall-darkBeige">
                                                        Or</div>
                                                </div>
                                            </div>
                                            <div class="gutter-normal align-center gutter-all">
                                                <div class="Content font-bliz-light-xSmall-darkBeige">
                                                    <p>Learn more about the
                                                        <a href="https://worldofwarcraft.com/start"
                                                            data-default-tabindex="0" tabindex="-1">Free Trial</a>.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="Divider Divider--thin Divider--lightBrown"></div>
                                        <div class="gutter-normal gutter-all align-center">
                                            <div class="Content font-bliz-light-xSmall-darkBeige">
                                                <p>WoW Classic requires a subscription. Details
                                                    <a href="https://worldofwarcraft.com/wowclassic"
                                                        data-default-tabindex="0" tabindex="-1">here</a>.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Dropdown SiteNav-doormat" name="SiteNav-dropdown-0">
                    <div class="SiteNav-doormatContent">
                        <div class="Grid Grid--gutters">
                            <div class="Grid-1of5">
                                <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        <div class="SiteNav-sectionTitle font-title-tiny-onDark">Realms</div>
                                    </div>
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        @foreach (getAllRealms() as $realm)
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink"href="{{ url('realms/'.$realm->id)}}" type="CATEGORY_ITEM">{{ $realm->realmname}}</a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="Grid-1of5">
                                <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        <div class="SiteNav-sectionTitle font-title-tiny-onDark">Warcraft Lore</div>
                                    </div>
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/story"
                                                type="CATEGORY_ITEM" data-analytics="main-nav"
                                                data-analytics-placement="Story - Lore - All" data-default-tabindex="0"
                                                tabindex="-1">All</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/story#tab=video"
                                                type="CATEGORY_ITEM" data-analytics="main-nav"
                                                data-analytics-placement="Story - Lore - Animation"
                                                data-default-tabindex="0" tabindex="-1">Video</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/story#tab=audio"
                                                type="CATEGORY_ITEM" data-analytics="main-nav"
                                                data-analytics-placement="Story - Lore - Audio"
                                                data-default-tabindex="0" tabindex="-1">Audio</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/story#tab=comics"
                                                type="CATEGORY_ITEM" data-analytics="main-nav"
                                                data-analytics-placement="Story - Lore - Comics"
                                                data-default-tabindex="0" tabindex="-1">Comics</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/story#tab=books"
                                                type="CATEGORY_ITEM" data-analytics="main-nav"
                                                data-analytics-placement="Story - Lore - Books"
                                                data-default-tabindex="0" tabindex="-1">Books</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink"
                                                href="/en-us/story#tab=short-stories" type="CATEGORY_ITEM"
                                                data-analytics="main-nav"
                                                data-analytics-placement="Story - Lore - Short Stories"
                                                data-default-tabindex="0" tabindex="-1">Short Stories</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/story/timeline"
                                                type="CATEGORY_ITEM" data-analytics="main-nav"
                                                data-analytics-placement="Story - Timeline" data-default-tabindex="0"
                                                tabindex="-1">The Story of Warcraft</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Grid-1of5">
                                <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        <div class="SiteNav-sectionTitle font-title-tiny-onDark">Guides &amp;
                                            Information</div>
                                    </div>
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/start"
                                                type="CATEGORY_ITEM" data-analytics="main-nav"
                                                data-analytics-placement="Game - Guides - New Players"
                                                data-default-tabindex="0" tabindex="-1">New to WoW</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/return"
                                                type="CATEGORY_ITEM" data-analytics="main-nav"
                                                data-analytics-placement="Game - Guides - Returning Players"
                                                data-default-tabindex="0" tabindex="-1">Returning Players</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/game/status"
                                                type="CATEGORY_ITEM" data-analytics="main-nav"
                                                data-analytics-placement="Game - Guides - Realm Status"
                                                data-default-tabindex="0" tabindex="-1">Realm Status</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink"
                                                href="/en-us/game/recruit-a-friend" type="CATEGORY_ITEM"
                                                data-analytics="main-nav"
                                                data-analytics-placement="Game - Guides - Recruit A Friend"
                                                data-default-tabindex="0" tabindex="-1">Recruit A Friend</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink"
                                                href="/en-us/content-update-notes" type="CATEGORY_ITEM"
                                                data-analytics="main-nav"
                                                data-analytics-placement="Game - Guides - Content Update Notes"
                                                data-default-tabindex="0" tabindex="-1">Content Update Notes</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Grid-1of5">
                                <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        <div class="SiteNav-sectionTitle font-title-tiny-onDark">Competitive</div>
                                    </div>
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink"
                                                href="/en-us/game/hall-of-fame/mythic-raid" type="CATEGORY_ITEM"
                                                data-analytics="main-nav"
                                                data-analytics-placement="Game - Gameplay - Mythic Raid Hall of Fame"
                                                data-default-tabindex="0" tabindex="-1">Mythic Raid Hall of Fame</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink"
                                                href="/en-us/game/pve/leaderboards" type="CATEGORY_ITEM"
                                                data-analytics="main-nav"
                                                data-analytics-placement="Game - Gameplay - Mythic Leaderboards"
                                                data-default-tabindex="0" tabindex="-1">Mythic Keystone Dungeon
                                                Leaderboards</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink"
                                                href="/en-us/game/pvp/leaderboards/3v3" type="CATEGORY_ITEM"
                                                data-analytics="main-nav"
                                                data-analytics-placement="Game - Gameplay - Leaderboards"
                                                data-default-tabindex="0" tabindex="-1">PvP Leaderboards</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="Grid-1of5">
                                <div class="List List--full List--vertical List--separator List--separatorBrownMedium">
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        <div class="SiteNav-sectionTitle font-title-tiny-onDark">Expansions</div>
                                    </div>
                                    <div class="List-item gutter-tiny gutter-vertical">
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--external Link--block SiteNav-pageLink"
                                                href="https://dragonflight.blizzard.com/" type="CATEGORY_ITEM"
                                                data-analytics="Game - Expansions - Dragonflight"
                                                data-analytics-placement="main-nav" data-default-tabindex="0"
                                                tabindex="-1">
                                                Dragonflight
                                                <sup class="font-sup color-gold-medium">New</sup>
                                            </a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/shadowlands"
                                                type="CATEGORY_ITEM" data-analytics="Game - Expansions - Shadowlands"
                                                data-analytics-placement="main-nav" data-default-tabindex="0"
                                                tabindex="-1">Shadowlands</a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--external Link--block SiteNav-pageLink"
                                                href="https://wowclassic.blizzard.com/" type="CATEGORY_ITEM"
                                                data-analytics="Game - Expansions - Wrath of the Lich King Classic"
                                                data-analytics-placement="main-nav" data-default-tabindex="0"
                                                tabindex="-1">
                                                Wrath of the Lich King Classic
                                                <sup class="font-sup color-gold-medium">New</sup>
                                            </a>
                                        </div>
                                        <div class="gutter-vertical gutter-tiny">
                                            <a class="Link Link--block SiteNav-pageLink" href="/en-us/wowclassic"
                                                type="CATEGORY_ITEM"
                                                data-analytics="Game - Expansions - Burning Crusade Classic"
                                                data-analytics-placement="main-nav" data-default-tabindex="0"
                                                tabindex="-1">Burning Crusade Classic</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="Dropdown SiteNav-doormat SiteNav-characterDropdown" name="SiteNav-user">
                    <div class="SiteNav-doormatContent">
                        <div class="List List--vertical List--right">
                            <div class="List-item">
                                <a class="SiteNav-pageLink" href="{{ url('/user/logout') }}" data-analytics="main-nav" data-analytics-placement="Community - Log Out" data-default-tabindex="0" tabindex="0">
                                    {{ lang('content.log_out') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
