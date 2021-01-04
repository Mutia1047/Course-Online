<?= $this->extend('user/layout/header') ?>

<?= $this->section('content') ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h1>Membuat Business Plan</h1>
          <ol>
            <li><a href="/page/bisnis">Bisnis</a></li>
            <li>Membuat Business Plan</li>
          </ol>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Detail Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="portfolio-details-container">
          <div class="owl-carousel portfolio-details-carousel">
            <img src="/template/assets/img/portfolio-details-1.jpg" class="img-fluid" alt="">
          </div>
          <div class="portfolio-info">
            <h3>Rp 50.000</h3>
            <ul>
              <li><strong>Kategori</strong>: Bisnis</li><br>
              <li><a href="/user/detakses/open"><button name="masuk" class="btn btn-primary">Ke Kursus</button></a></li><br><br>
              <li><strong>Kelas ini akan terdiri dari : </strong></li>
              <li>7 video pembelajaran </li>
              <li>2 artikel </li>
              <li>Sertifikat </li>
            </ul>
          </div>
        </div>

        <div class="portfolio-description">
          <h2>Informasi Kelas</h2>
          <p>
          Kelas ini akan membantu Anda membuat rencana bisnis yang luar biasa dari awal. Semua yang Anda butuhkan untuk membuat rencana bisnis yang luar biasa disertakan dalam kursus ini, termasuk templat rencana bisnis dan proses langkah yang sangat mendetail untuk membantu Anda membuat seluruh rencana bisnis dari awal!
          </p>
        </div>

        <div class="portfolio-description">
          <h2>Kelas ini cocok untuk : </h2>
          <ul>
            <li>Siapa pun yang tertarik untuk memulai jenis perusahaan apa pun dan dalam industri apa pun (tidak diperlukan pengalaman bisnis sebelumnya).</li>
            <li>Siapapun yang sudah memulai sebuah perusahaan, tetapi ingin membawa bisnis mereka ke level selanjutnya.</li>
            <li>Siapapun yang bekerja di perusahaan yang ingin meluncurkan produk dan atau layanan baru.</li>
          </ul>
        </div>

        <div class="portfolio-description">
          <h2>Konten Kelas </h2>
          <ul>
            <li><strong>1 :</strong> Video pembelajaran 1</li>
            <li><strong>2 :</strong> Video pembelajaran 2</li>            
            <li><strong>3 :</strong> video pembelajaran 3</li>       
            <li><strong>4 :</strong> Artikel 1</li>
            <li><strong>5 :</strong> Video pembelajaran 4</li>
            <li><strong>6 :</strong> Video pembelajaran 5</li>
            <li><strong>7 :</strong> Artikel 2</li>
            <li><strong>8 :</strong> Video pembelajaran 6</li>
            <li><strong>9 :</strong> Video pembelajaran 7</li>
            </ul>
        </div>
      </div>
    </section><!-- End Detail Section -->

  </main><!-- End #main -->

  <?= $this->endSection('content') ?>