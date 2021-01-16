<?php

namespace App\Controllers;

use App\Models\Pembayaran;
use App\Models\Kelas;
use App\Models\UserModel;
use CodeIgniter\Controllers;


class User extends BaseController
{
    public function index()
	{
        $session = session('pembayaran');
        $model = new Kelas;
		$data['total'] = is_array($session)? array_values($session): array();
        $data['items'] = $this->kelas->findAll();
		
        $data['kelas'] = $this->kelas->getKelas();		
		$getUser['user'] = $this->user->getUser();
		return view('user/home', $data);
    }
    
    public function keranjang()
	{
        $data['items'] = $this->keranjang->totals();
        $data['total'] = $this->keranjang->count_totals();
		$dataUser['user'] = $this->user->getUser();
		return view('user/keranjang', $data, $dataUser);
	}

    public function update()
    {
        // update cart
        $this->keranjang->update();
        return redirect()->to(base_url('/page/keranjang'));
    }
}