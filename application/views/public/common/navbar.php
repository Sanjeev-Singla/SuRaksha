 <body>
 	
 	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
 		<div class="container">
 			<a class="navbar-brand" href="index.html">Su-Raksha</a>
 			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
 				<span class="oi oi-menu"></span> Menu
 			</button>

 			<div class="collapse navbar-collapse" id="ftco-nav">
 				<ul class="navbar-nav ml-auto">
 					<li class="nav-item active"><a href="<?= base_url('/')?>" class="nav-link">Home</a></li>
 					<li class="nav-item"><a href="<?= base_url('about')?>" class="nav-link">About</a></li>
 					<li class="nav-item"><a href="<?= base_url('agent')?>" class="nav-link">Agent</a></li>
 					<li class="nav-item"><a href="<?= base_url('services')?>" class="nav-link">Services</a></li>
 					<li class="nav-item"><a href="<?= base_url('properties')?>" class="nav-link">Properties</a></li>
 					<li class="nav-item"><a href="<?= base_url('blog')?>" class="nav-link">Blog</a></li>
 					<li class="nav-item"><a href="<?= base_url('contact')?>" class="nav-link">Contact Us</a></li>
					<?php if ($this->session->userdata('user_id')) { ?>
						<li class="nav-item"><a href="<?= base_url('logout')?>" class="nav-link">Logout</a></li> 
					<?php } else { ?>
						<li class="nav-item"><a href="<?= base_url('register')?>" class="nav-link">Register</a></li>
					<?php } ?>
					
 			</div>
 		</div>
 	</nav>
    <!-- END nav -->