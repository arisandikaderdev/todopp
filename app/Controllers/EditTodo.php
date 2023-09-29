<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todo;

class EditTodo extends BaseController
{
    public function index()
    {
        $post = $this->request->getPost();

        $rules = [
            'title' => 'required|min_length[3]',
            'todo' => 'required'
        ];


        if (!$this->validateData($post, $rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $todoModel = new Todo();

        $data = [
            'id' => $post['id'],
            'title' => $post['title'],
            'todo' => $post['todo']
        ];

        if ($todoModel->save($data)) {
            return redirect()->back()->with('message', 'succesfull edit todo');
        }
    }
}
