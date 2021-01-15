<?= $this->extend('user/layout/header') ?>

<?= $this->section('content') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h1>Desain Foto</h1>
          <ol>
            <li><a href="/page/desain">Desain Foto</a></li>
            <li>Desain</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Detail Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="/template/assets/img/portfolio-details-2.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Rp 45.000</h3>
            <ul>
              <li><strong>Kategori</strong>: Desain Foto</li><br>
              <li><a href="/user/keranjang"><button name="tambah" class="btn btn-danger">Tambah ke Keranjang</button></a></li><br><br>
              <li><strong>Kelas ini akan terdiri dari : </strong></li>
              <li>2 video pembelajaran </li>
              <li>3 artikel </li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Informasi Kelas</h2>
          <p>
          Kelas ini akan membantu Anda membuat atau mendesain foto.
          </p>
        </div>

        <div class="portfolio-description">
          <h2>Kelas ini cocok untuk : </h2>
          <ul>
            <li>Siapa pun yang tertarik untuk desain foto.</li>
            <li>Bagi pemula sangat direkomendasikan.</li>
          </ul>
        </div>

        <div class="portfolio-description">
          <h2>Konten Kelas </h2>
          <ul>
            <li><strong>Bagian 1 :</strong> Pengenalan</li>
            <li><strong>Bagian 2 :</strong> Membuat Desain Foto</li>            
            <li><strong>Membuat Desain Foto</strong></li>
            </ul>
        </div>
      </div>
    </section><!-- End Detail Section -->

  </main><!-- End #main -->

  <?= $this->endSection('content') ?>