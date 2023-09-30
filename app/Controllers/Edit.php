<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Todo;
use Myth\Auth\Models\UserModel;

class Edit extends BaseController
{
    public function index()
    {

        if ($this->request->is('get')) {

            $user = user()->toRawArray();
            $data = [
                'user' => $user,
            ];
            return view('pages/edit', $data);
        }

        $posts = $this->request->getPost();

        $rules = [
            'username' => 'alpha_numeric_space|min_length[3]|max_length[30]|is_unique[users.username]',
            'email'    => 'valid_email|is_unique[users.email]',
        ];

        // dd($this->request->getFile('profile_pic')->isValid());


        if ($this->request->getFile('profile_pic')->isValid()) {
            $profilePicRules = [
                'profile_pic' => [
                    'uploaded[profile_pic]',
                    'is_image[profile_pic]',
                    'mime_in[profile_pic,image/jpg,image/jpeg,image/gif,image/png,image/webp]',
                    'max_size[profile_pic,2000]',
                ]
            ];

            $rules = [...$rules, ...$profilePicRules];
            if (!$this->validateData($posts, $rules)) {
                return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
            }

            $todoModel = new UserModel();

            // profile_pic

            $profile_pic = $this->request->getFile('profile_pic');

            $newName_profile = $profile_pic->getRandomName();

            $profilePIcString = ['profile_pic' => base_url("profile/$newName_profile")];
            // dd($profilePIcString);
            $profile_pic->move("profile", $newName_profile);


            $updateUser = [
                'username'  => $posts['username'],
                'email'     => $posts['email'],
                'profile_pic' => $profilePIcString
            ];


            if ($todoModel->update(user_id(), $updateUser)) {
                // move to public

                return redirect()->back()->with('message', 'succesfull update profile');
            }
        }

        if (!$this->validateData($posts, $rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $todoModel = new UserModel();
        // dd($todoModel);

        $updateUser = [
            'username'  => $posts['username'],
            'email'     => $posts['email']
        ];

        if ($todoModel->update(user_id(), $updateUser)) {

            return redirect()->back()->with('message', 'succesfull update profile');
        }
    }
}
