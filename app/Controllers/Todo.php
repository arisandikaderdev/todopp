<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todo as ModelsTodo;

class Todo extends BaseController
{
    public function index($id)
    {
        if ($this->request->is('get')) {
            $todoModel = new ModelsTodo();

            $todo = $todoModel->where('id_user', user_id())->where('inTrash', 'no')->where('id', $id)->first();

            $user = user()->toRawArray();
            $data = [
                'user' => $user,
                'todo' => $todo
            ];
            return view('pages/todo', $data);
        }
    }

    public function trashTodo($id)
    {
        $todoModel = new ModelsTodo();
        $todo = $todoModel->where('id_user', user_id())->where('inTrash', 'yes')->where('id', $id)->first();

        $user = user()->toRawArray();
        $data = [
            'user' => $user,
            'todo' => $todo
        ];

        return view('pages/todotrash', $data);
    }
}
