<?= $this->extend('user/layout/header') ?>

<?= $this->section('content') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h1>Ngoding Bareng</h1>
          <ol>
            <li><a href="/page/computerscience">Computer Science</a></li>
            <li>Ngoding Bareng</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Detail Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="/template/assets/img/portfolio-details-4.jpg" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Rp 100.000</h3>
            <ul>
              <li><strong>Kategori</strong>: Computer Science</li><br>
              <li><a href="/user/keranjang"><button name="tambah" class="btn btn-danger">Tambah ke Keranjang</button></a></li><br><br>
              <li><strong>Kelas ini akan terdiri dari : </strong></li>
              <li>10 video pembelajaran </li>
              <li>3 artikel </li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>Informasi Kelas</h2>
          <p>
          Kelas ini akan membantu Anda membuat sebuah website yang diinginkan. Semua yang Anda butuhkan untuk membuat website yang luar biasa disertakan dalam kursus ini, termasuk templat rencana website dan proses langkah yang sangat mendetail untuk membantu Anda membuat seluruh rencana website dari awal!
          </p>
        </div>

        <div class="portfolio-description">
          <h2>Kelas ini cocok untuk : </h2>
          <ul>
            <li>Siapa pun yang tertarik untuk memulai sebuah website.</li>
            <li>Bagi pemula sangat direkomendasikan.</li>
          </ul>
        </div>

        <div class="portfolio-description">
          <h2>Konten Kelas </h2>
          <ul>
            <li><strong>Bagian 1 :</strong> Pengenalan</li>
            <li><strong>Bagian 2 :</strong> Membuat Halaman Sampul Anda</li>            
            <li><strong>Bagian 3 :</strong> Login Register</li>       
            <li><strong>Bagian 4 :</strong> Migrations</li>
            <li><strong>Bagian 5 :</strong> Myth / Auth</li>
            <li><strong>Bagian 6 :</strong> Pagination</li>
            <li><strong>Bagian 7 :</strong> Session</li>
            <li><strong>Bagian 8 :</strong> Section</li>
            <li><strong>Bagian 9 :</strong> Template Login</li>
            <li><strong>Bagian 10 :</strong> Template Register</li>
            <li><strong>Membuat Output Website Anda Sendiri</strong></li>
            </ul>
        </div>
      </div>
    </section><!-- End Detail Section -->

  </main><!-- End #main -->

  <?= $this->endSection('content') ?>