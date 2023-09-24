<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        if ($this->request->is('get')) {
            return view('pages/login');
        }
    }
}
