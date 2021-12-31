<?php


namespace App\Http\Controllers;


use Encore\Admin\Facades\Admin;
use Illuminate\Http\Request;
use Illuminate\Validation\UnauthorizedException;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function simulateLogin(Request $request)
    {
        if(Admin::guard()->attempt($request->only(['username', 'password']))){
            admin_toastr(trans('admin.login_successful'));

            $request->session()->regenerate();

            return redirect()->intended('/admin/dashboard');
        }
        throw new UnauthorizedException();
    }
}
