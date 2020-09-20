<section class="hero-wrap hero-wrap-2" style="background-image: url(assets/public/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate pb-0 text-center">
      	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
        <h1 class="mb-3 bread">About Us</h1>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-no-pb ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-7 order-md-last d-flex align-items-stretch">
				<div class="img w-100 img-2 mr-md-2" style="background-image: url(assets/public/images/about.jpg);"></div>
				<div class="img w-100 img-2 ml-md-2" style="background-image: url(assets/public/images/about-2.jpg);"></div>
			</div>
			<div class="col-md-5 wrap-about py-md-5 ftco-animate">
        <div class="heading-section pr-md-5">
          <h2 class="mb-4"><?= $data['about']['title']?></h2>
          <?= $data['about']['description']?>
        </div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-counter img" id="section-counter">
	<div class="container">
		<div class="row pt-md-5">
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 py-5 mb-4">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="1000">0</strong>
            <span>Area <br>Population</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 py-5 mb-4">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="2500">0</strong>
            <span>Total <br>Properties</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 py-5 mb-4">
          <div class="text text-border d-flex align-items-center">
            <strong class="number" data-number="500">0</strong>
            <span>Average <br>House</span>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
        <div class="block-18 py-5 mb-4">
          <div class="text d-flex align-items-center">
            <strong class="number" data-number="67">0</strong>
            <span>Total <br>Branches</span>
          </div>
        </div>
      </div>
    </div>
	</div>
</section>

<section class="ftco-section testimony-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
      	<span class="subheading">Testimonial</span>
        <h2 class="mb-3">Happy Clients</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <?php foreach($data['client_reviews'] as $client_review):?>
            <div class="item">
              <div class="testimony-wrap py-4">
                <div class="text">
                  <span class="fa fa-quote-left"></span>
                  <p class="mb-4"><?=$client_review['comments']?></p>
                  <div class="d-flex align-items-center">
                    <div class="user-img" style="background-image: url(assets/public/images/person_2.jpg)"></div>
                    <div class="pl-3">
                      <p class="name"><?=$client_review['name']?></p>
                      <span class="position"><?=$client_review['position']?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    </div>
  </div>
</section>