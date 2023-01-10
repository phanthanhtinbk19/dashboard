<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Session;
use Illuminate\support\Facades\Redirect;

class AuthController extends Controller
{
    public function adminLogin(Request $request)
    {
        return view('pages.admin.login.login');
    }

    public function adminSaveLogin(Request $request)
    {
        $data = $request->all();
        $email = $data['email'];
        $password = $data['password'];
        $login = User::where('email', $email)
            ->where('password', $password)
            ->first();
        if ($login) {
            Session::put('user_name', $login->name);
            Session::put('user_id', $login->id);
            return redirect('/admin/dashboard');
        } else {
            return redirect('/admin/login');
        }
    }

    public function login_facebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook()
    {
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider', 'facebook')
            ->where('provider_user_id', $provider->getId())
            ->first();
        if ($account) {
            //login in vao trang quan tri
            $account_name = Login::where('id', $account->user)->first();
            //  Session::put('login',$account_name->name);
            Session::put('id', $account_name->id);
            return redirect('/')->with('message', 'Đăng nhập Admin thành công');
        } else {
            $customer = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook',
            ]);

            $orang = Login::where('email', $provider->getEmail())->first();

            if (!$orang) {
                $orang = Login::create([
                    // 'name' => $provider->getName(),
                    'email' => $provider->getEmail(),
                    'password' => '',
                ]);
            }
            $customer->login()->associate($orang);
            $customer->save();

            $account_name = Login::where('id', $account->user)->first();

            //  Session::put('login',$account_name->name);
            Session::put('id', $account_name->id);
            return redirect('/')->with('message', 'Đăng nhập Admin thành công');
        }
    }

    public function adminLogout()
    {
        Session::put('user_name', null);
        Session::put('user_id', null);
        return redirect('/admin/login');
    }

    //user

    public function login(Request $request)
    {
        return view('pages.user.login');
    }
    public function register()
    {
        return view('pages.user.register');
    }

    public function saveRegister(Request $request)
    { 
        $request->validate([
            'email' => 'required|email|unique:tbl_admin',
            'password' => 'required|min:6',
        ]);
        try {
            $data = $request->all();
            $user = new User();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->phone = $data['phone'];
            $user->password = $data['password'];
            $user->save();
            toastr()->success('Data has been saved successfully!', 'Congrats');
            return redirect('/login');
        } catch (\Throwable $th) {
            toastr()->error('Oops! Something went wrong!', 'Oops!');
        }
    }

    public function saveLogin(Request $request)
    {
        $data = $request->all();
        $email = $data['email'];
        $password = $data['password'];
        $login = User::where('email', $email)
            ->where('password', $password)
            ->first();
        if ($login) {
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
}