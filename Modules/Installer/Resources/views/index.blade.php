@extends('installer::layouts.master')

@section('content')
<div class="center">
    <img src="/img/logo.png" width="200px">
</div>
<div class="center mt-5">
    <div class="box activeBox" id="start">
        <div class="header">
            <h2>Welcome</h2>
        </div>
      <hr>
      <br>
        <div class="content">
            Thank you for chosing WarriorCMS. <br>
            You are currently running on CMS version {{ config('warriorcms.version')}}<br>
            To navigate through the installer, use the menu at the bottom or the buttons in the box.<br><br>
            To install the CMS you need a running World of Warcraft core with a finished Database.<br><br>
            For more information about installing a private server visit the wiki of your Core or Repack:<br>
            <ul>
                <li><a href="https://trinitycore.atlassian.net/wiki/spaces/tc/pages/2130077/Installation+Guide" target="_blank">TrinityCore</a></li>
                <li><a href="https://github.com/cmangos/issues/wiki" target="_blank">CMaNGOS</a></li>
            </ul>
            <div class="button">
                <div class="next">
                    <button class="btn" onclick="changeActiveBox('website', 'navwebsite')"><span>Next </span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="box" id="website">
        <div class="header">
            <h2>Website Settings</h2>
        </div>
      <hr>
      <br>
        <div class="content">
            <p>Setup basic website settings here:</p><br>
                <form action="javascript:void(0);">
                    <label for="webname">Website Name:</label><br>
                    <input type="text" id="webname" name="webname" placeholder="{{ config('warriorcms.website_name')}}"><br>
                    <label for="language">Language:</label><br>
                    <select id="language" name="language">
                        <option value="en">English</option>
                        <option value="de">German</option>
                    </select>
                    <label for="adminlevel">Admin Level:</label><br>
                    <input type="number" id="adminlevel" name="adminlevel" value="3">
                    <p style="font-size: 12px">Input the Security Level a user needs to access the Admin Panel here (In most cases you can leave it at 3)</p>
                    <br><br>
                    <input type="submit" value="Submit">
                </form>


            <div class="button">
                <div class="prev">
                    <button class="btn" onclick="changeActiveBox('start', 'navstart')"><span> Prev</span></button>
                </div>
                <div class="next">
                    <button class="btn" onclick="changeActiveBox('database', 'navdatabase')"><span>Next </span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="box" id="database">
        <div class="header">
            <h2>Database Settings</h2>
        </div>
      <hr>
      <br>
        <div class="content">
            <p>Here you will setup the database for your website</p><br>
            <form action="javascript:void(0);">
                <label for="username">Hostname:</label><br>
                <input type="text" id="username" name="username" placeholder="localhost"><br>
                <label for="password">Port:</label><br>
                <input type="text" id="password" name="password" placeholder="3306"><br>
                <label for="reppw">Database name:</label><br>
                <input type="text" id="reppw" name="reppw" placeholder="warriorcms"><br>
                <label for="webdatabaseuser">Database user:</label><br>
                <input type="text" id="webdatabaseuser" name="webdatabaseuser" placeholder="warriorcms"><br>
                <label for="webdatabaseuserpw">Database user password:</label><br>
                <input type="text" id="webdatabaseuserpw" name="webdatabaseuserpw" placeholder="1234"><br>
                <br>
                <input type="submit" value="Submit">
            </form>
            <div class="button">
                <div class="prev">
                    <button class="btn" onclick="changeActiveBox('website', 'navwebsite')"><span> Prev</span></button>
                </div>
                <div class="next">
                    <button class="btn" onclick="changeActiveBox('server', 'navserver')"><span>Next </span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="box" id="server">
        <div class="header">
            <h2>Realm Settings</h2>
            <button class="btn">Add realm</button>
        </div>
      <hr>
      <br>
        <div class="content">
            <table border=1>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Database URL</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>test</td>
                        <td>localhost</td>
                        <td><button class="btn"><span class="icon"><i data-feather="x"></i></span></button></td>
                </tr>
            </table>
            <div class="button">
                <div class="prev">
                    <button class="btn" onclick="changeActiveBox('database', 'navdatabase')"><span> Prev</span></button>
                </div>
                <div class="next">
                    <button class="btn" onclick="changeActiveBox('user', 'navuser')"><span>Next </span></button>
                </div>
            </div>
        </div>
    </div>
    <div class="box" id="user">
        <div class="header">
            <h2>User Settings</h2>
        </div>
      <hr>
      <br>
        <div class="content">
            <p>Create the masteruser with the highest security level.</p><br>
            <form action="javascript:void(0);">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" placeholder="admin"><br>
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" placeholder="secure password"><br>
                <label for="reppw">Repeat password:</label><br>
                <input type="password" id="reppw" name="reppw" placeholder="secure password"><br>
                <br>
                <input type="submit" value="Submit">
            </form>
            <div class="button">
                <div class="prev">
                    <button class="btn" onclick="changeActiveBox('server', 'navserver')"><span> Prev</span></button>
                </div>
                <div class="next">
                    <button class="btn"><span>Finish </span></button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('menu')
<div class="menu">
    <div class="navigation">
        <ul>
            <li class="list active" id="navstart">
                <a href="#" onclick="changeActiveBox('start')">
                    <span class="icon"><i data-feather="home"></i></span>
                    <span class="text">Start</span>
                </a>
            </li>
            <li class="list" id="navwebsite">
                <a href="#" onclick="changeActiveBox('website')">
                    <span class="icon"><i data-feather="globe"></i></span>
                    <span class="text">Website</span>
                </a>
            </li>
            <li class="list" id="navdatabase">
                <a href="#" onclick="changeActiveBox('database')">
                    <span class="icon"><i data-feather="database"></i></span>
                    <span class="text">Database</span>
                </a>
            </li>
            <li class="list" id="navserver">
                <a href="#" onclick="changeActiveBox('server')">
                    <span class="icon"><i data-feather="server"></i></span>
                    <span class="text">Realms</span>
                </a>
            </li>
            <li class="list" id="navuser">
                <a href="#" onclick="changeActiveBox('user')">
                    <span class="icon"><i data-feather="user"></i></span>
                    <span class="text">User</span>
                </a>
            </li>
            <div class="indicator"></div>
        </ul>
    </div>
</div>
@endsection