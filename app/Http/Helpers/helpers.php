<?php

use App\Models\GeneralModel;

function dbLang($name)
{
    return DB::connection('web')->table('lang_strings')->where('name', $name)->where('lang_code', Lang::locale())->first()->content;
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
            #$data = DB::connection('web')->table('profiles')->where('id', $id)->first()->profile_image;
            $data = Gravatar::get($user_auth->email);
            break;
        case 'gmlevel':
            if (Schema::hasColumn('account_access', 'id'))
                $level = DB::table('account_access')->where('id', $id)->first();

            if (Schema::hasColumn('account_access', 'AccountID'))
                $level = DB::table('account_access')->where('AccountID', $id)->first();

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
    return DB::connection('web')->table('realms');
}

function getAllAuth()
{
    return DB::connection('web')->table('auth')->get();
}

function getCharactersByRealmID($id) {

    $realm = DB::connection('web')->table('realms')->where('id', $id)->first();

    GeneralModel::buildDynamicDBConnection('realm', $realm);

    DB::purge('realm');

	DB::setDefaultConnection('realm');

    return DB::table('characters');
}

function getAllUser()
{
    return DB::connection('web')->table('profiles');
}

function getAllModules()
{
    return DB::connection('web')->table('modules');
}

function getDBSettings($identifier)
{
    return DB::connection('web')->table('settings')->where('identifier', $identifier)->first()->value;
}
