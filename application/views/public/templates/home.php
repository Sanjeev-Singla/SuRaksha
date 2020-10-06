   <section class="hero-wrap" style="background-image: url(assets/public/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
   	<div class="overlay"></div>
   	<div class="container">
   		<div class="row no-gutters slider-text align-items-center">
   			<div class="col-lg-7 col-md-6 ftco-animate d-flex align-items-end">
   				<div class="text">
   					<h1 class="mb-4">Find Perfect <br>House From Your Area.</h1>
   					<p style="font-size: 18px;">From as low as $20 A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
   					<p><a href="<?= base_url('properties')?>" class="btn btn-primary py-3 px-4">View all properties</a></p>
   				</div>
   			</div>
   		</div>
   	</div>
   </section>

   <section class="ftco-section ftco-no-pb ftco-no-pt search-bg">
   	<div class="container">
   		<div class="row">
   			<div class="col-md-12">
   				<div class="search-wrap-1 ftco-animate p-4">
   					<form action="<?=base_url('serach-property')?>" method="POST" class="search-property-1">
                     <div class="row">

                        <div class="col-lg align-items-end">
                           <div class="form-group">
                              <label for="#">Keyword</label>
                                 <div class="form-field">
                                    <div class="icon"><span class="fa fa-search"></span></div>
                                    <input name="title" type="text" class="form-control" placeholder="Enter Keyword">
                                 </div>
                              </div>
                        </div>

                        <div class="col-lg align-items-end">
                           <div class="form-group">
                              <label for="#">Property Type</label>
                              <div class="form-field">
                                 <div class="select-wrap">
                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                    <select name="property_type" id="" class="form-control">
                                       <option value="Residential" style="color: black;">Residential</option>
                                       <option value="Official" style="color: black;">Official</option>
                                       <option value="Commercial" style="color: black;">Commercial</option>
                                    </select>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-lg align-items-end">
                           <div class="form-group">
                              <label for="#">Location</label>
                              <div class="form-field">
                                 <div class="icon"><span class="fa fa-search"></span></div>
                                 <input type="text" name="location" class="form-control" placeholder="Location">
                              </div>
                           </div>
                        </div>

                        <div class="col-lg align-items-end">
                           <div class="form-group">
                              <label for="#">Price</label>
                              <div class="form-field">
                                 <div class="icon"><span class="fa fa-inr"></span></div>
                                 <input type="text" name="price" class="form-control" placeholder="Price">
                              </div>
                           </div>
                        </div>

                        <div class="col-lg align-self-end">
                           <div class="form-group">
                              <div class="form-field">
                                 <input type="submit" value="Search" class="form-control btn btn-primary">
                              </div>
                           </div>
                        </div>
                     </div>
                  </form>
   				</div>
   			</div>
   		</div>
   	</div>
   </section>

   <section class="ftco-section ftco-no-pb ftco-no-pt bg-primary">
   	<div class="container">
   		<div class="row d-flex no-gutters">
   			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
   				<div class="media block-6 services services-bg d-block text-center px-4 py-5">
   					<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-business"></span></div>
   					<div class="media-body py-md-4">
   						<h3>Trusted by Thousands</h3>
   						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
   					</div>
   				</div>      
   			</div>
   			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
   				<div class="media block-6 services services-bg services-darken d-block text-center px-4 py-5">
   					<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-home"></span></div>
   					<div class="media-body py-md-4">
   						<h3>Wide Range of Properties</h3>
   						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
   					</div>
   				</div>      
   			</div>
   			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
   				<div class="media block-6 services services-bg services-lighten d-block text-center px-4 py-5">
   					<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-stats"></span></div>
   					<div class="media-body py-md-4">
   						<h3>Financing Made Easy</h3>
   						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
   					</div>
   				</div>      
   			</div>
   			<div class="col-md-3 d-flex align-items-stretch ftco-animate">
   				<div class="media block-6 services services-bg d-block text-center px-4 py-5">
   					<div class="icon d-flex justify-content-center align-items-center"><span class="flaticon-quarantine"></span></div>
   					<div class="media-body py-md-4">
   						<h3>Locked in Pricing</h3>
   						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
   					</div>
   				</div>      
   			</div>
   		</div>
   	</div>
   </section>

   <section class="ftco-section">
   	<div class="container">
   		<div class="row justify-content-center">
   			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
   				<span class="subheading">What we offer</span>
   				<h2 class="mb-2">Featured Properties</h2>
   			</div>
   		</div>
   		<div class="row ftco-animate">
   			<div class="col-md-12">
   				<div class="carousel-properties owl-carousel">
   					<?php foreach($data['properties'] as $key => $value):?>   
                  <?php
                     $image = (isset($data['images'][$key])?$data['images'][$key]:"default/default.jpg");
                  ?>              
                     <div class="item">
                        <div class="property-wrap ftco-animate">
                           <a href="#" class="img" style="background-image: url(assets/admin/uploads/images/properties/<?=$image?>);">
                              <div class="rent-sale">
                                 <span class="<?= strtolower($value['sale_rent'])?>"><?= $value['sale_rent']?></span>
                              </div>
                              <p class="price"><span class="orig-price">₹ <?= $value['price']?><small> / mo</small></span></p>
                           </a>
                           <div class="text">
                              <ul class="property_list">
                                 <li><span class="flaticon-bed"></span><?= $value['bhk']?></li>
                                 <li><span class="flaticon-floor-plan"></span><?= $value['size']?></li>
                              </ul>
                              <h3><a href="#"><?= $value['property_title']?></a></h3>
                              <span class="location"><?= $value['location']?></span>
                              <a href="#" class="d-flex align-items-center justify-content-center btn-custom">
                                 <span class="fa fa-link"></span>
                              </a>
                              <div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
                                 <div class="d-flex align-items-center">
                                    <div class="img" style="background-image: url(assets/public/images/person_1.jpg);"></div>
                                    <h3 class="ml-2">John Dorf</h3>
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

   <section class="ftco-section ftco-no-pt">
   	<div class="container">
   		<div class="row justify-content-center">
   			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
   				<span class="subheading">Properties</span>
   				<h2 class="mb-2">Properties for this Cities</h2>
   			</div>
   		</div>
   		<div class="row">
   			<div class="col-md-3">
   				<a href="#" class="search-place img" style="background-image: url(assets/public/images/place-1.jpg);">
   					<div class="desc">
   						<h3><span>Chandigarh</span></h3>
   						<span><?=$data['chandigarh_count']?> Properties</span>
   					</div>
   				</a>
   			</div>
   			<div class="col-md-3">
   				<a href="#" class="search-place img" style="background-image: url(assets/public/images/place-2.jpg);">
   					<div class="desc">
   						<h3><span>New Chandigarh</span></h3>
   						<span><?=$data['new_chandigarh_count']?> Properties</span>
   					</div>
   				</a>
   			</div>
   			<div class="col-md-3">
   				<a href="#" class="search-place img" style="background-image: url(assets/public/images/place-3.jpg);">
   					<div class="desc">
   						<h3><span>Mohali</span></h3>
   						<span><?=$data['mohali_count']?> Properties</span>
   					</div>
   				</a>
   			</div>
            <div class="col-md-3">
               <a href="#" class="search-place img" style="background-image: url(assets/public/images/place-3.jpg);">
                  <div class="desc">
                     <h3><span>Zirakpur</span></h3>
                     <span><?=$data['zirakpur_count']?> Properties</span>
                  </div>
               </a>
            </div>
   		</div>
   	</div>
   </section>

   <section class="ftco-section services-section bg-darken">
   	<div class="container">
   		<div class="row justify-content-center">
   			<div class="col-md-12 text-center heading-section heading-section-white ftco-animate">
   				<span class="subheading">Work flow</span>
   				<h2 class="mb-3">How it works</h2>
   			</div>
   		</div>
   		<div class="row">
   			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
   				<div class="media block-6 services services-2">
   					<div class="media-body py-md-4 text-center">
   						<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>01</span>
   							<img src="<?= base_url('assets/public/images/blob.svg"')?> alt="">
   						</div>
   						<h3>Evaluate Property</h3>
   						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
   					</div>
   				</div>      
   			</div>
   			<div class="col-md-3 d-flex align-self-stretch ftco-animate">
   				<div class="media block-6 services services-2">
   					<div class="media-body py-md-4 text-center">
   						<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>02</span>
   							<img src="<?= base_url('assets/public/images/blob.svg"')?> alt=""></div>
   							<h3>Meet Your Agent</h3>
   							<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
   						</div>
   					</div>      
   				</div>
   				<div class="col-md-3 d-flex align-self-stretch ftco-animate">
   					<div class="media block-6 services services-2">
   						<div class="media-body py-md-4 text-center">
   							<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>03</span>
   								<img src="<?= base_url('assets/public/images/blob.svg"')?> alt=""></div>
   								<h3>Close the Deal</h3>
   								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
   							</div>
   						</div>      
   					</div>
   					<div class="col-md-3 d-flex align-self-stretch ftco-animate">
   						<div class="media block-6 services services-2">
   							<div class="media-body py-md-4 text-center">
   								<div class="icon mb-1 d-flex align-items-center justify-content-center"><span>04</span>
   									<img src="<?= base_url('assets/public/images/blob.svg"')?> alt=""></div>
   									<h3>Have Your Property</h3>
   									<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
   								</div>
   							</div>      
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

   								<p><?= $data['about']['description']?></p>
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

   			<section class="ftco-section ftco-agent" style="display: none;">
   				<div class="container">
   					<div class="row justify-content-center pb-5">
   						<div class="col-md-12 heading-section text-center ftco-animate">
   							<span class="subheading">Agents</span>
   							<h2 class="mb-4">Our Agents</h2>
   						</div>
   					</div>
   					<div class="row">
   						<div class="col-md-3 ftco-animate">
   							<div class="agent">
   								<div class="img">
   									<img src="<?= base_url('assets/public/images/team-1.jpg')?>" class="img-fluid" alt="Colorlib Template">
   									<div class="desc">
   										<h3><a href="properties.html">Carlos Henderson</a></h3>
   										<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
   									</div>
   								</div>
   							</div>
   						</div>
   						<div class="col-md-3 ftco-animate">
   							<div class="agent">
   								<div class="img">
   									<img src="<?= base_url('assets/public/images/team-2.jpg')?>" class="img-fluid" alt="Colorlib Template">
   								</div>
   								<div class="desc">
   									<h3><a href="properties.html">Mike Bochs</a></h3>
   									<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
   								</div>
   							</div>
   						</div>
   						<div class="col-md-3 ftco-animate">
   							<div class="agent">
   								<div class="img">
   									<img src="<?= base_url('assets/public/images/team-3.jpg')?>" class="img-fluid" alt="Colorlib Template">
   								</div>
   								<div class="desc">
   									<h3><a href="properties.html">Jessica Moore</a></h3>
   									<p class="h-info"><span class="location">Listing</span> <span class="details">10 Properties</span></p>
   								</div>
   							</div>
   						</div>
   						<div class="col-md-3 ftco-animate">
   							<div class="agent">
   								<div class="img">
   									<img src="<?= base_url('assets/public/images/team-4.jpg')?>" class="img-fluid" alt="Colorlib Template">
   								</div>
   								<div class="desc">
   									<h3><a href="properties.html">Sarah Geronimo</a></h3>
   									<p class="h-info"><span class="position">Listing</span> <span class="details">10 Properties</span></p>
   								</div>
   							</div>
   						</div>
   					</div>
   				</div>
   			</section>


   			<section class="ftco-section ftco-no-pt" style="display: none;">
   				<div class="container">
   					<div class="row justify-content-center mb-5">
   						<div class="col-md-7 heading-section text-center ftco-animate">
   							<span class="subheading">Blog</span>
   							<h2>Recent Blog</h2>
   						</div>
   					</div>
   					<div class="row d-flex">
   						<div class="col-md-3 d-flex ftco-animate">
   							<div class="blog-entry justify-content-end">
   								<div class="text">
   									<a href="blog-single.html" class="block-20 img" style="background-image: url(assets/public/images/image_1.jpg);">
   									</a>
   									<div class="meta mb-3">
   										<div><a href="#">June 01, 2020</a></div>
   										<div><a href="#">Admin</a></div>
   										<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
   									</div>
   									<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
   								</div>
   							</div>
   						</div>
   						<div class="col-md-3 d-flex ftco-animate">
   							<div class="blog-entry justify-content-end">
   								<div class="text">
   									<a href="blog-single.html" class="block-20 img" style="background-image: url(assets/public/images/image_2.jpg);">
   									</a>
   									<div class="meta mb-3">
   										<div><a href="#">June 01, 2020</a></div>
   										<div><a href="#">Admin</a></div>
   										<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
   									</div>
   									<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
   								</div>
   							</div>
   						</div>
   						<div class="col-md-3 d-flex ftco-animate">
   							<div class="blog-entry justify-content-end">
   								<div class="text">
   									<a href="blog-single.html" class="block-20 img" style="background-image: url(assets/public/images/image_3.jpg);">
   									</a>
   									<div class="meta mb-3">
   										<div><a href="#">June 01, 2020</a></div>
   										<div><a href="#">Admin</a></div>
   										<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
   									</div>
   									<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
   								</div>
   							</div>
   						</div>
   						<div class="col-md-3 d-flex ftco-animate">
   							<div class="blog-entry justify-content-end">
   								<div class="text">
   									<a href="blog-single.html" class="block-20 img" style="background-image: url(assets/public/images/image_4.jpg);">
   									</a>
   									<div class="meta mb-3">
   										<div><a href="#">June 01, 2020</a></div>
   										<div><a href="#">Admin</a></div>
   										<div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
   									</div>
   									<h3 class="heading"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
   								</div>
   							</div>
   						</div>
   					</div>
   				</div>
   			</section>