<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class Register extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->form_validation = \Config\Services::validation();
    }

    public function index()
    {
        $data['title'] = "Daftar";
        $dataUser = [];
        return view('/page/register', $data, $dataUser);
    }

    public function simpan()
    {
        $dataUser = [];
		helper(['form']);
        $rules = [
            'nama'        => 'required|trim',
            'email'         => 'required|trim|is_unique[user.email]',
            'password'      => 'required|min_length[3]|max_length[20]',
            'confirm_password'  => 'required|matches[password]'
        ];

        if ($this->validate($rules)) {
            $model = new UserModel();
            $dataUser = [
                'nama'      => $this->request->getVar('nama'),
                'email'     => $this->request->getVar('email'),
                'role_id'     => '0',
                'password'  => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)

            ];
            $model->save($dataUser);
            $session = session();
			$session->setFlashdata('success', 'Successful Registration');
            return redirect()->to(base_url('page/login'));
        } else {
            echo view('/sign/register');
        }
    }
}
