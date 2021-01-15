<?= $this->extend('Admin/layout/app') ?>

<?= $this->section('content') ?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">

<div class="content-wrapper">
<div class="container">

        <div class="row justify-content-md-center">

            <div class="col-6">
                <h1>Kelas Baru</h1>
                <form action="<?= base_url('admin/addkelas'); ?>" method="post" enctype="multipart/form-data">

                <?= csrf_field(); ?>
                <hr>
                
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" name="kategori" class="form-control" id="kategori" >
                    </div>
                    <div class="mb-3">
                        <label for="nama_kelas" class="form-label">Nama Kelas</label>
                        <input type="text" name="nama_kelas" class="form-control" id="nama_kelas">
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga">
                    </div>
                    
                    <div class="mb-3">
                        <label for="gambar">Gambar</label>
                        <input type="file" class="form-control-file" name="gambar">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </form>
            </div>
             
        </div>
    </div>
</div>

<?= $this->endSection('content') ?>