@extends('installer::layouts.master')

@section('content')
<div class="center">
    <img src="/img/logo.png" width="200px">
</div>
<div class="center mt-5">
    <i data-feather="caret-left" class="section-arrow"></i>
    <div class="box" id="start">
      <h2>Welcome</h2>
      <hr>
      <p>WarriorCMS is an open source content menagement system<br> build in Laravel by the World of Warriors Private Server Team.</p>
    </div>
    <i data-feather="caret-right" class="section-arrow"></i>
</div>
@endsection

@section('menu')
<div class="menu">
    <div class="navigation">
        <ul>
            <li class="list active">
                <a href="#start">
                    <span class="icon"><i data-feather="home"></i></span>
                    <span class="text">Start</span>
                </a>
            </li>
            <li class="list">
                <a href="#website">
                    <span class="icon"><i data-feather="globe"></i></span>
                    <span class="text">Website</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon"><i data-feather="database"></i></span>
                    <span class="text">Database</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon"><i data-feather="server"></i></span>
                    <span class="text">Realms</span>
                </a>
            </li>
            <li class="list">
                <a href="#">
                    <span class="icon"><i data-feather="user"></i></span>
                    <span class="text">User</span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>
</div>
@endsection