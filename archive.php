<?php /* Template Name: Category */ ?>

<?php get_header(); ?>

<div class="header-page">
	<div class="title-page">
		<h1 class="title-pg" style="text-transform:capitalize;">
			<?php
					if (is_category()) {
						echo '';
					} elseif (is_month()) {
						echo '' . get_the_date('F Y');
					} ?>
		</h1>
	</div>
</div>


      <div class="container inner">
        <div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
				<?php endwhile; ?>
				</div>

			<nav class="pagination">
				<p class="alignleft"><?php next_posts_link('<i class="fa fa-angle-left"></i> Older Entries'); ?></p>
				<p class="alignright"><?php previous_posts_link('Newer Entries <i class="fa fa-angle-right"></i>'); ?></p>
			</nav>
		  	<div style="clear: both;"></div>
		</div>
			<?php else : ?>
		<?php endif; ?>
	<?php get_footer(); ?>
