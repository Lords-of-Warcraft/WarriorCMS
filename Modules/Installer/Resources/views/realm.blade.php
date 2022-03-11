@extends('installer::layouts.master')

@section('title', 'Web Installer')

@section('content')
    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">{{ __('installer::general.addrealm') }}</h1>
            <div class="break"></div>
            <form method="POST" action="javascript:void(0);" class="mt-25">
                @csrf

                <h3 class="category"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i>  {{ __('installer::general.general') }}</span></h3>
                <div class="mt-4">
                    <x-installer::label for="realmname" :value="__('installer::general.realmname')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="realmname" id="realmname" type="text" placeholder="WarriorsBFA" />
                </div>

                <div class="mt-4">
                    <x-installer::label for="realmportal" :value="__('installer::general.realmportal')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="realmportal" id="realmportal" type="text" placeholder="logon.warriorsbfa.com" />
                </div>

                <h3 class="category mt-25"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i> Character {{ __('installer::general.database') }}</span></h3>
                 <!-- Database Settings -->
                <div class="mt-4">
                    <div class="group">
                        <!-- Database Hostname -->
                        <div class="group-item">
                            <x-installer::label for="realmdbhostname" :value="__('installer::general.database_host')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbhostname" id="realmdbhostname" type="text" placeholder="127.0.0.1" />
                        </div>
                        <!-- Database Port -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="realmdbport" :value="__('installer::general.database_port')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbport" id="realmdbport" type="text" placeholder="3306" />
                        </div>
                    </div>
                    <!-- Database Name -->
                    <div class="">
                            <x-installer::label for="realmdbname" :value="__('installer::general.database_name')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbname" id="realmdbname" type="text" placeholder="warriorcms" />
                    </div>
                    <div class="group mt-4">
                        <!-- Database Username -->
                        <div class="group-item">
                            <x-installer::label for="realmdbuser" :value="__('installer::general.database_user')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbuser" id="realmdbuser" type="text" placeholder="admin" />
                        </div>
                        <!-- Database Password -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="realmdbpw" :value="__('installer::general.database_pass')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbpw" id="realmdbpw" type="text" placeholder="1234" />
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