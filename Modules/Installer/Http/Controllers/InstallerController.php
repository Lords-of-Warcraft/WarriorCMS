<?php

namespace Modules\Installer\Http\Controllers;

use App\Models\GeneralModel;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class InstallerController extends Controller
{
    private $connected;

    public function __construct(UserController $UserController)
    {
        $this->connected = GeneralModel::testconnection();
        $this->UserController = $UserController;
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function web()
    {
        return view('installer::web');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function server()
    {
        return view('installer::server', ['connected' => $this->connected, 'realms' => GeneralModel::getallrealms(), 'auths' => GeneralModel::getallauth()]);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function realm()
    {
        return view('installer::realm', ['connected' => $this->connected, 'auths' => GeneralModel::getallauth()]);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function auth()
    {
        return view('installer::auth');
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function user()
    {
        return view('installer::createuser');
    }

    /**
     * Write to config files
     * @param $file
     * @param $note
     * @param $value
     */

     public function writeconfig($file, $note, $value)
     {
        config([$file.'.'.$note => $value]);
        $text = '<?php return ' . var_export(config($file), true) . ';';
        file_put_contents(config_path($file.'.php'), $text);
     }

    /**
     * Execute the installation for the webinstaller
     * @param Request $request
     */

    public function installweb(Request $request) 
    {

       $validator = Validator::make($request->all(), [
           'webname' => 'required|min:3',
           'weburl' => 'required|url',
           'webdbhostname' => 'required',
           'webdbport' => 'required',
           'webdbname' => 'required',
           'webdbuser' => 'required',
           'webdbpw' => 'required'
       ]);

       if ($validator->fails()) {
           return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
       }

       $this->writeconfig('app', 'name', $request->webname);
       $this->writeconfig('warriorcms', 'website_name', $request->webname);
       $this->writeconfig('app', 'url', $request->weburl);
       $this->writeconfig('database', 'connections.web.host', $request->webdbhostname);
       $this->writeconfig('database', 'connections.web.port', $request->webdbport);
       $this->writeconfig('database', 'connections.web.database', $request->webdbname);
       $this->writeconfig('database', 'connections.web.username', $request->webdbuser);
       $this->writeconfig('database', 'connections.web.password', $request->webdbpw);

       try {
        Artisan::call('migrate --force');
       } catch (Throwable $e) {
           return back()->with('errors', 'Something went wrong');
       }

       return redirect('/installer/server')->with('success', 'Web settings saved');
    }

    public function addauthdb(Request $request) {
        $validator = Validator::make($request->all(), [
            'dbhost' => 'required',
            'dbport' => 'required',
            'dbname' => 'required',
            'dbuser' => 'required',
            'dbpass' => 'required',
            'authtype' => 'required',
            'exp'    => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

       if ($this->connected == false) {
           return back()->with('warning', __('installer::general.conn_fail'));
       }

       try {
           DB::table('auth')->insert([
               'dbhost' => $request->dbhost,
               'dbport' => $request->dbport,
               'dbname' => $request->dbname,
               'dbuser' => $request->dbuser,
               'dbpass' => $request->dbpass,
               'auth_type'  => $request->authtype,
               'exp'    => $request->exp,
           ]);

           return redirect('/installer/server/')->with('success', 'Auth database added');
       } catch (Throwable $e) {
           report($e);

           return false;
       }
    }

    public function authremove(Request $request)
    {
        DB::table('auth')->where('id', $request->id)->delete();

        return redirect()->back()->with('success', 'Auth database removed');
    }

    public function addrealm(Request $request)
    {
       $validator = Validator::make($request->all(), [
            'realmname' => 'required|min:3',
            'realmportal' => 'required',
            'authref' => 'required',
            'realmdbhost' => 'required',
            'realmdbport' => 'required',
            'realmdbname' => 'required',
            'realmdbuser' => 'required',
            'realmdbpass' => 'required'
       ]);

       if ($validator->fails()) {
           return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
       }

       if ($this->connected == false) {
           return back()->with('warning', __('installer::general.conn_fail'));
       }

       try {
           DB::table('realms')->insert([
               'realmname' => $request->realmname,
               'realmportal' => $request->realmportal,
               'auth_database' => $request->authref,
               'dbhost' => $request->realmdbhost,
               'dbport' => $request->realmdbport,
               'dbname' => $request->realmdbname,
               'dbuser' => $request->realmdbuser,
               'dbpass' => $request->realmdbpass,
           ]);

           return redirect('/installer/server/')->with('success', 'Realm added');
       } catch (Throwable $e) {
           report($e);

           return false;
       }
    }

    public function realmremove(Request $request)
    {
        DB::table('realms')->where('id', $request->id)->delete();

        return redirect()->back()->with('success', 'Realm removed');
    }

    public function finish(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3',
            'e_mail' => 'required|email',
            'password' => 'required|confirmed|min:6',
       ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $this->UserController->RegisterUser($request->username, $request->e_mail, $request->password, 3);

    }
}
