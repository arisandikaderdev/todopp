<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todo;

class Restoretodo extends BaseController
{
    public function index()
    {
        $post = $this->request->getPost();

        $todoModel = new Todo();
        foreach ($post as $index => $value) {
            $data = [
                'id' => $index,
                'inTrash' => 'no'
            ];
            $save = $todoModel->save($data);
        }
        if ($save) {
            return redirect()->back()->with('message', 'Succesful Restore Todo');
        }
    }

    public function restoreOne()
    {
        $post = $this->request->getPost();
        $todoModel = new Todo();

        $data = [
            'id' => $post['id'],
            'inTrash' => 'no'
        ];

        if ($todoModel->save($data)) {
            return redirect()->route('trash')->with('message', 'succesful restore todo');
        }
    }
}
