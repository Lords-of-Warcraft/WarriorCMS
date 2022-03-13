@extends('installer::layouts.master')

@section('title', 'Server')

@section('content')
    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">Server {{ __('installer::general.heading') }}</h1>
            <div class="break"></div>
            <p class="poppins text-white">{{ __('installer::general.topdesc') }}</p>
            <div class="break"></div>
            <form method="POST" action="javascript:void(0);" class="mt-25" onsubmit="save(2)">
                @csrf
                @if ($connected == false)

                <div class="full poppins text-white text-center message-box warning mb-4">
                <span class="text-uppercase text-bold">{{ __('installer::general.warning')}}! </span>{{ __('installer::general.conn_fail')}}
                </div>

                @endif

                @if ($connected == true)

                <div class="full poppins text-white text-center message-box success mb-4">
                <span>{{ __('installer::general.conn_success')}}</span>
                </div>

                @endif

                <h3 class="category mt-4"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="database"></i> Auth {{ __('installer::general.database') }}</span></h3>
                <div class="mt-4">
                    <x-installer::button class="mt-25 full submit text-white poppins" onclick="javascript:location.href='/installer/server/auth'">
                    <i class="" style="margin-right: 5px" data-feather="plus"></i>
                    </x-installer::button>

                    <table class="full mt-25 text-white poppins">
                        <tr>
                            <th>#</th>
                            <th>{{ __('installer::general.database_host') }}</th>
                            <th>{{ __('installer::general.database') }}</th>
                            <th>{{ __('installer::general.actions') }}</th>
                        </tr>
                        @if ($connected == false)
                        <tr>
                            <th>Error</th>
                        </tr>
                        @else

                            @if ($auths->count() > 0 )

                            @foreach($auths as $auth)
                            <tr>
                                <th>{{ $auth->id }}</th>
                                <th>{{ $auth->dbhost }}</th>
                                <th>{{ $auth->dbname }}</th>
                                <th>Edit</th>
                            </tr>
                            @endforeach

                            @else 
                            <tr>
                                <th>Error</th>
                            </tr>

                            @endif

                        @endif
                    </table>
                </div>

                <h3 class="category mt-25"><span class="text-white poppins text-uppercase text-bold"><i class="feather-16" style="margin-right: 5px" data-feather="settings"></i>  Realms</span></h3>
                <x-installer::button class="mt-25 full submit text-white poppins" onclick="javascript:location.href='/installer/server/realm'">
                <i class="" style="margin-right: 5px" data-feather="plus"></i>
                </x-installer::button>

                <table class="full mt-25 text-white poppins">
                    <tr>
                        <th>{{ __('installer::general.realmname') }}</th>
                        <th>{{ __('installer::general.realmportal') }}</th>
                        <th>{{ __('installer::general.database') }}</th>
                        <th>Auth #</th>
                        <th>{{ __('installer::general.actions') }}</th>
                    </tr>
                    @if ($connected == false)
                        <tr>
                            <th>Error</th>
                        </tr>
                    @else

                        @if ($realms->count() > 0 )

                        @foreach($realms as $realm)
                        <tr>
                            <th>{{ $realm->realmname }}</th>
                            <th>{{ $realm->realmportal }}</th>
                            <th>{{ $realm->dbname }}</th>
                            <th>{{ $realm->auth_database }}</th>
                            <th>Edit</th>
                        </tr>
                        @endforeach

                        @else 

                        <tr>
                            <th>Error</th>
                        </tr>

                        @endif

                    @endif
                </table>

                <x-installer::button class="mt-25 full submit text-white poppins">
                <i class="" style="margin-right: 5px" data-feather="save"></i>
                </x-installer::button>
            </form>
        </div>
    </div>
@endsection