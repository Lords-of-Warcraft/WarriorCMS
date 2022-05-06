<?php

namespace Modules\User\Http\Controllers;

use App\Models\Auth;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\GeneralModel;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function __construct(Auth $AuthModel)
    {
        $this->AuthModel = $AuthModel;
    }

    public function index()
    {
        return view('user::index');
    }

    public function login()
    {
        return view('user::login');
    }

    public function register()
    {
        return view('user::register');
    }

    public function renderProfile(Request $request, $id)
    {
        if (empty(getUserDataByID('username', $id))) {
            return view('user::notfound');
        } else {
            $data = [
                'id'       => $id,
                'username' => getUserDataByID('username', $id),
            ];

            return view('user::profile', $data);
        }
    }

    public function log_in(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'accountName' => 'required|min:3',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        return $this->AuthModel->auth($request->accountName, $request->password);
    }

    public function log_out()
    {
        $this->AuthModel->logout();

        return redirect('/home')->with('success', 'Logged Out');
    }

    public function register_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|min:3',
            'email'    => 'required|min:5|email',
            'password' => 'required|confirmed|min:6',
        ]);

        if ($validator->fails()) {
            return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }

        if ($this->AuthModel->InsertUser($request->username, $request->email, $request->password)):
            return redirect('/home')->with('success', 'Account Created');
        else:
            return back()->with('toast_error', 'error')->withInput();
        endif;
    }
}
