<div class="BnetNav BnetNav--wow">
    <div class="Sticky BnetNav-sticky is-disabled">
        <div class="Sticky-content">
            <div class="BnetNav-navbar">
                <nav class="Navbar is-compact is-auto is-custom-logo">
                    <div class="Navbar-container">
                        <div class="Navbar-desktop">
                            <div role="presentation" class="Navbar-desktopOverlay Navbar-overlay"></div>
                            <a href="https://www.blizzard.com/" class="Navbar-logo" aria-label="Blizzard Home" data-analytics="global-nav" data-analytics-placement="Nav - Blizzard.com Icon">
                                <img src="{{ themes('img/icon.png') }}" width="38px">
                            </a>
                            <div class="Navbar-items">
                                <a href="{{ url('/') }}" class="Navbar-item Navbar-modalToggle is-noSelect Navbar-games is-current" data-index="0" data-name="games" tabindex="0">
                                    <div class="Navbar-label">Home</div>
                                </a>
                                <a href="{{ url('/shop') }}" class="Navbar-item Navbar-link is-noSelect Navbar-shop" data-index="1" data-name="shop" tabindex="0" data-analytics="global-nav" data-analytics-placement="Nav - Shop">
                                    <div class="Navbar-label">Shop</div>
                                </a>
                                <a href="{{ url('/forum') }}" class="Navbar-item Navbar-link is-noSelect Navbar-shop" data-index="1" data-name="shop" tabindex="0" data-analytics="global-nav" data-analytics-placement="Nav - Shop">
                                    <div class="Navbar-label">Forum</div>
                                </a>
                            </div>
                            <div class="Navbar-profileItems">
                                <a href="{{ url('/support') }}" class="Navbar-support Navbar-item Navbar-link is-noSelect" data-index="0" data-name="support" data-analytics="global-nav" data-analytics-placement="Nav - Support">
                                    <div class="Navbar-label">Support</div>
                                </a>
                                <a tabindex="0" data-target="Navbar-accountDropdown" data-name="account" role="button" aria-haspopup="true" aria-label="Accountmenü öffnen" class="Navbar-account Navbar-item Navbar-modalToggle is-noSelect">
                                    <div class="Navbar-label Navbar-accountUnauthenticated">Account</div>
                                    <div class="Navbar-icon Navbar-dropdownIcon">
                                        <i class="fa-solid fa-angle-down"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="Navbar-modals" role="presentation">
                        <div role="presentation" class="Navbar-constrained">
                            <div data-toggle="Navbar-account" class="Navbar-modal Navbar-dropdown Navbar-accountDropdown is-constrained" role="dialog" aria-label="Accountmenu">
                                <div class="Navbar-tick" style="left: 292px;">
                                    <div class="Navbar-tickInner"></div>
                                </div>
                                <div class="Navbar-modalContent">
                                    <div class="Navbar-accountDropdownLoggedOut">
                                        <div role="presentation" class="Navbar-modalSection">
                                            <a href="{{ url('user/login')}}" class="Navbar-accountDropdownButtonLink Navbar-button is-full" data-analytics="global-nav" data-analytics-placement="Nav - Account - Log In">Log in</a>
                                        </div>
                                        <a href="{{ url('user/register') }}" class="Navbar-accountDropdownLink nav-center" data-analytics="global-nav" data-analytics-placement="Nav - Account - Create a Free Account">
                                            <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                <i class="fa-solid fa-user-plus"></i>
                                            </div>
                                            <div class="Navbar-accountDropdownLinkLabel">Register for free</div>
                                        </a>
                                    </div>
                                    <div class="Navbar-accountDropdownLoggedIn">
                                        <div role="presentation" class="Navbar-modalSection">
                                            <div class="Navbar-accountDropdownProfileInfo">
                                                <div class="Navbar-accountDropDownBattleTag">TestUser#1</div>
                                            </div>
                                            <div class="Navbar-accountDropdownEmail">test@testuser.de</div>
                                        </div>
                                        <a href="{{ url('/user/settings') }}" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings nav-center" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                            <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                <i class="fa-solid fa-gear"></i>
                                            </div>
                                            <div class="Navbar-accountDropdownLinkLabel">Accountsettings</div>
                                        </a>
                                        <a href="{{ url('/user/logout') }}" class="Navbar-accountDropdownLink Navbar-accountDropdownSettings nav-center" data-analytics="global-nav" data-analytics-placement="Nav - Account - Settings">
                                            <div class="Navbar-icon Navbar-accountDropdownLinkIcon">
                                                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                                            </div>
                                            <div class="Navbar-accountDropdownLinkLabel">Log out</div>
                                        </a>
                                    </div>
                                </div>
                                <a data-target=".Navbar-account.is-active" class="Navbar-modalClose" tabindex="0" role="button" aria-label="Menü schließen" data-analytics="global-nav">
                                    <div class="Navbar-icon Navbar-gameMenuItemIcon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false" aria-hidden="true">
                                            <use xlink:href="#Navbar-icon-close"></use>
                                        </svg>
                                    </div>
                                    <div class="Navbar-gameMenuItemLabel">Schließen</div>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>