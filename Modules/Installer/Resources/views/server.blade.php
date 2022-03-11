@extends('installer::layouts.master')

@section('title', 'Web Installer')

@section('content')

    

    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">Server Installation</h1>
            <div class="break"></div>
            <p class="poppins text-white">To continue the installation, please fill out all fields below</p>
            <div class="break"></div>
            <form method="POST" action="javascript:void(0);" class="mt-25" onsubmit="save(2)">
                @csrf


                <h3 class="category"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i>  Realms</span></h3>
                <x-installer::button class="mt-25 full submit text-white poppins" onclick="javascript:location.href='/installer/server/addrealm'">
                <i class="" style="margin-right: 5px" data-feather="plus"></i>
                </x-installer::button>

                <table class="full mt-25 text-white poppins">
                    <tr>
                        <th>Name</th>
                        <th>Database</th>
                        <th>Actions</th>
                    </tr>
                    <tr>
                        <td>Blutkessel</td>
                        <td>bluetkessel_db</td>
                        <td class="text-center">Edit<br>Delete</td>
                    </tr>
                </table>

                <h3 class="category mt-25"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="database"></i> Auth Database</span></h3>
                <!-- Database Settings -->
                <div class="mt-4">
                    <div class="group">
                        <!-- Database Hostname -->
                        <div class="group-item">
                            <x-installer::label for="Database Hostname" :value="__('Database Hostname')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="Database Hostname" id="Database Hostname" type="text"  />
                        </div>
                        <!-- Database Name -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="Database Name" :value="__('Database Name')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="Database Name" id="Database Name" type="text"  />
                        </div>
                    </div>
                    <div class="group mt-4">
                        <!-- Database Username -->
                        <div class="group-item">
                            <x-installer::label for="Database Username" :value="__('Database Username')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="Database Username" id="Database Username" type="text"  />
                        </div>
                        <!-- Database Password -->
                        <div class="group-item ml-10" style="border-left: 10px solid transparent">
                            <x-installer::label for="Database Name" :value="__('Database Password')" class="poppins" />
                            <div class="break"></div>
                            <x-installer::input class="input full text-white" name="Database Password" id="Database Password" type="text"  />
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