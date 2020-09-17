
<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/public/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate pb-0 text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Register <i class="fa fa-chevron-right"></i></span></p>
				<h1 class="mb-3 bread">Register</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section contact-section">
	<div class="container">
		<div class="row block-9 justify-content-center mb-5">
			<div class="col-md-8 mb-md-5">
				<h2 class="text-center">Register Here</h2>
				<?php if ($this->session->flashdata('alert')): ?>
					<div class="col-lg-6">
						<div class="bs-component">
							<div class="alert alert-dismissible alert-<?= $this->session->flashdata('alert_class') ?>">
								<button class="close" type="button" data-dismiss="alert">×</button> <?= $this->session->flashdata('alert') ?>
							</div>
						</div>
					</div>
				<?php endif;?>
				<form action="<?= base_url('register') ?>" method="POST" class="bg-light p-5 contact-form">
					<div class="form-group">
						<input type="text" class="form-control" name="first_name" value="<?= set_value('first_name')?>" placeholder="Your Name" required>
						<?= form_error('first_name');?>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="last_name"  value="<?= set_value('last_name')?>" placeholder="Your Name" required>
						<?= form_error('last_name');?>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="email" value="<?= set_value('email')?>" placeholder="Your Email" required>
						<?= form_error('email');?>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="phone"  value="<?= set_value('phone')?>" placeholder="Mobile Number" required>
						<?= form_error('phone');?>
					</div>
					<div class="form-group">
						<textarea class="form-control" name="address" value="<?= set_value('address')?>" placeholder="Address" required></textarea>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required>
						<?= form_error('password');?>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
						<?= form_error('confirm_password');?>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary py-3 px-5">Register</button>
					</div>
					<div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
						<span class="font-weight-normal">Already have an account? <a href="<?= base_url('login') ?>" class="font-weight-bold">Login here</a></span>
					</div>
				</form>
			</div>
		</div>
		<div class="row d-flex mb-5 contact-info justify-content-center">
			<?php $data = $this->global_model->get_all('admin_address'); ?>
			<?php foreach($data as $value):?>
				<div class="col-md-8">
					<div class="row mb-5">
						<div class="col-md-4 text-center py-4">
							<div class="icon">
								<span class="fa fa-map"></span>
							</div>
							<p><span>Address:</span> <?=$value['address'] ?></p>
						</div>
						<div class="col-md-4 text-center border-height py-4">
							<div class="icon">
								<span class="fa fa-phone"></span>
							</div>
							<p><span>Phone:</span> <a href="tel://1234567920"><?= $value['mobile']  ?></a></p>
						</div>
						<div class="col-md-4 text-center py-4">
							<div class="icon">
								<span class="fa fa-paper-plane"></span>
							</div>
							<p><span>Email:</span> <a href="mailto:info@yoursite.com"><?= $value['email'] ?> </a></p>
						</div>
					</div>
				</div>
			<?php endforeach; ?>

		</div>
        <!-- <div class="row justify-content-center">
        	<div class="col-md-8">
        		<div id="map" class="bg-white"></div>
        	</div>
        </div> -->
    </div>
</section>	
