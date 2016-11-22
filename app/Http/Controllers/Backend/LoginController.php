<?php
/**
 * Created by PhpStorm.
 * User: wq
 * Date: 2016/11/22
 * Time: 下午5:06
 */
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    use AuthenticatesUsers;

    protected $redirectedTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('backend.login.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/admin/login');
    }

}