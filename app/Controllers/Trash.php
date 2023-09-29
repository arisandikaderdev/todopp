<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todo;

class Trash extends BaseController
{
    public function index()
    {
        if ($this->request->is('get')) {
            $todoModel = new Todo();
            $user  = user()->toRawArray();
            $todo = $todoModel->where('id_user', user_id())->where('inTrash', 'yes')->find();
            $data = [
                'user' => $user,
                'todos' => $todo
            ];
            return view('pages/trash', $data);
        }
    }
}
