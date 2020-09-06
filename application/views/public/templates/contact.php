<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/public/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate pb-0 text-center">
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">Contact</h1>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section contact-section">
  <div class="container">
    <div class="row block-9 justify-content-center mb-5">
      <div class="col-md-8 mb-md-5">
        <h2 class="text-center">If you got any questions <br>please do not hesitate to send us a message....</h2>
        <?php if ($this->session->flashdata('alert')): ?>
          <div class="col-lg-6">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-<?= $this->session->flashdata('alert_class') ?>">
                <button class="close" type="button" data-dismiss="alert">×</button> <?= $this->session->flashdata('alert') ?>
              </div>
            </div>
          </div>
        <?php endif;?>
        <form action="<?= base_url('contact')?>"  method="POST" class="bg-light p-5 contact-form">
          <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  name="email" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control"  name="subject" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
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
  </div>
</section>	