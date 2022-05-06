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
                        <div class="space-medium"></div>
                        <div class="space-medium"></div>
                        <div class="space-normal"></div>
                        <div class="Grid SyncHeight gutter-small gutter-all gutter-negative" media-medium="!SyncHeight--disabled" media-original="Grid SyncHeight SyncHeight--disabled gutter-small gutter-all gutter-negative">
                            <div class="box-wrapper">
                                <div class="box-wrapper-inner">
                                    <div class="input" id="user-wrapper">
                                        <h1 style="display: flex; justify-content: space-around">Login</h1>
                                        <div class="space-normal"></div>
                                        <div class="user">
                                            <form action="{{ url('/user/auth') }}" method="post" id="password-form" novalidate="novalidate" class="username-required input-focus form-with-captcha">
                                                @csrf <!-- {{ csrf_field() }} -->
                                                <div id="user-input-container" class="">
                                                    <div class="control-group ">
                                                        <label id="accountName-label" class="control-label" for="accountName">Email</label>
                                                        <div class="controls">
                                                            <input id="accountName" aria-label="Email field, enter email address" name="accountName" title="Email" maxlength="320" type="text" tabindex="0" class="input-block " placeholder="Email" autocorrect="off" spellcheck="false">
                                                            <span class="input-after"></span>
                                                            <span class="error-helper error-helper-accountName hide"></span>
                                                        </div>
                                                    </div>
                                                    <div class="control-group ">
                                                        <label id="password-label" class="control-label" for="password">Password</label>
                                                        <div class="controls">
                                                            <div class="blz-password-wrapper">
                                                                <input id="password" aria-label="Password field, enter password" name="password" title="Password" maxlength="128" type="password" tabindex="0" class="input-block " autocomplete="off" placeholder="Password" autocorrect="off" spellcheck="false" data-password-show-aria="Show Password" data-password-hide-aria="Hide Password">
                                                                <span class="view-password-button" tabindex="0" aria-live="assertive" role="button" id="view-password-button">
                                                                    <i class="show-password fas fa-eye" aria-label="Show Password" id="eye"></i>
                                                                    <i class="hide-password hide fas fa-eye-slash" aria-label="Hide Password" id="eye-slash"></i>
                                                                </span>
                                                                <span class="caps-lock-indicator hide">
                                                                    <i class="fas fa-arrow-alt-square-up"></i>
                                                                </span>
                                                            </div>
                                                            <span class="input-after"></span>
                                                            <span class="error-helper error-helper-password hide"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="control-group submit no-cancel">
                                                    <button type="submit" id="submit" class="btn-block btn btn-primary submit-button btn-block" data-loading-text="" tabindex="0" aria-label="Log in">
                                                        Log In
                                                        <i class="spinner-battlenet"></i>
                                                    </button>
                                                </div>
                                            </form>
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
