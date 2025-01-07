<<<<<<< HEAD
<footer id="footer" class="footer ">
=======
		<!-- Footer Area -->
		<footer id="footer" class="footer ">
>>>>>>> 3547f6931a18eed095ea33580ad7e7456a27c609
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>About Us</h2>
								<p>Lorem ipsum dolor sit am consectetur adipisicing elit do eiusmod tempor incididunt ut labore dolore magna.</p>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="icofont-facebook"></i></a></li>
									<li><a href="#"><i class="icofont-google-plus"></i></a></li>
									<li><a href="#"><i class="icofont-twitter"></i></a></li>
									<li><a href="#"><i class="icofont-vimeo"></i></a></li>
									<li><a href="#"><i class="icofont-pinterest"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer f-link">
								<h2>Quick Links</h2>
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Services</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Cases</a></li>
<<<<<<< HEAD
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>	
=======
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Other Links</a></li>
>>>>>>> 3547f6931a18eed095ea33580ad7e7456a27c609
										</ul>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Consuling</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Finance</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Testimonials</a></li>
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>FAQ</a></li>
<<<<<<< HEAD
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>	
=======
											<li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a></li>
>>>>>>> 3547f6931a18eed095ea33580ad7e7456a27c609
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Open Hours</h2>
								<p>Lorem ipsum dolor sit ame consectetur adipisicing elit do eiusmod tempor incididunt.</p>
								<ul class="time-sidual">
									<li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
									<li class="day">Saturday <span>9.00-18.30</span></li>
									<li class="day">Monday - Thusday <span>9.00-15.00</span></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-12">
							<div class="single-footer">
								<h2>Newsletter</h2>
								<p>subscribe to our newsletter to get allour news in your inbox.. Lorem ipsum dolor sit amet, consectetur adipisicing elit,</p>
								<form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
									<input name="email" placeholder="Email Address" class="common-input" onfocus="this.placeholder = ''"
										onblur="this.placeholder = 'Your email address'" required="" type="email">
									<button class="button"><i class="icofont icofont-paper-plane"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Top -->
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-12">
<<<<<<< HEAD
							<div class="copyright-content">
								<p>© Copyright 2018  |  All Rights Reserved by <a href="https://www.wpthemesgrid.com" target="_blank">wpthemesgrid.com</a> </p>
=======
							<?php 
								$dsmb_options = get_option('dsmb_theme_options');
								$copyrights_text = $dsmb_options['copy_right'] ? $dsmb_options['copy_right'] : 'All Rights Reserved by';
								$dev_name = $dsmb_options['dev_name'] ? $dsmb_options['dev_name'] : 'Emran';
								$dev_url = $dsmb_options['dev_url'] ? $dsmb_options['dev_url'] : 'https://fb.me/pcbnll';
								$get_current_year = date('Y');
							
							?>
							<div class="copyright-content">
								<?php  
									printf("<p>%s %s | %s <a href='%s' target='_blank'>%s</a></p>", '&copy', $get_current_year, $copyrights_text, $dev_url, $dev_name );
								?>
>>>>>>> 3547f6931a18eed095ea33580ad7e7456a27c609
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
<<<<<<< HEAD
		</footer>
=======
		</footer>
		<!--/ End Footer Area -->
		<?php wp_footer(); ?>
    </body>
</html>
>>>>>>> 3547f6931a18eed095ea33580ad7e7456a27c609
