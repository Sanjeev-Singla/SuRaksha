
<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/public/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate pb-0 text-center">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Forgot Password <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Forgot Password</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-8 mb-md-5">
       <h2 class="text-center">Forgot Password</h2>
       <?php if ($this->session->flashdata('alert')): ?>
        <div class="col-lg-6">
          <div class="bs-component">
            <div class="alert alert-dismissible alert-<?= $this->session->flashdata('alert_class') ?>">
              <button class="close" type="button" data-dismiss="alert">×</button> <?= $this->session->flashdata('alert') ?>
            </div>
          </div>
        </div>
      <?php endif;?>

      <form action="" method="POST" class="bg-light p-5 contact-form">


        <div class="form-group">
          <input type="email" class="form-control" name="email" value="<?= set_value('email')?>" placeholder="Your Email" required>
          <?= form_error('email');?>
        </div>
        
        <div class="form-group">
          <button type="submit" class="btn btn-primary py-3 px-5">Submit</button>
        </div>

        <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
          <span class="font-weight-normal">I have an Account? <a href="<?= base_url('login') ?>" class="font-weight-bold">Click here</a></span>
        </div>
          
        </form>
      </div>
    </div>
    <div class="row d-flex mb-5 contact-info justify-content-center">
     <div class="col-md-8">
      <div class="row mb-5">
        <div class="col-md-4 text-center py-4">
         <div class="icon">
          <span class="fa fa-map"></span>
        </div>
        <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
      </div>
      <div class="col-md-4 text-center border-height py-4">
       <div class="icon">
        <span class="fa fa-phone"></span>
      </div>
      <p><span>Phone:</span> <a href="tel://1234567920">+91 7973640255</a></p>
    </div>
    <div class="col-md-4 text-center py-4">
     <div class="icon">
      <span class="fa fa-paper-plane"></span>
    </div>
    <p><span>Email:</span> <a href="mailto:info@yoursite.com">sumit013pathania@gmail.com</a></p>
  </div>
</div>
</div>
</div>
        <!-- <div class="row justify-content-center">
          <div class="col-md-8">
            <div id="map" class="bg-white"></div>
          </div>
        </div> -->
      </div>
    </section>