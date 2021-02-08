<?php /* Template Name: Archives */ ?>
<?php get_header(); ?>

<div class="header-page">
	<div class="title-page">
		<h1 class="title-pg">
			Post Archives
		</h1>
	</div>
</div>

<div class="container inner">
	<div class ="row">
		<div class="col-sm-12">
			<?php the_content(); ?>
		</div>
	</div>
		<div class="row">
			<h3 class="home-news"><span class="headline">Archives by Subject:</span></h3>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/bulletins/">Bulletins</a></p>
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/catechism-news/">Catechism News</a></p>
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/development-peace/">Development &amp; Peace</a></p>
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/events">Events</a></p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/fundraiser/">Fundraiser</a></p>
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/general/" >General News</a></p>
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/invitations/" >Invitations</a></p>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/masses/">Masses</a></p>
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/ministries/" >Ministries</a></p>
				<p style="text-align: center;"><a href="http://holyrosarychurch.ca/category/womens-auxiliary/" >Women's Auxiliary</a></p>
			</div>
		</div>
		
		<div class="row">	
			<h3 class="home-news"><span class="headline">Year &amp; Month</span></h3>
				<br>
			
			<style>
				.emptymonth {
    				color: #bfbfbf;
					font-size: 18px;
					margin: auto 2%;
				}
				
				.test a {
					color: black;
					font-size: 18px;
					margin: auto 2%;
				}
				.test a:hover {
					color: #a68453;
				}
			</style>
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 test">
				<?php compact_archive($style='block',$before='<center>', $after='</center>'); ?>
			</div>
		</div>
</div>


<?php get_footer(); ?>
