<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginAdminController extends Controller
{
    public function index (Request $request)
    {
        if($request->username == 'admin' && $request->password == 'admin'){
            return redirect('/admin');
        }
        else {
            return redirect('/admin/login');
        }
    }
}
