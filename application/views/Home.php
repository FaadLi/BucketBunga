
<div id="home" style="display:block">
  <nav class="navbar navbar-light custom-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url() ?>index.php/CHome">Bucket Bunga.</a>

      <a href="#" class="burger" data-toggle="collapse" data-target="#main-navbar">
        <span></span>
      </a>

    </div>
  </nav>

  <main id="main">

    <div class="site-section site-portfolio">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-md-12 col-lg-7 mb-5 mb-lg-0" data-aos="fade-up">
            <h2>Selamat Datang di Bucket Bunga Kertas</h2>
            <p class="mb-0">Freelance Creative &amp; Professional Graphics Designer</p>
            
            <a href="#"data-toggle="modal" data-target="#Modal_Add"><h2>Tambah Bucket</h2></a>
          </div>
          <div class="col-md-12 col-lg-5 text-left text-lg-right" data-aos="fade-up" data-aos-delay="100">
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
          
          <div id="getget">
          <?php
            // looping data dari controller
            foreach ($bucketnya as $key) :
           
          ?>
          <div class="item get col-sm-6 col-md-4 col-lg-4 mb-4 <?php echo ($key->id_kat) ?>" 
          data-id="<?php echo ($key->id) ?>" 
          data-nama="<?php echo ($key->namaBunga) ?>" 
          data-kategori="<?php echo ($key->nama_kategori) ?>" 
          data-keterangan="<?php echo ($key->keterangan) ?>" 
          data-url="<?php echo ($key->url) ?>"
          data-gambar="<?php echo ($key->gambar) ?>" 
          data-upload="<?php echo ($key->tgl_upload) ?>" >

            <a href="#" class="item-wrap fancybox item_edit"<?php  ?>  >
            <!-- <a href="<?php echo base_url() ?>index.php/CHome/detail" class="item-wrap fancybox"> -->
              <div class="work-info">
                <h3><?php echo ($key->namaBunga) ?></h3>
                <!-- <h3>Boxed Water</h3> -->
                <span><?php echo ($key->nama_kategori) ?></span>
                <!-- <span>Web</span> -->
              </div>
              <img class="img-fluid" src="<?php echo base_url(); echo ($key->gambar) ?>">
              <!-- <img class="img-fluid" src="<?php echo base_url() ?>assets/img/img_1.jpg"> -->
            </a>
          </div>
          
          <?php endforeach; ?>
          </div>

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
  </div>



  <!--MODAL Baru-->
    
<!-- <form id="formTambahBucket"> -->
  <?php echo form_open_multipart('',array('id'=>'formTambahBucket')) ?>
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
                <input type="text" id="idnama" class="form-control" minlength="5" placeholder="Nama Bucket Bunga"required="" >
                <div class="invalid-feedback">Isi dulu</div>
            </div>

            <div class="form-group col-lg-12">
                <label>Keterangan</label>
                <textarea type="textarea" id="idketerangan" class="form-control" minlength="5" placeholder="Keterangan"required="" ></textarea>
                <div class="invalid-feedback">Isi dulu</div>
            </div>

            <div class="form-group col-lg-12">
                <label>Url</label>
                <input type="url" id="idurl" class="form-control" minlength="5" placeholder="Masukkan URL"data-toggle="tooltip" title="masukkan https://...">
                <div class="invalid-feedback">Isi dulu</div>
            </div>

            <div class="form-group col-lg-12 " >
                <label>Kategori</label> <br>
                <select class="js-select2 form-control-file" id="idkategori" required="">
                    <option disabled selected >Pilih Kategori</option>
                    <?php foreach ($kategori as $kat) :?>
                    
                    <option value="<?php echo ($kat->id_kat) ?>"><?php echo ($kat->nama_kategori) ?></option>
                    
                    <?php endforeach; ?>
                
                </select>
            </div>

            <div class="form-group col-lg-12">
                <label>Gambar</label>
                <input type="file" class="form-control-file border" name="filed" id="filed" data-toggle="tooltip" required="">
                <div class="invalid-feedback">Isi dulu</div>
            </div>
               
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary col-md-3">Tambah</button>
          </div>
        </div>
      </div>
    </div>
  </form>
<!--END MODAL baru-->



