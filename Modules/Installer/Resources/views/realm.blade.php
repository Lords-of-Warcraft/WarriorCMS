@extends('installer::layouts.master')

@section('title', 'Web Installer')

@section('content')
    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">{{ __('installer::general.addrealm') }}</h1>
            <div class="break"></div>
            <form method="POST" action="/installer/server/addrealm" class="mt-25">
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
                    <p class="poppins text-white">{{ __('installer::general.realm_desc') }}</p>
                    <!-- Database Name -->
                    <div class="">
                            <x-installer::label for="realmdbname" :value="__('installer::general.database_name')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="realmdbname" id="realmdbname" type="text" placeholder="warriorcms" />
                    </div>
                </div>
                <x-installer::button class="mt-25 full submit text-white mb-4">
                <span class="poppins text-uppercase text-bold">{{ __('installer::general.add') }}</span>
                </x-installer::button>
            </form>
        </div>
    </div>
@endsection