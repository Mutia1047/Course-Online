<?php
 
namespace App\Controllers;

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
		return view('Admin/pengguna');
	}
	
	public function kelas()
	{
		return view('Admin/kelas');
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

	public function kontak()
	{
		return view('user/kontak');
	}

	public function det()
	{
		return view('user/det');
	}

	public function home()
	{
		return view('user/home');
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