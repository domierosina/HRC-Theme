<?php /* Template Name: 404 Page */ ?>
<?php get_header(); ?>

<div class="header-page">
		<div class="title-page">
		<h1 class="title-pg">
			404 Error - Oops!
		</h1>
</div>
</div>

<div class="container inner" style="width: 800px;">
	<div class ="row">
		<div class="col-sm-12">
			<p class="text-center" style="font-size: 90px;"><i class="fa fa-exclamation-triangle"></i></p>
	<p class="text-center" style="font-size: 1.5em;">The page you are looking for is no longer here, or never existed in the first place. </p>
	<p class="text-center" style="font-size: 1.5em;">You can try searching for what you are looking for using the form below. If that still doesn't provide the results you are looking for, you can always start over from the home page. </p>
	<p class="text-center" style="font-size: 1.5em;">If you think the page you were after <em>should</em> actually exist, <a href="/contact/">please notify us</a>.</p>
			<br>
			<p class="text-center">
				<?php get_search_form(); ?>
			</p>
</div>
</div>
</div>

<?php get_footer(); ?>
