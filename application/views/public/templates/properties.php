 <section class="hero-wrap hero-wrap-2" style="background-image: url('assets/public/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
 	<div class="overlay"></div>
 	<div class="container">
 		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
 			<div class="col-md-9 ftco-animate pb-0 text-center">
 				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Properties <i class="fa fa-chevron-right"></i></span></p>
 				<h1 class="mb-3 bread">Properties</h1>
 			</div>
 		</div>
 	</div>
 </section>

 <section class="ftco-section ftco-no-pb ftco-no-pt">
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

 <section class="ftco-section goto-here">
 	<div class="container">
 		<div class="row justify-content-center">
 			<div class="col-md-12 heading-section text-center ftco-animate mb-5">
 				<span class="subheading">What we offer</span>
 				<h2 class="mb-2">Properties</h2>
 			</div>
 		</div>
 		<div class="row">
 			<?php foreach($data as $key => $value):?>
 				<div class="col-md-4">
 					<div class="property-wrap ftco-animate">
 						<a href="properties-single.html" class="img" style="background-image: url(assets/public/images/work-1.jpg);">
 							<div class="rent-sale">
 								<span class="<?= strtolower($value['sale_rent'])?>"><?=$value['sale_rent']?></span>
 							</div>
 							<p class="price"><span class="orig-price">₹ <?=$value['price']?></span></p>
 						</a>
 						<div class="text">
 							<ul class="property_list">
 								<li><span class="flaticon-bed"></span><?=$value['bhk']?></li>
 								<li><span class="flaticon-bathtub"></span>2</li>
 								<li><span class="flaticon-floor-plan"></span><?=$value['size']?></li>
 							</ul>
 							<h3><a href="#"><?=$value['property_title']?></a></h3>
 							<span class="location"><?=$value['location']?></span>
 							<a href="#" class="d-flex align-items-center justify-content-center btn-custom">
 								<span class="fa fa-link"></span>
 							</a>
 							<div class="list-team d-flex align-items-center mt-2 pt-2 border-top">
 								<div class="d-flex align-items-center">
 									<div class="img" style="background-image: url(assets/public/images/person_1.jpg);"></div>
 									<h3 class="ml-2">John Dorf</h3>
 								</div>
 								<span class="text-right">2 weeks ago</span>
 							</div>
 						</div>
 					</div>
 				</div>
 			<?php endforeach; ?>
 		</div>
 		<div class="row mt-5">
 			<div class="col text-center">
 				<div class="block-27">
 					<ul>
 						<li><a href="#">&lt;</a></li>
 						<li class="active"><span>1</span></li>
 						<li><a href="#">2</a></li>
 						<li><a href="#">3</a></li>
 						<li><a href="#">4</a></li>
 						<li><a href="#">5</a></li>
 						<li><a href="#">&gt;</a></li>
 					</ul>
 				</div>
 			</div>
 		</div>
 	</div>
 </section>