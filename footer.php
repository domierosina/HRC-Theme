<!--</div>
</div> -->
	<div class="clearfix"></div>
	<div class="quotes">
		<div class="container"> 
			<div class="row">
					<?php dynamic_sidebar( 'bible_quote_rotation' ); ?>
			</div> 
		</div>
	</div>
	<footer class="site-footer">
		<div class="container footer-inner">
			<div class="row" style=" margin-bottom: 30px;">
				<div class="col-md-3">
					<div class="plain-box">
					<h5 class="sitefooter">Information</h5>
						<p>
							<i class="fa fa-location-arrow"></i> 510 River Ave, Winnipeg, MB<br>
							<i class="fa fa-envelope-o"></i> <a href="mailto:info@holyrosarychurch.ca?subject=Website General Contact">info@holyrosarychurch.ca</a> <br>
							<i class="fa fa-phone"></i> (204) 284 - 5140<br>
							<a href="https://www.instagram.com/holyrosarychurch" target="_blank" rel="nofollow noopener"><i class="fa fa-instagram"></i> @holyrosarychurch</a>
						</p>
						<br>
						<a class="btn-grey" href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2VEW349B29MJU&source=url">Donate Now</a>
					</div>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer_2' ); ?>
					<!-- <h5 class="sitefooter">I'm New</h5>
					<ul class="border_list">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Events</a></li>
						<li><a href="#">Volunteer</a></li>
						<li><a href="#">Donate</a></li>
						<li><a href="#">Become a Parishoner</a></li>
					</ul> -->						
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer_3' ); ?>
					<!-- <h5 class="sitefooter">Ministries</h5>
					<ul class="border_list">
						<li><a href="#">Womens Auxiliary</a></li>
						<li><a href="#">Music</a></li>
						<li><a href="#">Catechism</a></li>
						<li><a href="#">Adult Group</a></li>
						<li><a href="#">More</a></li>
					</ul>-->
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer_4' ); ?>
					<!-- <h5 class="sitefooter">Sacraments</h5>
					<ul class="border_list">
						<li><a href="#">Baptism</a></li>
						<li><a href="#">Children's Faith</a></li>
						<li><a href="#">RCIA</a></li>
						<li><a href="#">Marriage</a></li>
						<li><a href="#">More</a></li>
					</ul>-->
					
				</div>
			</div>
			<div class="row"  style="border-top-width: 1px; border-top-style: solid; padding: 8px 0; border-color: #b3b3b3;">
				<div class="col-lg-10">
					<p> Copyright &copy; 2011 - <?php echo date("Y"); ?> <a href="mailto:info@holyrosarychurch.ca">Holy Rosary Roman Catholic Church</a>  |  Site Design: <a href="http://domenica.dev">Domenica Burroughs</a></p> 
				</div>
				<div class="col-lg-2">
					<p style="text-align: right;"><a href="http://holyrosarychurch.ca/wp-login.php"><i class="fa fa-sign-in" aria-hidden="true"></i></a> | 
						<a href="https://twitter.com/HolyRoWpg" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i></a> 
						<a href="https://www.instagram.com/holyrosarychurch" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a> 
						<a href="https://www.facebook.com/HolyRosaryChurch.ca/" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a> 
					</p>
				</div>
			</div>	
		</div>

	</footer>
	<?php wp_footer(); ?>
</body>
</html>