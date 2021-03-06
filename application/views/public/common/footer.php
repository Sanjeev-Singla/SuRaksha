 <footer class="ftco-footer ftco-section">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md">
        <div class="ftco-footer-widget mb-4">
          <h2 class="ftco-heading-2">Su-Raksha</h2>
          <p>Far far away, behind the word mountains, far from the countries.</p>
          <ul class="ftco-footer-social list-unstyled mt-5">
            <?php     $this->load->model('global_model');
             $data=$this->global_model->select_single('admin_social',['id'=>1]); ?>
              <li class="ftco-animate"><a href="<?= $data['twitter'] ?>" target="_blank"><span class="fa fa-twitter"></span></a></li>
              <li class="ftco-animate"><a href="<?= $data['facebook'] ?>"  target="_blank"><span class="fa fa-facebook"></span></a></li>
              <li class="ftco-animate"><a href="<?= $data['instagram'] ?>"  target="_blank"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <div class="col-md">
       <div class="ftco-footer-widget mb-4">
        <h2 class="ftco-heading-2">Company</h2>
        <ul class="list-unstyled">
          <li><a href="<?= base_url('about')?>"><span class="fa fa-chevron-right mr-2"></span>About Us</a></li>
          <li><a href="<?= base_url('terms-conditions')?>"><span class="fa fa-chevron-right mr-2"></span>Terms & Conditions</a></li>
          <li><a href="<?= base_url('privacy-policy')?>"><span class="fa fa-chevron-right mr-2"></span>Privacy Policy</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
       <h2 class="ftco-heading-2">Have a Questions?</h2>
       <div class="block-23 mb-3">
         <ul>
          <?php $data=$this->global_model->get_all('admin_address'); ?>
          <?php foreach($data as $value):?>
           <li><span class="icon fa fa-map"></span><span class="text"><?= $value['address']?></span></li>
           <li><a href="#"><span class="icon fa fa-phone"></span><span class="text"><?= $value['mobile']?></span></a></li>
           <li><a href="#"><span class="icon fa fa-envelope pr-4"></span><span class="text"><?= $value['email']?></span></a></li>
         <?php endforeach; ?>
       </ul>
     </div>
   </div>
 </div>
</div>
<div class="row">
  <div class="col-md-12 text-center">
   
    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved.
      <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
    </div>
  </div>
</div>
</footer>



<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="<?= base_url('assets/public/js/jquery.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/jquery-migrate-3.0.1.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/popper.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/bootstrap.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/jquery.easing.1.3.js')?>"></script>
<script src="<?= base_url('assets/public/js/jquery.waypoints.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/jquery.stellar.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/owl.carousel.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/jquery.magnific-popup.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/jquery.animateNumber.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/scrollax.min.js')?>"></script>
<script src="<?= base_url('assets/public/js/google-map.js')?>"></script>
<script src="<?= base_url('assets/public/js/main.js')?>"></script>

<script src="<?= base_url('assets/public/custom/js/custom.js')?>"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("ul li").css("margin-right","5px");
  });
</script>

</body>
</html>