<footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <p class="mb-1">&copy; Copyright MyPortfolio. All Rights Reserved</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-sm-6 social text-md-right">
          <a href="#"><span class="icofont-twitter"></span></a>
          <a href="#"><span class="icofont-facebook"></span></a>
          <a href="#"><span class="icofont-dribbble"></span></a>
          <a href="#"><span class="icofont-behance"></span></a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
  <!-- <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-migrate.min.js"></script> -->
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/easing/easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>

  <!-- Custom JS -->
  <script type="text/javascript">
    document.getElementById("getget").addEventListener("click",detail);
    // document
    // document.getElementByClass(".")

    function detail(){
      document.getElementById("home").style.display="none";
      document.getElementById("detail").style.display="block";
    }


    $(document).ready(function(){
      console.log("coba JS");
      
      // Melempar data dan Pindah Page
      $('#getget').on('click','.item',function(){
        var id              = $(this).data('id');
        var namaBunga       = $(this).data('nama');
        var nama_kategori   = $(this).data('kategori');
        var keterangan      = $(this).data('keterangan');
        var url             = $(this).data('url');
        var tgl_upload      = $(this).data('upload');
        
        // console.log("masuk pak eko :"+namaBunga);

        // console.log(namaBunga+" + "+nama_kategori+" + "+keterangan+" + "+url+" + "+tgl_upload );

        document.getElementById("namaBunga").innerHTML = namaBunga;
        document.getElementById("keterangan").innerHTML = keterangan;
        document.getElementById("nama_kategori").innerHTML = nama_kategori;
        document.getElementById("deleteBunga").value = id;
        document.getElementById("pesanBunga").value = namaBunga;

        return;
      });

      // Pesan Data dan dilempar ke Whatsapp
      $('#pesanBunga').click(function(){

        var str = document.getElementById("pesanBunga").value;
         
        var temp = "https://wa.me/6285954654678?text=Assalamualaikum%20.%0A%20%20Saya%20mau%20pesan%20Bucket%20Bunga%20%2A"+str+"%2A%20.";
        var res = temp.replace(/ /gi, "%20");

        // console.log(""+res);
        // document.getElementById("demo").innerHTML = res;

        // https://wa.me/6285954654678?text= text
        // https://wa.me/6285954654678?text=Saya%20Mencoba%20Chat%20dengan%20Link%20ini%20ya

        a = document.getElementById("pesanBunga");
        a.setAttribute("href", temp);

        console.log("ini Pesan");
        

        return;
      });

      // Menampilkan Modal Hapus
      $('#deleteBunga').click(function(){
        var str = document.getElementById("deleteBunga").value;
        console.log(str);

        $('#Modal_Delete').modal('show');

        return;
      });
      // Menghapus Data
      $('#btn_delete').click(function(){
        var str = document.getElementById("deleteBunga").value;
        console.log(str);

          $.ajax({
              type : "POST",
              url  : "<?php echo site_url(); ?>/CHome/deleteBucket",
              dataType : "JSON",
              data : {id:str},

              success: function(data){
                  console.log("berhasil Terapus");
                  $('#Modal_Delete').modal('hide');
                  
                  
                  location.reload();
              }
          });



        console.log("ini Hapus");
        return;
      });

  //   ========================  Start ADD RECORD ====================================
        $('#formTambahBucket').submit(function(e){
          e.preventDefault();
        // e.stopPropagation(); 
        var namaBunga   = $('#idnama').val();
        var keterangan  = $('#idketerangan').val();
        var url         = $('#idurl').val();
        var id_kat      = $('#idkategori').val();

        console.log("tambah kategori");        

        //alert(namaBunga+" +"+keterangan +" + "+url+" + "+id_kat);
    
        $.ajax({
            type : "POST",
            url  : "<?php echo site_url(); ?>/CHome/createBucket",
            dataType : "JSON",
            data : {namaBunga,
                    keterangan,
                    url,
                    id_kat}, 
            
            success:function(data){
            
            alert("Berhasil Ditambah");
            location.reload();
            }
            
        });

        return false;
      });
    //   ========================  END ADD RECORD ====================================
 
    });
  </script>




</body>

</html>
