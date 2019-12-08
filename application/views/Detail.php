

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">MyPortfolio.</a>

      <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>

    </div>
  </nav>



  <main id="main">

    <div class="site-section">
      <div class="container">
        <div class="row mb-4 align-items-center">
          <div class="col-md-6" data-aos="fade-up">

            <h2>Work Single Page</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
              explicabo inventore.</p>

          </div>


        </div>
      </div>

      <div class="site-section pb-0">
        <div class="container">
          <div class="row align-items-stretch">
            <div class="col-md-8" data-aos="fade-up">
              <img src="<?php echo base_url() ?>assets/img/img_1_big.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="col-md-3 ml-auto" data-aos="fade-up" data-aos-delay="100">
              <div class="sticky-content">
                <h3 class="h3">Boxed Water</h3>
                <p class="mb-4"><span class="text-muted">Design</span></p>

                <div class="mb-5">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores illo, id recusandae molestias
                    illum unde pariatur, enim tempora.</p>

                </div>


                <h4 class="h4 mb-3">What I did</h4>
                <ul class="list-unstyled list-line mb-5">
                  <li>Design</li>
                  <li>HTML5/CSS3</li>
                  <li>CMS</li>
                  <li>Logo</li>
                </ul>

                <p><a href="#" class="readmore">Visit Website</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="site-section pb-0">
        <div class="container">
          <div class="row justify-content-center text-center mb-4">
            <div class="col-5">
              <h3 class="h3 heading">More Works</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
            </div>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="200">
            
          <?php foreach ($bucketnya as $key) :?>
            <div class="item col-sm-6 col-md-4 col-lg-4 mb-4  <?php echo ($key->id_kat) ?>">
              <a href="work-single.html" class="item-wrap fancybox">
                <div class="work-info">
                  <h3><?php echo ($key->namaBunga) ?></h3>
                  <span><?php echo ($key->nama_kategori) ?></span>
                </div>
                <img class="img-fluid" src="<?php echo base_url() ?>assets/img/img_1.jpg">
              </a>
            </div>
          <?php endforeach; ?>

          </div>

        </div>
      </div>



      <div class="site-section pb-0">
        <div class="container">

          <div class="owl-carousel testimonial-carousel">

            <div class="testimonial-wrap">
              <div class="testimonial">
                <img src="<?php echo base_url() ?>assets/img/person_1.jpg" alt="Image" class="img-fluid">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut
                    officiis explicabo inventore.</p>
                </blockquote>
                <p>&mdash; Jean Hicks</p>
              </div>
            </div>

            <div class="testimonial-wrap">
              <div class="testimonial">
                <img src="<?php echo base_url() ?>assets/img/person_2.jpg" alt="Image" class="img-fluid">
                <blockquote>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut
                    officiis explicabo inventore.</p>
                </blockquote>
                <p>&mdash; Chris Stanworth</p>
              </div>
            </div>

          </div>

        </div>
      </div>
  </main>
  