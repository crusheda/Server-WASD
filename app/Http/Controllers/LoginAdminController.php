<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginAdminController extends Controller
{
    public function index(Request $request)
    {
        if($request->username == 'admin' && $request->password == 'wasd-admin'){
            return redirect('/admin');
        }
        else {
            return redirect('/admin/login');
        }
    }
}
