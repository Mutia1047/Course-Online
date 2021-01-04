<?= $this->extend('Admin/layout/app') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

<div class="content-wrapper">
<div class="container">
        <div class="row justify-content-md-center">

            <div class="col-6">
                <h1>Kelas Baru</h1>
                <hr>
                <form action="#" method="post">
                    <div class="mb-3">
                        <label for="InputForName" class="form-label">Kategori</label>
                        <input type="text" name="barang" class="form-control" id="InputForKategori" value="">
                    </div>
                    <div class="mb-3">
                        <label for="InputForKelas" class="form-label">Nama Kelas</label>
                        <input type="integer" name="jumlah" class="form-control" id="InputForKelas" value="">
                    </div>
                    <div class="mb-3">
                        <label for="InputForHarga" class="form-label">Harga</label>
                        <input type="integer" name="jumlah" class="form-control" id="InputForHarga" value="">
                    </div>
                    <form>
                    <div class="mb-3">
                        <label for="InputForGambar">Gambar</label>
                        <input type="file" class="form-control-file" id="InputForGambar">
                    </div>
                    </form>
                    <a button href="/admin/kelas" type="submit" class="btn btn-primary">Tambahkan</a button>
                </form>
            </div>
             
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>