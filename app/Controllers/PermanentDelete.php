<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todo;

class PermanentDelete extends BaseController
{
    public function index()
    {
        $post = $this->request->getPost();
        $id = [];

        $todoModel = new Todo();
        foreach ($post as $index => $value) {
            array_push($id, $index);
        }
        if ($todoModel->delete($id)) {
            return redirect()->back()->with('message', 'Succesful Delete Todo');
        }
    }
}
