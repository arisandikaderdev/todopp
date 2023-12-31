<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todo;

class Dashboard extends BaseController
{

    public function index()
    {
        if ($this->request->is('get')) {
            $todoModel = new Todo();

            $todo = $todoModel->where('id_user', user_id())->where('inTrash', 'no')->find();
            $user = user()->toRawArray();
            $data = [
                'user' => $user,
                'todos'  => $todo,
            ];
            return view('pages/dashboard', $data);
        }

        $post = $this->request->getPost();

        $rules = [
            'title' => 'required|min_length[3]',
            'todo' => 'required'
        ];

        if (!$this->validateData($post, $rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $todoModel = new Todo();

        $todo = [
            'title'     => $post['title'],
            'todo'      => $post['todo'],
            'inTrash'   => 'no',
            'id_user'   => user_id(),
        ];

        if ($todoModel->save($todo)) {
            session()->setFlashdata('addtodo', 'open');
            return redirect()->back()->with('message', 'Succes Add Todo');
        }
    }
}
