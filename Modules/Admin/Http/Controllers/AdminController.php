<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\GeneralModel;
use App\Models\WoWModel;
use Modules\News\Entities\News;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::index');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function settings()
    {

        return view('admin::settings');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function users()
    {
        return view('admin::users');
    }

    public function modules()
    {
        return view('admin::modules');
    }

    public function moduleSettings($module)
    {
        $data = [
            'news' => News::getAllNews()->get(),
        ];
        if (!getAllModules()->where('name', $module)->first())
        {
            return redirect()->back()->with('toast_error', 'Module not found');
        }

        return view('admin::'.$module.'.settings', $data);
    }

    public function activateModule($module)
    {
        if(DB::table('modules')->where('id', $module)->update(['status' => 1]));
        {
            return back()->with('success', 'Module activated');
        }

        return back()->with('toast_error', 'something went wrong');
    }

    public function deactivateModule($module)
    {
        if(DB::table('modules')->where('id', $module)->update(['status' => 0]));
        {
            return back()->with('success', 'Module deactivated');
        }

        return back()->with('toast_error', 'something went wrong');
    }

    public function usersview(Request $request, $id)
    {
        if (empty(getUserDataByID('username', $id))) {
            return view('admin::usernotfound');
        } else {
            $data = [
                'id'        => $id,
                'username'  => getUserDataByID('username', $id),
                'gmlevel'   => getUserDataByID('gmlevel', $id)
            ];

            return view('admin::usersview', $data);
        }
    }

    public function update(\Codedge\Updater\UpdaterManager $updater)
    {
        // Check if new version is available
        if($updater->source()->isNewVersionAvailable()) {

        // Get the current installed version
        echo $updater->source()->getVersionInstalled();

        // Get the new version available
        $versionAvailable = $updater->source()->getVersionAvailable();

        echo $versionAvailable;

        // Create a release
        $release = $updater->source()->fetch($versionAvailable);

        // Run the update process
        $updater->source()->update($release);

        try {
            Artisan::call('migrate --force');
            Artisan::call('db:seed --force');
        } catch (Throwable $e) {
            return back()->with('errors', 'Something went wrong');
        }

        return back()->with('success', 'Update Complete');

        } else {
            return back()->with('info', 'No new version');
        }
    }
}
