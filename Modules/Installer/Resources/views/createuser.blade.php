@extends('installer::layouts.master')

@section('title', 'User')

@section('content')
    <div class="content-container">
        <div class="flex-container">
            <h1 class="poppins text-white">User {{ __('installer::general.heading') }}</h1>
            <div class="break"></div>
            <p class="poppins text-white">{{ __('installer::general.topdesc') }}</p>
            <div class="break"></div>
        </div>
    </div>
@endsection