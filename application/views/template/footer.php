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
  <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery-migrate.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/easing/easing.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/isotope/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url() ?>assets/vendor/owlcarousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>

  <!-- Custom JS -->
  <script type="text/javascript" >
    $(document).ready(function() {
      
  //   ========================  Start ADD RECORD ====================================
        $('#formTambahMember').submit(function(e){
          e.preventDefault();
        e.stopPropagation(); 
        var namaWo      = $('#dmNamaWo').val();
        var nama        = $('#dmNama').val();
        var email       = $('#dmEmail').val();
        var password    = $('#dmPassword').val();

        console.log("tambah kategori");        

        // alert(namaWo+" +"+nama +" + "+email+" + "+password);
    //      return;
        // $.ajax({
        //     type : "POST",
        //     url  : "<?php echo site_url(); ?>/CAdmin/createMember",
        //     dataType : "JSON",
        //     data : {namaWo,
        //             nama,
        //             email,
        //             password}, 
            
        //     success:function(data){
            
        //     alert("Berhasil Ditambah");
        //     location.reload();
        //     }
            
        });

        return false;
        });
    //   ========================  END ADD RECORD ====================================
 
    )}
  </script>




</body>

</html>
