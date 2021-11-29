<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Library\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login-page');
    }

    public function dologin(Request $request)
    {
        $check_user = Auth::authenticate($request->username, $request->password);

        if ($check_user['status'] == 1) {
            return redirect('/');
            //return 'status = 1';
        } else {
            return redirect('auth/login');
            //return 'status <> 1';
        }
    }

    public function logout()
    {
        session()->forget('user');

        return redirect('auth/login');
    }

    public function CheckLogin($username, $password){
        $user = DB::table('user_admin')->where('username', $username)->first();

        if (!empty($user)) {
            if (password_verify($password, $user->password)) {
                $dat = "berhasil";
                $data['status'] = $dat;
                echo json_encode($data);
                exit; 
            } else {
                $dat = "gagal";
                    $data['status'] = $dat;
                    echo json_encode($data);
                    exit;
            }
        }  else {
            $dat = "gagal";
                $data['status'] = $dat;
                echo json_encode($data);
                exit;
        }
    }
}
