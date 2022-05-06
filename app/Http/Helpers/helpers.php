<?php

use App\Models\GeneralModel;

function dbLang($name)
{
    return DB::connection('web')->table('lang_strings')->where('name', $name)->where('lang_code', Lang::locale())->first()->content;
}

function getProfileImage($id)
{
    return DB::connection('web')->table('profile_images')->where('id', $id)->first()->name;
}

function getUserDataByID($type, $id)
{
    $auth = DB::connection('web')->table('auth')->first();

    GeneralModel::buildDynamicDBConnection('auth', $auth);

    DB::purge('auth');

	DB::setDefaultConnection('auth');

    $user_auth = DB::table('account')->where('id', $id)->first();

    if (empty($user_auth)) {
        return;
    }

    switch ($type) {
        case 'username':
            $data = $user_auth->username;
            break;
        case 'email':
            $data = $user_auth->email;
            break;
        case 'profile_image':
            $data = DB::connection('web')->table('profiles')->where('id', $id)->first()->profile_image;
            break;
        case 'gmlevel':
            $level = DB::table('account_access')->where('id', $id)->first();

            if (! empty($level))
            {
                $data = $level->gmlevel;
            } else {
                $data = 0;
            }
            break;
    }

    return $data;
}

function getAllRealms()
{
    return DB::connection('web')->table('realms')->get();
}

function getAllUser()
{
    return DB::connection('web')->table('profiles');
}