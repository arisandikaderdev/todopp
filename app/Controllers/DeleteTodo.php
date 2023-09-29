<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todo;

class DeleteTodo extends BaseController
{
    public function index()
    {
        $post = $this->request->getPost();
        $todoModel = new Todo();

        if (isset($post['todoId'])) {
            $data = [
                'id' => $post['todoId'],
                'inTrash' => 'yes'
            ];

            if ($todoModel->save($data)) {
                return redirect()->route('dashboard')->with('message', 'succesful delete todo');
            }
        }
        foreach ($post as $index => $value) {
            $data = [
                'id' => $index,
                'inTrash' => 'yes'
            ];
            $save = $todoModel->save($data);
        }
        if ($save) {
            return redirect()->back()->with('message', 'Succesful Delete Todo');
        }
    }
}
