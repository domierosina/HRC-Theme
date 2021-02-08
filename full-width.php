<?php /* Template Name: Full */ ?>
<?php get_header(); ?>

<div class="header-page">
	<div class="title-page">
		<h1 class="title-pg">
			<?php the_title(); ?>
		</h1>
	</div>
</div>

<div class="container">
<div class="inner-box">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="row">
		<div class="col-md-12">
			<?php the_content(); ?>
		</div>
	</div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, this page does not exist.'); ?></p>
	<?php endif; ?>
</div>
</div>

<?php get_footer(); ?>