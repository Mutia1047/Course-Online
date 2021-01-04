<?= $this->extend('user/layout/header') ?>

<?= $this->section('content') ?>

  <main id="main">

    <!-- ======= Bisnis Section ======= -->
    <section id="portfolio" class="portfolio ">
      <div class="container ">
        <div class="row mt-3 justify-content-center section-title">
          <h2>Bisnis</h2>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="/template/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              </figure>
              <div class="portfolio-info">
                <h4><a href="det">Membuat Business Plan</a></h4>
                <h5>Rp 50.000</h5>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="/template/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              </figure>
              <div class="portfolio-info">
                <h4><a href="#">Bisnis 2</a></h4>
                <h5>Rp 60.000</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="/template/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              </figure>
              <div class="portfolio-info">
                <h4><a href="#">Bisnis 3</a></h4>
                <h5>Rp 25.000</h5>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="/template/assets/img/portfolio/bisnis4.jpg" class="img-fluid" alt="">
              </figure>
              <div class="portfolio-info">
                <h4><a href="#">Bisnis 4</a></h4>
                <h5>Rp 100.000</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?= $this->endSection('content') ?>