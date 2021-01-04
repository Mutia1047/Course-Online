<?= $this->extend('user/layout/header') ?>

<?= $this->section('content') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h1>Check Out</h1>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Detail Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container"> 
        <p> Terima Kasih. Pesananmu telah diterima</p>
        <div class="portfolio-details-description">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <tr>
                        <td>No. Order</td>
                        <td>13729M1EXP</td>
                    </tr>
                    <tr>
                        <td>Nama Kelas</td>
                        <td>Membuat Business Plan</td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>30-09-2020</td>    
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>50.000</td>    
                    </tr>
                    <tr>
                        <td>Metode Pembayaran</td>
                        <td>GoPay</td>    
                    </tr>                  
                </table>
            </div>
            <a href="/page/home"><button name="cetak" class="btn btn-dark float-left">Selesai</button></a>
            <a href="/cetak.html" rel="noopener" target="_blank"><button name="cetak" class="btn btn-outline-primary float-right">Cetak</button></a>
		  </div>
      </div>
    </section><!-- End Detail Section -->

  </main><!-- End #main -->

  <?= $this->endSection('content') ?>