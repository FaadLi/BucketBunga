

  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php/CHome">Bucket Bunga.</a>

      <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>

    </div>
  </nav>

  <main id="main">

    <div class="site-section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-6 mb-4 mb-lg-0" data-aos="fade-up">
            <h2>Hey, I'm Johan Stanworth</h2>
            <p class="mb-0">Freelance Creative &amp; Professional Graphics Designer</p>
            
            <a href="#"data-toggle="modal" data-target="#Modal_Add"><h2>Tambah Bucket</h2></a>
          </div>
          <div class="col-md-12 col-lg-6 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
            <div id="filters" class="filters">

            
              <a href="#" data-filter="*" class="active">All</a>
              <?php
                // looping data dari controller
                foreach ($kategori as $kat) :
              ?>
              <a href="#" data-filter=".<?php echo ($kat->id_kat) ?>"><?php echo ($kat->nama_kategori) ?></a>
              <?php endforeach; ?>

            </div>
            
          </div>  
        </div>

        
        <div id="portfolio-grid" class="row no-gutter" data-aos="fade-up" data-aos-delay="200">
          <?php
            // looping data dari controller
            foreach ($bucketnya as $key) :
          ?>
          <div class="item col-sm-6 col-md-4 col-lg-4 mb-4 <?php echo ($key->id_kat) ?>">
            <a href="<?php echo base_url() ?>index.php/CHome/detail" class="item-wrap fancybox">
              <div class="work-info">
                <h3><?php echo ($key->namaBunga) ?></h3>
                <!-- <h3>Boxed Water</h3> -->
                <span><?php echo ($key->nama_kategori) ?></span>
                <!-- <span>Web</span> -->
              </div>
              <img class="img-fluid" src="<?php echo base_url() ?>assets/img/img_1.jpg">
            </a>
          </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-4">
          <div class="col-5">
            <h3 class="h3 heading">My Clients</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit explicabo inventore.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="<?php echo base_url() ?>assets/img/logo-adobe.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="<?php echo base_url() ?>assets/img/logo-uber.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="<?php echo base_url() ?>assets/img/logo-apple.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="<?php echo base_url() ?>assets/img/logo-netflix.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="<?php echo base_url() ?>assets/img/logo-nike.png" alt="Image" class="img-fluid"></a>
          </div>
          <div class="col-4 col-sm-4 col-md-2">
            <a href="#" class="client-logo"><img src="<?php echo base_url() ?>assets/img/logo-google.png" alt="Image" class="img-fluid"></a>
          </div>

        </div>
      </div>
    </div>



    <!-- Profile -->
    <div class="site-section pt-0">
      <div class="container">

        <div class="owl-carousel testimonial-carousel">

          <div class="testimonial-wrap">
            <div class="testimonial">
              <img src="<?php echo base_url() ?>assets/img/person_1.jpg" alt="Image" class="img-fluid">
              <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                  explicabo inventore.</p>
              </blockquote>
              <p>&mdash; Jean Hicks</p>
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial">
              <img src="<?php echo base_url() ?>assets/img/person_2.jpg" alt="Image" class="img-fluid">
              <blockquote>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut officiis
                  explicabo inventore.</p>
              </blockquote>
              <p>&mdash; Chris Stanworth</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </main>



  <!--MODAL Baru-->
    
<form id="formTambahBucket">
    
    <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Bucket Baru</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>			           
          </div>
          <div class="modal-body ">			              
             
                <div class="form-group col-lg-12">
                    <label>Nama Bucket Bunga</label>
                    <input type="text" id="dmNama" class="form-control" minlength="5" placeholder="Nama Bucket Bunga"required="" >
                    <div class="invalid-feedback">Isi dulu</div>
                </div>

                <div class="form-group col-lg-12">
                    <label>Keterangan</label>
                    <textarea type="textarea" id="dmNamaWo" class="form-control" minlength="5" placeholder="Keterangan"required="" ></textarea>
                    <div class="invalid-feedback">Isi dulu</div>
                </div>

                <div class="form-group col-lg-12">
                    <label>Url</label>
                    <input type="text" id="dmNamaWo" class="form-control" minlength="5" placeholder="Masukkan URL"required="" >
                    <div class="invalid-feedback">Isi dulu</div>
                </div>

                <div class="form-group col-lg-12 " >
                    <label>Kategori</label> <br>
                    <select class="js-select2 form-control-file" name="type">
                        <option selected="selected">Pilih Kategori</option>
                        <?php foreach ($kategori as $kat) :?>
                        
                        <option value="<?php echo ($kat->id_kat) ?>"><?php echo ($kat->nama_kategori) ?></option>
                        
                        <?php endforeach; ?>
                    
                    </select>
                </div>

                <div class="form-group col-lg-12">
                    <label>Gambar</label>
                    <input type="file" class="form-control-file border" name="file" data-toggle="tooltip" title="Fungsi Belum Bisa">
                    <div class="invalid-feedback">Isi dulu</div>
                </div>

                

                
                
              
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal">Batal</button>
              <button type="submit" id="btn_push" class="btn btn-primary col-md-3">Tambah</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<!--END MODAL baru-->


