<?php
 
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\Kelas;

class Page extends BaseController
{
	public function login()
	{
		return view('sign/login');
    }

    public function register()
	{
		return view('sign/register');
	}
	
	public function pengguna()
	{
		$model = new UserModel();
        $data['getUser'] = $model->getUser();
        return view('/admin/pengguna', $data);
	}
	
	public function kelas()
	{
		$model = new Kelas();
        $data['getKelas'] = $model->getKelas();
        return view('/admin/kelas', $data);
	}

	public function tamkelas()
	{
		return view('Admin/tamkelas');
	}

	public function admin()
	{
		return view('Admin/admin');
	}
	
	public function bisnis()
	{
		return view('user/bisnis');
	}

	public function computerscience()
	{
		return view('user/computerscience');
	}

	public function desain()
	{
		return view('user/desain');
	}

	public function kontak()
	{
		return view('user/kontak');
	}

	public function det()
	{
		return view('user/det');
	}

	public function cs()
	{
		return view('user/cs');
	}

	public function dsn()
	{
		return view('user/dsn');
	}

	public function home()
	{
		$model = new Kelas();
        $data['kelas'] = $model->getKelas();
		return view('user/home', $data);
	}
	
    public function keranjang()
	{
		return view('cart/keranjang');
	}
	
	public function checkout()
	{
		return view('cart/checkout');
	}
	
	public function print()
	{
		return view('cart/print');
	}
	
	public function akses()
	{
		return view('akses/detakses');
	}
	
	public function open()
	{
		return view('akses/open');
    }

}
?>