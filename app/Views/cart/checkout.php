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
        <div class="portfolio-details-container">
          <h4>Metode Pembayaran</h4>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
            <img src="/assets/dist/img/credit/gopay.png" class="credit" for="GoPay">
            </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <label class="form-check-label" for="inlineRadio2">Bank Transfer</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
            <img src="/assets/dist/img/credit/dana.png" class="credit" for="DANA">
          </div>
        </div>
        <div class="portfolio-description">
          <h4>Review Pesanan</h4>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                        <th>No.</th>
                        <th>Nama Kelas</td>
                        <th>Kategori</th>
                        <th>Harga</th>
                        </tr>
                    </thead>
                <tbody>               
                    <tr>
                        <td>1.</td>
                            <td><a href="/user/det">Membuat Business Plan</a></td>
                            <td>Bisnis</td>
                            <td>50.000</td>   
                    </tr>                  
                    <tr>
                        <td colspan="2"><b>Total </b></td>
                        <td><b>1 Kelas</b></td>
                        <td><b>Rp 50.000</b></td>
                    </tr>                   
                    <tr>
                        <td colspan="11">
                            <a href="/user/print"><button name="simpan" class="btn btn-success float-right">Proses Pembayaran</button></a>
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