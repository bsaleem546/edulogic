<?php

namespace App\Http\Controllers;

use App\Models\Admin_users;
use App\Models\Schools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;

class AuthController extends Controller
{
    public function admin_login(Request $request)
    {
        if(Admin_users::where(['email' => $request->email, 'password' => md5($request->password)])->exists())
        {
            $user = Admin_users::where(['email' => $request->email, 'password' => md5($request->password)])->first();

            Session::put('user', $user);
            Session::put('isSuperAdmin', true);
            return Response::json(['status' => true, 'message' => 'Successfully Logged in', 'redirect' => route('dashboard')]);

        }else{
            return Response::json(['status' => false, 'message' => 'Invalid email or password!']);
        }
    }

    public function admin_dashboard()
    {
        if(!Session::get('isSuperAdmin') == null){
            return view('dashboard');
        }
        else{
            return redirect()->back();
        }
    }

    public function admin_logout()
    {
        if(!Session::get('isSuperAdmin') == null){
            Session::flush();
            return redirect(route('login'));
        }
        else{
            return redirect()->back();
        }

    }

    public function school_login(Request $request)
    {
        if(Schools::where(['school_email' => $request->email, 'school_password' => md5($request->password)])->exists())
        {
            $user = Schools::where(['school_email' => $request->email, 'school_password' => md5($request->password)])->first();

            if($user->school_headoffice == "Yes"){
                Session::put('isHeadSchool', true);
            }else{
                Session::put('isSchool', true);
            }

            Session::put('user', $user);

            return Response::json(['status' => true, 'message' => 'Successfully Logged in', 'redirect' => route('school-dashboard')]);

        }else{
            return Response::json(['status' => false, 'message' => 'Invalid email or password!']);
        }
    }

    public function school_dashboard($id = '')
    {
        if(!empty($id) && is_numeric($id)){

            Session::flush();

            $user = Schools::find($id);

            if($user->school_headoffice == "Yes"){
                Session::put('isHeadSchool', true);
            }else{
                Session::put('isSchool', true);
            }

            Session::put('isSuperAdmin', '');
            Session::put('user', $user);
        }
//        dd('asdas1');
        if(!Session::get('isHeadSchool') == null || !Session::get('isSchool') == null ){

            return view('dashboard');
        }
        else{
            return redirect()->back();
        }
    }

    public function school_logout()
    {
        if(!Session::get('isHeadSchool') == null || !Session::get('isSchool') == null ){
            Session::flush();
            return redirect(route('school-login'));
        }
        else{
            return redirect()->back();
        }

    }
}
