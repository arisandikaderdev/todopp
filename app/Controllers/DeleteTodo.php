<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todo;

class DeleteTodo extends BaseController
{
    public function index()
    {
        $post = $this->request->getPost();
        // dd($post);p
        $todoModel = new Todo();
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
