<?php

namespace App\Controllers;

use App\Models\Kelas;
use App\Models\Pembayaran;
use App\Models\UserModel;
use CodeIgniter\Controllers;


class User extends BaseController
{

public function update()
    {
        // update cart
        $this->keranjang->update();
        return redirect()->to('/page/keranjang');
    }
}