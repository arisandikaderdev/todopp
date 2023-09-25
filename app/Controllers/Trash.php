<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Trash extends BaseController
{
    public function index()
    {
        return view('pages/trash');
    }
}
