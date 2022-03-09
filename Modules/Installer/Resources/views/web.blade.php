@extends('installer::layouts.master')

@section('title', 'Web Installer')

@section('content')
    <h1 class="life-craft headline" style="color:white;">WarriorCMS by DuelistRag3</h1>
    <x-installer::app-logo />

    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">Web Installation</h1>
            <div class="break"></div>
            <p class="poppins text-white">To continue the installation, please fill out all fields below</p>
            <div class="break"></div>
            <form method="POST" action="javascript:void(0);" class="mt-25" onsubmit="save(1)">
                @csrf

                <h3 class="category"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i>  General</span></h3>
                <!-- Website Name -->
                <div class="mt-4">
                    <x-installer::label for="webname" :value="__('Website Name')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="webname" id="webname" type="text" placeholder="WarriorCMS" />
                </div>

                <!-- Website Language -->
                <div class="mt-4">
                    <x-installer::label for="lang" :value="__('Website Language')" class="poppins" />
                    <div class="break"></div>
                    <select class="select text-white full">
                        <option class="text-black" value="eng">English</option>
                        <option class="text-black" value="ger" disabled>German</option>
                    </select>
                </div>

                <h3 class="category mt-25"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="database"></i>  Database</span></h3>
                <!-- Database Settings -->
                <div class="mt-4">
                    <div class="group">
                        <!-- Database Hostname -->
                        <div class="group-item">
                            <x-installer::label for="Database Hostname" :value="__('Database Hostname')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="Database Hostname" id="Database Hostname" type="text" placeholder="127.0.0.1" />
                        </div>
                        <!-- Database Name -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="Database Name" :value="__('Database Name')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="Database Name" id="Database Name" type="text" placeholder="warriorcms" />
                        </div>
                    </div>
                    <div class="group mt-4">
                        <!-- Database Username -->
                        <div class="group-item">
                            <x-installer::label for="Database Username" :value="__('Database Username')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="Database Username" id="Database Username" type="text" placeholder="root" />
                        </div>
                        <!-- Database Password -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="Database Name" :value="__('Database Password')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="Database Password" id="Database Password" type="text" placeholder="1234" />
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