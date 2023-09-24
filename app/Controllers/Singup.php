<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Singup extends BaseController
{
    public function index()
    {
        if ($this->request->is('get')) {
            return view('pages/singup');
        }
    }
}
