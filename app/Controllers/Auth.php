<?php

namespace App\Controllers;

use App\Models\AdminModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function prosesLogin()
    {
        $model = new AdminModel();

        $user = $model->where('username', $this->request->getPost('username'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->set('login', true);
            return redirect()->to('/admin');
        }

        return redirect()->back()->with('error', 'Login gagal');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
    public function generate()
    {
        echo password_hash('123456', PASSWORD_DEFAULT);
    }
}
