<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="header-slider">
	<div class="title">
		<img class="logolarge" src="http://holyrosarychurch.ca/wp-content/uploads/2019/01/whitecross.png">
		<h1>Holy Rosary <br>Roman Catholic Church</h1>
		<p class="sub">Chiesa del Santo Rosario</p>
	</div>
</div>

<div class="container-fluid">
<div class ="row">
	<div class="col-lg-3 col-sm-6 color-1">
		<div class="padding-feature-box">
		<h2 class="squares">Our Community</h2>
		<h6 class="cmsmasters_heading">Our community started as an Italian church, that now includes many who live in the area. </h6>
		<h6 class="cta"><a href ="/about">Learn More</a></h6>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6 color-2">
		<div class="padding-feature-box">
		<h2 class="squares">Liturgy Today</h2>
		<h6 class="cmsmasters_heading"><?php
$day = strftime('%A');
if($day == 'Monday') echo 'No masses today';
elseif($day == 'Tuesday') echo 'Mass is at 9:00 AM English';
elseif($day == 'Wednesday') echo 'Mass is at 9:00 AM English';
elseif($day == 'Thursday') echo 'Mass is at 9:00 AM English';
elseif($day == 'Friday') echo 'Mass is at 10:00 AM at Villa Cabrini';
elseif($day == 'Saturday') echo 'No masses today';
elseif($day == 'Sunday') echo ' Mass is at 9:00 AM English, 10:30 AM Italian,  12:00 PM English & 4:30 PM English';
?>. <br> Our office is <?php
$day = strftime('%A');
if($day == 'Monday') echo 'open, 10:00 AM - 8:00 PM';
elseif($day == 'Tuesday') echo 'open, 10:00 AM - 8:00 PM';
elseif($day == 'Wednesday') echo 'open, 10:00 AM - 8:00 PM';
elseif($day == 'Thursday') echo 'open, 10:00 AM - 8:00 PM';
elseif($day == 'Friday') echo 'open, 10:00 AM - 8:00 PM';
elseif($day == 'Saturday') echo 'open, 9:00 AM - 4:00 PM';
elseif($day == 'Sunday') echo 'CLOSED';
?>. </h6>
		<h6 class="cta"><a href ="/about/liturgical-times">Learn More</a></h6>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6 color-3">
		<div class="padding-feature-box">
		<h2 class="squares">Join Us</h2>
		<h6 class="cmsmasters_heading">With many ministries to serve our community, we are always looking for help. </h6>
		<h6 class="cta"><a href ="/ministries">Learn More</a></h6>
		</div>
	</div>
	<div class="col-lg-3 col-sm-6 color-4">
		<div class="padding-feature-box">
		<h2 class="squares">Donate</h2>
		<h6 class="cmsmasters_heading">Through your donations we are able to provide our services to the community. </h6>
		<h6 class="cta"><a href ="/donations/">Learn More</a></h6>
		</div>
	</div>
</div>
</div>


<?php $loop = new WP_Query( array( 'post_type' => 'tribe_events', 'posts_per_page' => 3, 'eventDisplay' => 'upcoming', 'order' => 'ASC', 'paged' ) ); ?>
 <div id="content grey">
      <div class="container inner">
		  <h3 class="home-news"><span class="headline">Upcoming Events</span></h3>
		  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		  <div class="row event-box">
			  <?php get_post_meta($post->ID, 'events', true); ?>
			  <div class="col-md-3">
				<div class="event_big_day"><?php echo tribe_get_start_date($post, false, $format = 'd'); ?> </div>
				<div class="event_big_date_ovh">
						<div class="event_big_month"> <?php echo tribe_get_start_date($post, false, $format = 'F'); ?> </div>
						<div class="event_big_week"> <?php echo tribe_get_start_date($post, false, $format = 'l'); ?> </div>
					</div>
			  </div>
			  <div class="col-md-7">
<p class="event-title"><?php the_title('<a href="' . tribe_get_event_link() . '" title="' . the_title_attribute('echo=0') . '" rel="bookmark">', '</a>'); ?></p>
		<p class="event-date"><?php echo tribe_get_start_date(); ?> - <?php echo tribe_get_end_date($post, false, $format = 'g:i A'); ?></p>
		<p class="event-location"><?php  $venue = tribe_get_venue();  if ( !empty( $venue ) ) : ?><strong>Location: </strong><?php echo $venue; ?> <?php endif; ?></p>
			  </div>
			  <div class="col-md-2">
				<a href="<?php echo tribe_get_event_link(); ?>" class="event-link click" rel="bookmark">Find out more</a>
			  </div>
		 </div>
		 <?php endwhile; ?>
		  
		<div class="row" style="margin-top: 50px;">
				<h5 class="text-center">
					<a class="more-button click" href="http://holyrosarychurch.ca/events/">View our Event Calendar</a>
				</h5>
		</div>

	 </div>
</div>

<div class="dark-wrapper">
      <div class="container">
		  <div class="row">
		  	<div class="col-lg-4 offset-lg-2"><p class="sub">Subscribe to our Newsletter!</p></div>
			<div class="col-lg-4">
				<form action="//holyrosarychurch.us16.list-manage.com/subscribe/post?u=5c07af4a14c06b098ef318dd6&amp;id=f30b5d2f7a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank">
					<div class="input-group">
						<input type="email" value="" name="EMAIL" id="mce-EMAIL" required="required" class="form-control news-text">
						<span class="input-group-btn">
							<button class="btn btn-default news" type="submit"><i class="fa fa-send"></i>&nbsp;</button>
						</span>
					</div>
					<div id="mce-responses" class="clear">
						<div class="response" id="mce-error-response"></div>
						<div class="response" id="mce-success-response"></div>
					</div> 
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5c07af4a14c06b098ef318dd6_f30b5d2f7a" tabindex="-1" value=""></div>
				</form>
			 </div>
			  <div class="col-lg-2"></div>
		</div>
	</div>
</div>

<!--End mc_embed_signup-->

 <div id="content">
      <div class="container inner">
        <h3 class="home-news"><span class="headline">Parish News</span></h3>


        <div class="row">
		<?php $the_query = new WP_Query( 'posts_per_page=6' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

          <div class ="col-md-4">
                 <div class="post-slide2">
                      <div class="post-img">
						  <?php $categories = get_the_category();
						  		foreach($categories as $category) {
									if($category->cat_name == "Bulletins") {
        								echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Bulletins.png">';
									} else if ($category->cat_name == "Masses") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Masses.png">';
									} else if ($category->cat_name == "Mass Intentions") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Intentions.png">';
									} else if ($category->cat_name == "Baptisms") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Baptism.png">';
						  			} else if ($category->cat_name == "Catechism News") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/CatechismCat.png">';
						  			} else if ($category->cat_name == "Weddings") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Weddings.png">';
									} else if ($category->cat_name == "Funerals") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Funerals.png">';
									} else if ($category->cat_name == "Ministries") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Ministries.png">';
									} else if ($category->cat_name == "Women's Auxiliary") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Ladies.png">';
									} else if ($category->cat_name == "General News") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Gen.png">';
									} else if ($category->cat_name == "Fundraiser") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Fundraise.png">';
									} else if ($category->cat_name == "Events") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Events.png">';
									} else if ($category->cat_name == "Development &amp; Peace") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Development.png">';
									} else if ($category->cat_name == "Invitations") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/themes/HRC2019/images/Invitations.png">';
									} else if ($category->cat_name == "La Domenica") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/uploads/2019/12/ladomenica.png">';
									} else if ($category->cat_name == "Live Stream Masses") {
										echo '<img src="http://holyrosarychurch.ca/wp-content/uploads/2020/07/YoutubeLinks.png">';
									}
								}
							?>
                      </div>
                            <div class="post-content">
                                <h3 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <ul class="post-bar">
                                    <li><i class="fa fa-calendar"></i> <?php the_time('jS F Y'); ?></li>
                                    <li><i class="fa fa-folder"></i>
										<?php
$output = '';
foreach((get_the_category()) as $category) {
    if($category->name==$homecat) continue;
    $category_id = get_cat_ID( $category->cat_name );
    $category_link = get_category_link( $category_id );

    if(!empty($output))
        $output .= ', ';
    $output .= '<span class="cat"><a href="'.$category_link.'">'.$category->cat_name.'</a></span>';
}
echo $output;
?>
                                    </li>
                                </ul>
                                <a href="<?php the_permalink() ?>" class="read-more">read more</a>
                            </div>
                        </div>
          </div>
<?php endwhile; wp_reset_postdata(); ?>
        </div>
      </div>
    </div>


<?php get_footer(); ?>
