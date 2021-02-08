<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>

<div class="header-page" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/map.png);background-size: cover;background-position: center;">
	<div class="title-page">
		<h1 class="title-pg">
			<?php the_title(); ?>
		</h1>
	</div>
</div>

<div class="container inner">
	<div class ="row">
		<div class="col-sm-3">
			<p class="text-center"><strong>ADDRESS</strong></p>
			<p class="text-center">510 River Avenue <br> Winnipeg, MB<br> R3L 0E1</p>

			<hr class="small-side">
			<p class="text-center"><strong>OFFICE HOURS</strong></p>
			<p class="text-center">Monday to Friday: <br>10:00 AM - 8:00 PM<br>
			Saturday: 9:00 AM - 4:00 PM<br>
			Sunday: Closed.	</p>

			<hr class="small-side">
			<p class="text-center"><strong>CONTACT</strong></p>
			<p class="text-center">Phone: (204) 284-5140 <br> E-mail: info@holyrosarychurch.ca
			</p>
		</div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-sm-9">
			<?php the_content(); ?>
		</div>
		<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
		<?php endif; ?>

	</div>
</div>

<?php get_footer(); ?>
