<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function index()
    {
        // echo "Login Page";
        return view('user/login');
    }
}
