@extends('layouts.master')

@section('title', 'Web')

@section('content')
    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">Web {{ __('installer::general.heading') }}</h1>
            <div class="break"></div>
            <p class="poppins text-white">{{ __('installer::general.topdesc') }}</p>
            <div class="break"></div>
            <form method="POST" action="/installer/webinstall" class="mt-25">
                @csrf

                <h3 class="category"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i>  {{ __('installer::general.general') }}</span></h3>
                <!-- Website Name -->
                <div class="mt-4">
                    <x-installer::label for="webname" :value="__('installer::general.webname')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="webname" id="webname" type="text" placeholder="WarriorCMS" />
                </div>

                <!-- Website url -->
                <div class="mt-4">
                    <x-installer::label for="weburl" :value="__('installer::general.weburl')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="weburl" id="weburl" type="text" placeholder="https://warriorcms.com" />
                </div>

                <!-- Discord Server -->
                <div class="mt-4">
                    <x-installer::label for="dcserver" :value="__('installer::general.discord_server_id')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="dcserver" id="dcserver" type="text" placeholder="839421866229104641" value="839421866229104641" />
                </div>

                <!-- Discord Channel -->
                <div class="mt-4">
                    <x-installer::label for="dcchannel" :value="__('installer::general.discord_channel_id')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="dcchannel" id="dcchannel" type="text" placeholder="839421867059183618" value="839421867059183618" />
                </div>

                <!-- Video URL -->
                <div class="mt-4">
                    <x-installer::label for="bgvideourl" :value="__('installer::general.bgvideo')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="bgvideourl" id="bgvideourl" type="text" placeholder="https://bnetcmsus-a.akamaihd.net/cms/template_resource/4TBVITQDP0AW1650382032717.mp4" value="https://bnetcmsus-a.akamaihd.net/cms/template_resource/4TBVITQDP0AW1650382032717.mp4" />
                </div>

                <h3 class="category mt-25"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="database"></i>  {{ __('installer::general.database') }}</span></h3>
                <!-- Database Settings -->
                <div class="mt-4">
                    <div class="group">
                        <!-- Database Hostname -->
                        <div class="group-item">
                            <x-installer::label for="webdbhostname" :value="__('installer::general.database_host')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="webdbhostname" id="webdbhostname" type="text" placeholder="127.0.0.1" />
                        </div>
                        <!-- Database Port -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="webdbport" :value="__('installer::general.database_port')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="webdbport" id="webdbport" type="text" placeholder="3306" />
                        </div>
                    </div>
                    <!-- Database Name -->
                    <div class="">
                            <x-installer::label for="webdbname" :value="__('installer::general.database_name')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="webdbname" id="webdbname" type="text" placeholder="warriorcms" />
                    </div>
                    <div class="group mt-4">
                        <!-- Database Username -->
                        <div class="group-item">
                            <x-installer::label for="webdbuser" :value="__('installer::general.database_user')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="webdbuser" id="webdbuser" type="text" placeholder="admin" />
                        </div>
                        <!-- Database Password -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="webdbpw" :value="__('installer::general.database_pass')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="webdbpw" id="webdbpw" type="password" placeholder="1234" />
                        </div>
                    </div>
                </div>
                <x-installer::button class="mt-25 full submit text-white poppins mb-4">
                <i class="" style="margin-right: 5px" data-feather="save"></i>
                </x-installer::button>
            </form>
        </div>
    </div>
@endsection