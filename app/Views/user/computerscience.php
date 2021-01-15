<?= $this->extend('user/layout/header') ?>

<?= $this->section('content') ?>

  <main id="main">

    <!-- ======= Bisnis Section ======= -->
    <section id="portfolio" class="portfolio ">
      <div class="container ">
        <div class="row mt-3 justify-content-center section-title">
          <h2>Computer Science</h2>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="/template/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              </figure>
              <div class="portfolio-info">
                <h4><a href="cs">Ngoding Bareng</a></h4>
                <h5>Rp 100.000</h5>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.2s">
            <div class="portfolio-wrap">
              <figure>
                <img src="/template/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              </figure>
              <div class="portfolio-info">
                <h4><a href="#">Android Mobile</a></h4>
                <h5>Rp 200.000</h5>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section><!-- End Portfolio Section -->

  </main><!-- End #main -->

  <?= $this->endSection('content') ?>