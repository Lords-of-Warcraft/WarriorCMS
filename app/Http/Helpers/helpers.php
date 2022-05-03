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

    switch ($type) {
        case 'username':
            $data = DB::table('account')->where('id', $id)->first()->username;
            break;
        case 'email':
            $data = DB::table('account')->where('id', $id)->first()->email;
            break;
        case 'profile_image':
            $data = DB::connection('web')->table('profiles')->where('id', $id)->first()->profile_image;
            break;
        case 'gmlevel':
            $level = DB::table('account_access')->where('id', $id)->first()->gmlevel;

            if (! empty($level))
            {
                $data = $level;
            } else {
                $data = 0;
            }
            break;
    }

    return $data;
}