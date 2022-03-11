@extends('installer::layouts.master')

@section('title', 'Web Installer')

@section('content')

    

    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">Server {{ __('installer::general.heading') }}</h1>
            <div class="break"></div>
            <p class="poppins text-white">{{ __('installer::general.topdesc') }}</p>
            <div class="break"></div>
            <form method="POST" action="javascript:void(0);" class="mt-25" onsubmit="save(2)">
                @csrf


                <h3 class="category"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i>  Realms</span></h3>
                <x-installer::button class="mt-25 full submit text-white poppins" onclick="javascript:location.href='/installer/server/realm'">
                <i class="" style="margin-right: 5px" data-feather="plus"></i>
                </x-installer::button>

                <table class="full mt-25 text-white poppins">
                    <tr>
                        <th>{{ __('installer::general.realmname') }}</th>
                        <th>{{ __('installer::general.realmportal') }}</th>
                        <th>{{ __('installer::general.database') }}</th>
                        <th>{{ __('installer::general.actions') }}</th>
                    </tr>
                    <tr>
                        {{-- <td>Blutkessel</td>
                        <td>logon.warriorcms.com</td>
                        <td>blutkessel_characters</td>
                        <td class="text-center">{{ __('installer::general.edit') }}<br>{{ __('installer::general.delete') }}</td> --}}
                        <td>Kein Realm eingetragen</td>
                    </tr>
                </table>

                <h3 class="category mt-25"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="database"></i> Auth {{ __('installer::general.database') }}</span></h3>
                <!-- Database Settings -->
                <div class="mt-4">
                    <div class="group">
                        <!-- Database Hostname -->
                        <div class="group-item">
                            <x-installer::label for="authdbhost" :value="__('installer::general.database_host')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="authdbhost" id="authdbhost" type="text"  />
                        </div>
                        <!-- Database Name -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="authdbname" :value="__('installer::general.database_name')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="authdbname" id="authdbname" type="text"  />
                        </div>
                    </div>
                    <div class="group mt-4">
                        <!-- Database Username -->
                        <div class="group-item">
                            <x-installer::label for="authdbuser" :value="__('installer::general.database_user')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="authdbuser" id="authdbuser" type="text"  />
                        </div>
                        <!-- Database Password -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="authdbpass" :value="__('installer::general.database_pass')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="authdbpass" id="authdbpass" type="text"  />
                        </div>
                    </div>
                </div>

                <x-installer::button class="mt-25 full submit text-white poppins">
                <i class="" style="margin-right: 5px" data-feather="save"></i>
                </x-installer::button>
            </form>
        </div>
    </div>
@endsection