<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Todo extends BaseController
{
    public function index()
    {
        if ($this->request->is('get')) {
            return view('pages/todo');
        }
    }
}