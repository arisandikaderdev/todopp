<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index()
    {
        $user = user()->toRawArray();
        $data = [
            'user' => $user,
        ];
        return view('pages/contact', $data);
    }
}
