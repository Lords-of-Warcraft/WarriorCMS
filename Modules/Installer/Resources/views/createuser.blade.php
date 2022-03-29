@extends('installer::layouts.master')

@section('title', 'User')

@section('content')
    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">Master User</h1>
            <div class="break"></div>
            <p class="poppins text-white">{{ __('installer::general.masteruser') }}</p><br>
            <div class="break"></div>
            <p class="poppins text-white">{{ __('installer::general.masteruser2') }}</p>
            <form method="POST" action="/installer/server/finish" class="mt-25">
                @csrf

                <div class="mt-4">
                    <x-installer::label for="username" :value="__('installer::general.username')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="username" id="username" type="text" />
                </div>

                <div class="mt-4">
                    <x-installer::label for="e-mail" :value="__('installer::general.mail')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="e-mail" id="e-mail" type="email" />
                </div>

                <div class="mt-4">
                    <x-installer::label for="password" :value="__('installer::general.pw')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="password" id="password" type="password" />
                </div>

                <div class="mt-4">
                    <x-installer::label for="password_confirmation" :value="__('installer::general.repa')" class="poppins" />
                    <div class="break"></div>
                    <x-installer::input class="input full text-white" name="password_confirmation" id="password_confirmation" type="password" />
                </div>
                <x-installer::button class="mt-25 full submit text-white poppins">
                <i class="" style="margin-right: 5px" data-feather="save"></i>
                </x-installer::button>
            </form>
            <x-installer::button class="mt-25 half submit text-white poppins mb-4" onclick="location.href = '/installer/server'">
            Back
            </x-installer::button>
        </div>
    </div>
@endsection