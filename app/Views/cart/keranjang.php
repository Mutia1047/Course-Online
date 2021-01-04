<?= $this->extend('user/layout/header') ?>

<?= $this->section('content') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h1 href="#" class="cart"><i class="icofont-cart"></i> Keranjang Belanja</h1>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Detail Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">   
          <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th>No.</th>
                        <th>Nama Kelas</td>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Opsi</th>
                        </tr>
                    </thead>
                <tbody>                   
                    <tr>
                        <td>1.</td>
                            <td><a href="/user/det">Membuat Business Plan</a></td>
                            <td>Bisnis</td>
                            <td>50.000</td>   
                            <td>
                        <a href="" title="Hapus data"><button name="delete" class="btn btn-danger btn-sm"><i class="icofont-trash" aria-hidden="true"></i></button></a>
                    </tr>                   
                    <tr>
                        <td colspan="3"><b>Total </b></td>
                        <td><b>1 Kelas</b></td>
                        <td><b>Rp 50.000</b></td>
                    </tr>                   
                    <tr>
                        <td colspan="11">
                            <a href="/user/checkout"><button name="simpan" class="btn btn-success float-right">Check Out</button></a>
                        </td>
                    </tr>
                </tbody>
                </table>
            </div>
		  </div>
      </div>
    </section><!-- End Detail Section -->

  </main><!-- End #main -->

  <?= $this->endSection('content') ?>