<?php

namespace Modules\Installer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Validator;

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
        return view('installer::server');
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
            'lang' => 'required',
            'webdbhostname' => 'required',
            'webdbhport' => 'required',
            'webdbname' => 'required',
            'webdbuser' => 'required',
            'webdbpw' => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        $this->writeconfig('app', 'name', $request->webname);
        $this->writeconfig('app', 'url', $request->weburl);
        $this->writeconfig('app', 'locale', $request->lang);
        $this->writeconfig('database', 'connections.web.host', $request->webdbhostname);
        $this->writeconfig('database', 'connections.web.port', $request->webdbport);
        $this->writeconfig('database', 'connections.web.database', $request->webdname);
        $this->writeconfig('database', 'connections.web.username', $request->webduser);
        $this->writeconfig('database', 'connections.web.password', $request->webdbpw);

        return redirect('/installer/server')->with('success', 'Web settings saved');
     }
}
