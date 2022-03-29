<?php

namespace Modules\Installer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;
use App\Models\UserModel;
use Illuminate\Support\Facades\Schema;

class InstallerController extends Controller
{
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
        if ($this->testconnection() == true) {
            $connected = true;
        } else {
            $connected = false;
        }
        
        $realms = $this->getallrealms();

        $auths = $this->getallauth();

        return view('installer::server', ['connected' => $connected, 'realms' => $realms, 'auths' => $auths]);
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function testconnection()
    {
        $config = config('database.connections.web.host');

        if ($config == 'placeholder') {
            return false;
        } 
        
        try {
            DB::connection('web');

            if (!Schema::hasTable('realms') or !Schema::hasTable('auth')) {
                return false;
            }

            return true;
        } catch (Throwable $e) {
            return false;
        }
    }

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function realm()
    {
        if ($this->testconnection() == true) {
            $connected = true;
        } else {
            $connected = false;
        }

        $auths = $this->getallauth();

        return view('installer::realm', ['connected' => $connected, 'auths' => $auths]);
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
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('installer::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('installer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('installer::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
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
            'dbpass' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $connected = $this->testconnection();

       if ($connected == false) {
           return back()->with('warning', __('installer::general.conn_fail'));
       }

       try {
           DB::table('auth')->insert([
               'dbhost' => $request->dbhost,
               'dbport' => $request->dbport,
               'dbname' => $request->dbname,
               'dbuser' => $request->dbuser,
               'dbpass' => $request->dbpass,
           ]);

           return redirect('/installer/server/')->with('success', 'Auth database added');
       } catch (Throwable $e) {
           report($e);

           return false;
       }
    }

    public function removeauth(Request $request)
    {
        DB::table('auth')->where('id', $request->id)->delete();
    }

    public function getallrealms()
    {
        $connected = $this->testconnection();

        if ($connected == false) {
            return false;
        }

        return DB::connection('web')->table('realms')->get();
    }

    public function getallauth()
    {
        $connected = $this->testconnection();

        if ($connected == false) {
            return false;
        }

        return DB::connection('web')->table('auth')->get();
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

       $connected = $this->testconnection();

       if ($connected == false) {
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

    public function removerealm(Request $request)
    {
        DB::table('realms')->where('id', $request->id)->delete();
    }

    public function finish(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3',
            'e-mail' => 'required|email',
            'password' => 'required||confirmed|min:6',
       ]);

       if ($validator->fails()) {
        return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        UserModel::RegisterUser();

    }
}
