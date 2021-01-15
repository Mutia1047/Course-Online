<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        helper(['form']);
        $data['title'] = "Login";
        return view('/page/login', $data);
    }

    public function auth()
    {
        helper(['form']);
        $rules = [
            'email'         => 'required|trim',
            'password'      => 'required',
        ];

        if ($this->validate($rules)) {
            $session = session();
            $model = new UserModel();
            $email = $this->request->getVar('email');
            $password = $this->request->getVar('password');
            $dataUser = $model->where('email', $email)->first();
            if ($dataUser) {
                $pass = $dataUser['password'];
                $verify_password = password_verify($password, $pass);

                if ($verify_password) {
                    $data_session = [
                    'id'          => $dataUser['id'],
                    'email'       => $dataUser['email'],
                    'role_id'     => $dataUser['role_id'],
                    'logged_in'   => true
                ];
                    if ($dataUser['role_id'] == '1') {
                        $session->set($data_session);
                        return redirect()->to('/user/home');
                    } elseif ($dataUser['role_id'] == '2') {
                        $session->set($data_session);
                        return redirect()->to('/page/admin');
                    } elseif ($dataUser['role_id'] == '0') {
                        $session->set($data_session);
                        return redirect()->to('/user/home');
                    }
                } else {
                    $session->setFlashdata('msg', 'Password salah');
                    return redirect()->to('/page/login');
                }
            } else {
                $session->setFlashdata('msg', 'Email tidak ditemukan');
                return redirect()->to('/page/login');
            }
        } else {
            $dataUser['validation'] = $this->validator;
            echo view('sign/login', $dataUser);
        }
    }

    public function logout() {
        $session = session();
        $session->destroy();
        return redirect()->to('/page/login');
    }

}