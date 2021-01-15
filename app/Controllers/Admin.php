<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\Kelas;

class Admin extends BaseController
{

    public function index()
    {
        $model = new UserModel;
        $data['getUser'] = $model->getUser();
        dd($data['getUser']);
        echo view ('/page/admin', $data);
    }

    public function edituser($id)
    {
        $model = new UserModel();
        $getUser = $model->getUser($id)->getRow();
        if (isset($getUser)) {
            $data['user'] = $getUser;
            $data['title']  = $getUser->nama;;

            return view('admin/edituser', $data);
        } else {

            echo '<script>
                    alert("ID materi ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('/admin/edituser/') .$id. '"
                </script>';
        }
    }

    public function updateuser()
    {
        $model = new UserModel();
        $id = $this->request->getPost('id');
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'password'  =>password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'email'         => $this->request->getPost('email'),
            'role_id'  => $this->request->getPost('role_id'),

        );
        //dd($id);
        $model->editUser($data, $id);
        echo '<script>
                alert("Sukses Edit Data Pengguna");
                window.location="' . base_url('/admin/pengguna') . '"
            </script>';
    }

    public function tambahpengguna()
    {
        return view('admin/tambahpengguna');
    }

    public function adduser()
    {
        $model = new UserModel();
        $data = array(
            'nama' => $this->request->getPost('nama'),
            'email'         => $this->request->getPost('email'),
            'role_id'  => $this->request->getPost('roleid'),
            'password'  => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        );
        $model->saveUser($data);
        echo '<script>
                alert("Sukses Tambah Data User");
                window.location="' . base_url('/admin/pengguna') . '"
            </script>';
    }

    public function hapususer($id)
    {
        $model = new UserModel();
        $dataUser = $model->getUser($id)->getRow();
        if (isset($dataUser)) {
            $model->hapusUser($id);
            echo '<script>
                    alert("Hapus Data User Sukses");
                    window.location="' . base_url('/admin/pengguna') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Hapus Gagal !, ID user ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('/admin/pengguna') . '"
                </script>';
        }
    }
    //Bagian Kelas
    public function tamkelas()
    {
        return view('admin/tamkelas');
    }

    public function addkelas()
    {
        $model = new Kelas();
        $rules = [
           'gambar' => [
               'rules' => 'uploaded[gambar]|max_size[gambar, 1024]'
           ]
        ];
        $gambar = $this->request->getFile('gambar');
            $gambar->move(ROOTPATH . 'public/img');
 
            $data = [
                'gambar' => $gambar->getName(),
                'nama_kelas' => $this->request->getPost('nama_kelas'),
                'kategori'   => $this->request->getPost('kategori'),
                'harga'  => $this->request->getPost('harga')
            ];
        $model->saveKelas($data);
        echo '<script>
                alert("Sukses Tambah Data User");
                window.location="' . base_url('/admin/kelas') . '"
            </script>';

    }

    public function updatekelas()
    {
        $model = new Kelas();
        $id = $this->request->getPost('id');
        $rules = [
            'gambar' => 'uploaded[gambar]|max_size[gambar, 1024]'
         ];
        $gambar = $this->request->getFile('gambar');
            $gambar->move(ROOTPATH . 'public/img');
 
            $data = [
                'gambar' => $gambar->getName(),
                'nama_kelas' => $this->request->getPost('nama_kelas'),
                'kategori'   => $this->request->getPost('kategori'),
                'harga'  => $this->request->getPost('harga')
            ];
        //dd($id);
        $model->editUser($data, $id);
        echo '<script>
                alert("Sukses Edit Data Kelas");
                window.location="' . base_url('/admin/kelas') . '"
            </script>';
    }

    public function hapuskelas($id)
    {
        $model = new Kelas();
        $dataUser = $model->getKelas($id)->getRow();
        if (isset($dataUser)) {
            $model->hapusKelas($id);
            echo '<script>
                    alert("Hapus Data Kelas Sukses");
                    window.location="' . base_url('/admin/kelas') . '"
                </script>';
        } else {

            echo '<script>
                    alert("Hapus Gagal !, ID kelas ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('/admin/pengguna') . '"
                </script>';
        }
    }

}