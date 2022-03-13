<?php

namespace Modules\Installer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

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

    public function server()
    {
        if ($this->testconnection() == true) {
            $connected = true;
        } else {
            $connected = false;
        }
        return view('installer::server', ['connected' => $connected]);
    }

    public function testconnection()
    {
        $config = config('database.connections.web.host');

        if ($config == 'placeholder') {
            return false;
        } 
        
        try {
            DB::connection('web')->table('realms')->get();
            return true;
        } catch (Throwable $e) {
            return false;
        }
    }

    public function realm()
    {
        return view('installer::realm');
    }

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
        Artisan::call('migrate');
       } catch (Throwable $e) {
           return back()->with('errors', 'Something went wrong');
       }

       return redirect('/installer/server')->with('success', 'Web settings saved');
    }

    public function installserver(Request $request) {
        $validator = Validator::make($request->all(), [
            'authdbhostname' => 'required',
            'authdbport' => 'required',
            'authdbname' => 'required',
            'authdbuser' => 'required',
            'authdbpw' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $this->writeconfig('database', 'connections.auth.host', $request->authdbhostname);
        $this->writeconfig('database', 'connections.auth.port', $request->authdbport);
        $this->writeconfig('database', 'connections.auth.database', $request->authdbname);
        $this->writeconfig('database', 'connections.auth.username', $request->authdbuser);
        $this->writeconfig('database', 'connections.auth.password', $request->authdbpw);

        return redirect('/installer/createmasteruser')->with('success', 'Server settings saved');
    }

     

    public function addrealm(Request $request)
    {
       $validator = Validator::make($request->all(), [
           'realmname' => 'required|min:3',
           'realmportal' => 'required|url',
           'realmdbname' => 'required',
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
               'name' => $request->realmname,
               'realmportal' => $request->realmportal,
               'db_name' => $request->realmdbname,
           ]);
       } catch (Throwable $e) {
           report($e);

           return false;
       }
    }
}
