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
}
