 <body>
 	
 	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
 		<div class="container">
 			<a class="navbar-brand" href="index.html">Su-Raksha</a>
 			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
 				<span class="oi oi-menu"></span> Menu
 			</button>
 			<?php
 				$url_value = $this->uri->segment(1);
 			?>
 			<div class="collapse navbar-collapse" id="ftco-nav">
 				<ul class="navbar-nav ml-auto">
 					<li class="nav-item <?= ($url_value=='home')?"active":""?>"><a href="<?= base_url('/')?>" class="nav-link">Home</a></li>
 					<li class="nav-item  <?= ($url_value=='about')?"active":""?>"><a href="<?= base_url('about')?>" class="nav-link">About</a></li>
 					<li class="nav-item <?= ($url_value=='services')?"active":""?>"><a href="<?= base_url('services')?>" class="nav-link">Services</a></li>
 					<li class="nav-item <?= ($url_value=='properties')?"active":""?> "><a href="<?= base_url('properties')?>" class="nav-link">Properties</a></li>
 					<li class="nav-item <?= ($url_value=='blog')?"active":""?>"><a href="<?= base_url('blog')?>" class="nav-link">Blog</a></li>
 					<li class="nav-item <?= ($url_value=='contact')?"active":""?>"><a href="<?= base_url('contact')?>" class="nav-link">Contact Us</a></li>


 					<li class="nav-item dropdown">
                        <a href="index.html#" class="nav-link" data-toggle="dropdown"><span class="nav-link-inner-text">User Profile</span> <span class="fas fa-angle-down nav-link-arrow ml-2"></span></a>
                        <ul class="dropdown-menu">
                           <li class="dropdown-submenu">
                              <li class="sub-menu">
                                  <?php if ($this->session->userdata('user_id')) { ?>
                                  <a href="<?= base_url('logout') ?>" class="dropdown-item">Logout</a> 
                                  <a href="<?= base_url('update-password') ?>" class="dropdown-item">Update Password</a> 
                                  <?php } else { ?>
                                 <li><a href="<?= base_url('login') ?>" class="dropdown-item">Login</a> 
                                 <a href="<?= base_url('register') ?>" class="dropdown-item">Register</a> 
                                 <?php } ?>
                                 </li>
                              </li>
                           </li> 
					
					
 			</div>
 		</div>
 	</nav>
    <!-- END nav -->